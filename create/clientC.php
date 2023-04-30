<?php
include_once 'autoload.php';

class ClientC
{

function afficherclient() {
  $sql = "SELECT * FROM user";
  $pdo = ConnexionBD::getInstance();
  $stmt = $pdo->query($sql);
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <th><?php echo $row['ID'] ?></th>
      <th><?php echo $row['username'] ?></th>
      <th><?php echo $row['email'] ?></th>
      <th><?php echo $row['password'] ?></th>
    </tr>
  <?php
  }
}


function addclient($client)
{
    $sql = "INSERT INTO users  
    VALUES (NULL, :un, :em,:ps)";
    $db = ConnexionBD::getInstance();
    try {
        $query = $db->prepare($sql);
        $query->execute([
            'un' => $client->getusername(),
            'em' => $client->getemail(),
            'ps' => MD5($client->getPassword()),
            
        ]);
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
    function deleteClient($id)
    {
        $sql = "DELETE FROM users WHERE ID = :id";
        $db = ConnexionBD::getInstance();
        $req = $db->prepare($sql);
        $req->bindParam(':id', $id, PDO::PARAM_INT);
    
        try {
            $req->execute();
        } catch (PDOException $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function updateClient($client, $id)
    {
        try {
            $db = ConnexionBD::getInstance();
            $query = $db->prepare(
                'UPDATE users SET 
                    username = :username, 
                    email = :email, 
                    password = :password,
                WHERE ID = :id'
            );
            $query->execute([              
                'id' => $id,
                'username' => $client->getusername(),
                'email' => $client->getemail(),
                'password' => $client->getpassword(),
            ]);
            echo $query->rowCount() . " DATA UPDATED successfully ";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function listclient($data)
    {
        $sql = "SELECT * from users where ID like '%$data%' or  user_name like '%$data%'  or last_name like '%$data%'  or email like '%$data%'   ";
        $db = ConnexionBD::getInstance();
            $liste = $db->query($sql);
           
            while($row = $liste->fetch(PDO::FETCH_ASSOC)) {
                ?>
                  <tr>
                    <th><?php echo $row['ID'] ?></th>
                    <th><?php echo $row['username'] ?></th>
                    <th><?php echo $row['email'] ?></th>
                    <th><?php echo $row['password'] ?></th>
                  </tr>
                <?php
                }
      
    }
    
    }
    

