<?php
namespace CSV\Parser;

class CSV
{
    private $fileName;
    private $filePointer;
    private $headerRow = null;

    public function __construct($fileName)
    {
        $this->fileName = $fileName;    
    }

    public function openCSVFile()
    {
        $this->filePointer = fopen($this->fileName, 'r');
    }

    public function closeCSVFile()
    {
        fclose($this->filePointer);
    }

    public function getHeaderRow()
    {
        if ($this->headerRow === null) {
            $this->headerRow = fgetcsv($this->filePointer);
        }
        return $this->headerRow;
    }

    public function getBodyRow()
    {
        $rows = [];
        while ($row = fgetcsv($this->filePointer, 1000, ',')) {
            $rows[] = $row;
        }
        return $rows;
    }
}