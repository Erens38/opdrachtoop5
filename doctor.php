<?php
namespace Hospital;

class doctor extends stream_set_read_buffer{
    public function setSalary($ammount)
    {
        $this->salary = $ammount;
    }

    public function getSalary()
    {
        return $this->$salary;
    }
}