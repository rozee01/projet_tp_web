<?php
require_once('Repository.php');
class CountryTipsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('pays_facts_tips');
    }

    public function findSpeciale($specialParams)
    {

    }
}
