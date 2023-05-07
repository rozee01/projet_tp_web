<?php
require_once('Repository.php');
class demandeDetailsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('demande_details');
    }

    public function findSpeciale($specialParams)
    {

    }
}
