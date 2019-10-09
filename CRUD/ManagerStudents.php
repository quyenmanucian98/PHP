<?php


class ManagerStudents
{
    public $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function readFile()
    {
        $dataFile = file_get_contents($this->path);
        return json_decode($dataFile, true);
    }

    public function saveDataFile($data)
    {
        $currentData = $this->readFile();
        $listStudent = array_push($currentData, $data);
        $newData = json_encode($currentData);
        file_put_contents($this->path, $newData);
    }

    public function addStudents($student)
    {
        $listStudent = [
            'name' => $student->name,
            'address' => $student->address,
            'phone' => $student->phone,
            'role' => $student->role,
            'class' => $student->class
        ];
        $this->saveDataFile($listStudent);
    }

}