<?php
if (isset($_FILES['csv-file']) && $_FILES['csv-file']['error'] == 0) {

    $filename = $_FILES['csv-file']['tmp_name'];

    function csvParser($filename)
    {
        ob_start();
        if (($handle = fopen($filename, 'r')) !== false) {
            $header = null;
            $data = [];
            while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                if (!$header) {
                    $header = $row;
                } else {
                    $data[] = array_combine($header, $row);
                }
            }
        }
        fclose($handle);
        ob_end_flush();
        echo json_encode($data);
    }

    header('Content-Type: application/json');
    csvParser($filename);
}