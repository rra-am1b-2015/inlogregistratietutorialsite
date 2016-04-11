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
        echo "Vebinding met de server is gelukt en database is geselecteerd";
        $id = 1;
        
        $stmt = $conn->prepare("SELECT * FROM `users` WHERE id = :id");
        
        $stmt->bindParam(':id', $id );
        
        $stmt->execute();
        
        $bool = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        //var_dump($bool);
        //var_dump($result);
        
        foreach ($result as $record) {
            # code...
            foreach($record as $key => $value)
            {
                echo $value." | ";
            }
            echo "<br>";
        }
        echo "<hr>";
        
        for ($i = 0; $i < sizeof($result); $i++)
        {
            foreach( $result[$i] as $key => $value)
            {
                echo $value." | ";
            }  
            echo "<br>";          
        }
        
        
    }
    catch(PDOException $e)
    {
        echo "Het is niet gelukt: ".$e->getMessage();
    }
    
?>

<h3>PDO Getting Started</h3>