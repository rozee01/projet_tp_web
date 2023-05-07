<?php
require_once('Repository.php');
class CountryDetailsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('pays');
    }

    public function findSpeciale($specialParams)
    {

    }
}
