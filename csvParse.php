<?php
if (isset($_FILES['csv-file']) && $_FILES['csv-file']['error'] == 0) {

    $csvFile = $_FILES['csv-file']['tmp_name'];

    function csvParser($csvFile)
    {
        ob_start();
        if (($handle = fopen($csvFile, 'r')) !== false) {
            $theHeader = null;
            $csvData = [];
            while (($theRow = fgetcsv($handle, 1000, ",")) !== false) {
                if (!$theHeader) {
                    $theHeader = $theRow;
                } else {
                    $csvData[] = array_combine($theHeader, $theRow);
                }
            }
        }
        fclose($handle);
        ob_end_flush();
        echo json_encode($csvData);
    }

    header('Content-Type: application/json');
    csvParser($csvFile);
}