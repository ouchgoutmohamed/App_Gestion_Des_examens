<?php

namespace App\Models;

class StudentModel extends UserModel
{
    public function getStudentId($cne, $first_name, $last_name)
    {
        return $this->where("cne", $cne)->where("first_name", $first_name)->where("last_name", $last_name)->first()["id"];
    }
}