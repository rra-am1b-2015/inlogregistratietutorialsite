<?php
    //Maak een pdo database connectie
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "am1b_2015_loginregistration";
    
    if (isset($_GET["id"]))
    {
        
    
    try
    {
        $conn = new PDO("mysql:host=".$servername.";dbname=".$databasename, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if ($_GET["action"] == "delete")
        {
            echo "delete"; 
            exit();
            
        }
        else if ( $_GET["action"] == "update")
        {
            if ( isset($_POST["submit"]))
            {
                //echo "Hallo";
                //var_dump($_POST);
                //echo $_GET["id"];
                
                $stmt = $conn->prepare("UPDATE `users` SET `userrole` = :userrole WHERE id = :id");
                //echo "stmt1 = ".$stmt." | ";
                $stmt->bindParam(':userrole', $_POST["userrole"] );
                $stmt->bindParam(':id', $_GET["id"] );
                //echo "stmt2 = ".$stmt." | ";
                $stmt->execute();
                //echo "stmt3 = ".$stmt." | ";
                
                header("location: index.php?content=developer_homepage&topic=pdo&page=tutorials/pdo/change_userrole"); 
            }   
            else 
            {
                $stmt = $conn->prepare("SELECT `id`, `firstname`, `infix`, `lastname`, `userrole` FROM `users` WHERE id=:id");
                $stmt1 = $conn->prepare("SELECT DISTINCT `userrole` FROM `users`");
                
                $stmt->bindParam(':id', $_GET["id"] );
                
                $stmt->execute();
                $stmt1->execute();
                
                $bool = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $result = $stmt->fetchAll();
                $stmt1->setFetchMode(PDO::FETCH_ASSOC);
                $result1 = $stmt1->fetchAll();
                //var_dump($result1);
                //var_dump($bool);
                //var_dump($result);
                
                $userroleString = "";
                for ( $i = 0; $i < sizeof($result1); $i++)
                {
                    if ($result1[$i]["userrole"] == $result[0]["userrole"])
                    {
                        $userroleString .= "<option selected>".$result1[$i]["userrole"]."</option>";
                    }
                    else 
                    {
                        $userroleString .= "<option>".$result1[$i]["userrole"]."</option>";
                    }
                }        
            }
        }         
     }
    catch(PDOException $e)
    {
        echo "Het is niet gelukt: ".$e->getMessage();
    }
?>
<h3>PDO Changing Userrole</h3>
<form action="index.php?content=developer_homepage&topic=pdo&page=tutorials/pdo/change_userrole_edit&action=update&id=<?php echo $_GET["id"]; ?>" method="post">
<table id="table">
<?php
    foreach ($result as $record) 
    {
        echo "<tr>";
                    foreach($record as $key => $value)
                    {
                        if ($key != "userrole")
                        echo "<td>".$value."</td>";
                    }
            echo "<td>
                    <select name='userrole'>
                        ".$userroleString."
                    </select>
                  </td>
                  <td>
                    <input type='submit' name='submit' value='sla op'>
                  </td>
             </tr>";
    }

?>
</table>
</form
<?php
    }
?>