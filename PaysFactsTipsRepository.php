<?php
require_once('../Repository.php');
class PaysFactsTipsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('pays_facts_tips');
    }

    public function findSpeciale($specialParams)
    {

    }
}
$PaysFactsTipsRepository= new PaysFactsTipsRepository();
$paysFactsTips = $PaysFactsTipsRepository->findByName($country);
$pays_Facts_Tips = [
    'name', 'language', 'religion', 'visa', 'climate', 'currency', 'power_plugs', 'capital', 'apps', 'flights', 'safety', 'budget'
];
foreach ($pays_Facts_Tips as $element) {
    ${$element} = $paysFactsTips->{$element};
}