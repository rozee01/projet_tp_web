<?php 
require_once ('../CnxDB.php');
abstract class Repository
{
    protected PDO $db;

    public function __construct(protected $tableName) {
        $this->db = CnxDB::getInstance();
    }

  
    public function findAll($where) {
        $conditions = '';
        $values = [];
    
        foreach ($where as $column => $value) {
            $conditions .= "$column = ? AND ";
            $values[] = $value;
        }
    
        $conditions = rtrim($conditions, ' AND ');
    
        $request = "SELECT * FROM $this->tableName WHERE $conditions";
        $response = $this->db->prepare($request);
        $response->execute($values);
    
        return $response->fetchAll(PDO::FETCH_OBJ);
    }
    


  
    public function findByName($name){
        $request = "select * from $this->tableName where name= ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$name]);
        return $reponse->fetch(PDO::FETCH_ASSOC);
    }
    
    public function create($params) {
        $keys = array_keys($params);

        $keyString = implode(",", $keys);

        $paramselements = array_fill(0, count($keys), '?');
        $paramString = implode(",", $paramselements);
        $request = "INSERT INTO $this->tableName (`id`, $keyString) VALUES (NULL, $paramString);";
        $reponse = $this->db->prepare($request);
        $reponse->execute(array_values($params));
        return $reponse->fetch(PDO::FETCH_OBJ);
    }

    
    public function delete($name) {
        $request = "delete from $this->tableName where name = ?";
        $reponse = $this->db->prepare($request);
        $reponse->execute([$name]);
    }

  
    public function update($id, $params) {}

} 
?> 