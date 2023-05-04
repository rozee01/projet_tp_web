<?php
require_once('../Repository.php');
class PaysRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('pays');
    }

    public function findSpeciale($specialParams)
    {

    }
}
$paysRepository = new PaysRepository();
$pays = $paysRepository->findByName($country);
$paysProperties = [
    'name', 'paragraph', 'place1', 'titlePlace1', 'place2', 'titlePlace2', 'place3', 'titlePlace3', 'place4', 'titlePlace4', 'place5', 'titlePlace5', 'place6', 'titlePlace6', 'food1', 'titleFood1', 'food2', 'titleFood2', 'food3', 'titleFood3', 'food4', 'titleFood4', 'food5', 'titleFood5', 'video', 'image'
];
foreach ($paysProperties as $property) {
    ${$property} = $pays->{$property};
}