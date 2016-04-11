<?php
    
    $less = new lessc();
    if ( isset($_POST["submit"]))
    {
        echo "Er is op de knop gedrukt!";
        
        $less->setVariables(array(
            "boolRra" => "true",
            "test" => "4em",
            "kleur" => "#00F"       
        ));
        
        echo "derde|".$less->compileFile("./css/changeVariablesTest.less", "./css/changeVariablesTest.css" );
    }
   else
   {
       $less->setVariables(array(
            "test" => "1em",
            "boolRra" => "false",
            "kleur" => "#00F"          
        ));
        
        echo "tweede".$less->compileFile("./css/changeVariablesTest.less", "./css/changeVariablesTest.css" );
        
   }
    
?>

<link rel="stylesheet" type="text/css" href="./css/changeVariablesTest.css" >

<h3>We gaan een less variabele veranderen met behulp van php</h3>

<p id="changeStyleP">We gaan deze paragraaf een andere opmaak geven door op de onderstaande knop te drukken</p>

<form action="./index.php?content=developer_homepage&topic=less&page=tutorials/less/less_php_setVariables" method="post">
    <input type="submit" name="submit" value="verander opmaak!">
</form>