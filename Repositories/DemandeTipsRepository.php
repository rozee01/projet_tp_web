<?php
require_once('Repository.php');
class DemandeTipsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('demande_tips');
    }

    public function findSpeciale($specialParams)
    {
        
    }
}
