<?php
include_once '../Repository.php';
include_once '../CnxDB.php';
class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('user');
    }

    public function findSpeciale($specialParams)
    {

    }
}