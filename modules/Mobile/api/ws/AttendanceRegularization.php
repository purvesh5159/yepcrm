<?php

class Mobile_WS_AttendanceRegularization extends Mobile_WS_Controller {
    function process(Mobile_API_Request $request) {
        global $current_user, $adb;
        $response = new Mobile_API_Response();
        $recordId = $current_user->id;
        $userName = $current_user->user_name;

        $month = $request->get('month');
        $year = $request->get('year');
        $useruniqid = $request->get('useruniqid');

        // Function to get missing attendance dates with specific attendance ID conditions
        function getMissingAttendanceDates($month, $year, $useruniqid) {
            // Get the first and last day of the month
            $firstDay = new DateTime("first day of $year-$month");
            $lastDay = new DateTime("last day of $year-$month");

            // Generate all dates in the month
            $datesInMonth = [];
            for ($date = $firstDay; $date <= $lastDay; $date->modify('+1 day')) {
                $datesInMonth[] = $date->format('Y-m-d');
            }

            // Fetch attendance records for the user with specific conditions
            $db = PearDatabase::getInstance();
            $query = "SELECT 
                        attendanceid, 
                        checkindate, 
                        checkoutdate 
                      FROM vtiger_attendance 
                      INNER JOIN vtiger_crmentity ON vtiger_crmentity.crmid = vtiger_attendance.attendanceid
                      WHERE 
                        MONTH(checkindate) = ? AND YEAR(checkindate) = ? 
                        AND vtiger_crmentity.smownerid = ? 
                        AND vtiger_crmentity.deleted = 0
                        AND checkoutdate IS NULL";
            $params = [$month, $year, $useruniqid];
            $result = $db->pquery($query, $params);
            
            $attendanceRecords = [];
            $existingDates = [];
            while ($row = $db->fetch_array($result)) {
                $checkinDate = $row['checkindate'];
                $existingDates[] = $checkinDate;
                $attendanceRecords[$checkinDate] = [
                    'attendanceid' => $row['attendanceid'],
                    'checkindate' => $checkinDate
                ];
            }

            $missingDates = array_diff($datesInMonth, $existingDates);
            return [
                'missingDates' => $missingDates,
                'attendanceRecords' => $attendanceRecords
            ];
        }

        // Get missing attendance dates and records
        $attendanceData = getMissingAttendanceDates($month, $year, $useruniqid);

        // Prepare the response with default status and user ID
        $formattedAttendanceData = [];
        foreach ($attendanceData['missingDates'] as $date) {
            $formattedAttendanceData[] = [
                'date' => $date,
                'attendance_status' => 'Regulization',
                'user_id' => $useruniqid,
                'attendance_id' => null,
                'checkin_date' => null
            ];
        }

        // Add existing attendance records to the response
        foreach ($attendanceData['attendanceRecords'] as $date => $record) {
            $formattedAttendanceData[] = [
                'date' => $date,
                'attendance_status' => 'Pending Check Out',
                'user_id' => $useruniqid,
                'attendance_id' => $record['attendanceid'],
                'checkin_date' => $record['checkindate']
            ];
        }

        $response->setApiSucessMessage('Attendance records fetched successfully.');
        $response->setResult($formattedAttendanceData);
        return $response;
    }
}