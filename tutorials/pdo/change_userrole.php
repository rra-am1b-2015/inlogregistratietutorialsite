<?php
    //Maak een pdo database connectie
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "am1b_2015_loginregistration";
    
    try
    {
        $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Verbinding met de server is gelukt en database is geselecteerd";
        //$id = '*';
        
        $stmt = $conn->prepare("SELECT `id`, `firstname`, `infix`, `lastname`, `userrole` FROM `users`");
        
        //$stmt->bindParam(':id', $id );
        
        $stmt->execute();
        
        $bool = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($bool);
        //var_dump($result);
        
        
       
        
    }
    catch(PDOException $e)
    {
        echo "Het is niet gelukt: ".$e->getMessage();
    }
    
?>

<h3>PDO Changing Userrole</h3>

<table>
<?php
    foreach ($result as $record) 
    {
        echo "<tr>";
                    foreach($record as $key => $value)
                    {
                        echo "<td>".$value."</td>";
                    }
            echo "<td>
                    <a href='index.php?content=developer_homepage&topic=pdo&page=tutorials/pdo/change_userrole_edit&id=".$record['id']."'>
                        <img src='./images/b_edit.png'/>
                    </a>
                  </td>
             </tr>";
    }

?>
</table>