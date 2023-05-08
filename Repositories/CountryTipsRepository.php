<?php
require_once('Repository.php');
class CountryTipsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('CountryTips');
    }

    public function findSpeciale($specialParams)
    {

    }
    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName ( $keyString) VALUES ( $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }
}
