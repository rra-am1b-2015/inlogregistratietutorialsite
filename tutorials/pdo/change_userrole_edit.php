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
               
        $stmt = $conn->prepare("SELECT `id`, `firstname`, `infix`, `lastname`, `userrole` FROM `users` WHERE id=:id");
        $stmt1 = $conn->prepare("SELECT DISTINCT `userrole` FROM `users`");
        
        $stmt->bindParam(':id', $_GET["id"] );
        
        $stmt->execute();
        $stmt1->execute();
        
        $bool = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $stmt1->setFetchMode(PDO::FETCH_ASSOC);
        $result1 = $stmt1->fetchAll();
        var_dump($result1);
        //var_dump($bool);
        var_dump($result);
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
    catch(PDOException $e)
    {
        echo "Het is niet gelukt: ".$e->getMessage();
    }
    
?>
<h3>PDO Changing Userrole</h3>



<table id="table">
<?php
    foreach ($result as $record) 
    {
        echo "<tr>";
                    foreach($record as $key => $value)
                    {
                        echo "<td>".$value."</td>";
                    }
            echo "<td>
                    <select>
                        ".$userroleString."
                    </select>
                  </td>
             </tr>";
    }

?>
</table>
<?php
    }
?>