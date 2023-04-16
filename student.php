<?php
class Student{
    public $Name;
    public $Age;
    public $Id;
    public $Major;

    public function about()
    {
        echo('The Name of student: '.$this->Name. 'The Age: '.$this->Age);
    }
}