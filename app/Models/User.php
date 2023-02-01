<?php
namespace App\Models;
class User
{


    public array $users;

    public function __construct()
    {

        $this->users = [
            "H001" => ["id" => 'P001', "name" => "name1", "length" => 12],
            "H002" => ["id" => 'P002', "name" => "name2", "length" => 6],
            "H003" => ["id" => 'P003', "name" => "name3", "length" => 18],
            "H004" => ["id" => 'P004', "name" => "name4", "length" => 36],

        ];
    }

    public function getUsers(): array
    {

        return $this->users;
    }
}