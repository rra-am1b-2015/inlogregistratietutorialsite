<?php
    if (isset($_POST["submit"]))
    {
        include_once("./tutorials/pdo/pdo_connect.php");
        
        var_dump($_POST);
        
        $stmt = $conn->prepare("INSERT INTO `users` (`id`,
                                                     `firstname`,
                                                     `infix`, 
                                                     `lastname`,
                                                     `email`,
                                                     `activation`,
                                                     `password`,
                                                     `userrole`)
                                        VALUES     (NULL,
                                                    :firstname,
                                                    :infix,
                                                    :lastname,
                                                    :email,
                                                    :activation,
                                                    :password,
                                                    :userrole)");
        $password = MD5($_POST["password"]);
                                                    
        $stmt->bindParam(":firstname", $_POST["firstname"]);
        $stmt->bindParam(":infix", $_POST["infix"]);
        $stmt->bindParam(":lastname", $_POST["lastname"]);
        $stmt->bindParam(":email", $_POST["email"] );
        $stmt->bindParam(":activation", $_POST["activation"]);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":userrole", $_POST["userrole"]);
        
        $stmt->execute();
    }
    else 
    {       
?>

<h3>Maak een nieuwe gebruiker aan</h3>
<form method="post" action="./index.php?content=developer_homepage&topic=pdo&page=tutorials/pdo/insert_user">
    <table>
        <tr>
            <td>Voornaam: </td><td><input type="text" name="firstname"></td>
        </tr>
         <tr>
            <td>Tussenvoegsel: </td><td><input type="text" name="infix"></td>
        </tr>
         <tr>
            <td>Achternaam: </td><td><input type="text" name="lastname"></td>
        </tr>
         <tr>
            <td>E-mailadres: </td><td><input type="email" name="email"></td>
        </tr>
         <tr>
            <td>Activatie: </td><td>
                                    <select name="activation">
                                        <option value="true">gedaan</option>
                                        <option value="false">niet gedaan</option>
                                    </select>
                                </td>
        </tr>
         <tr>
            <td>Wachtwoord: </td><td><input type="password" name="password"></td>
        </tr>
         <tr>
            <td>Gebruikersrol: </td><td>
                                        <select name="userrole">
                                            <option value="administrator">administrator</option>
                                            <option value="root">root</option>
                                            <option value="customer">customer</option>
                                            <option value="developer">developer</option>
                                        </select>
                                    </td>
        </tr>
        <tr>
            <td>&nbsp;</td><td><input type="submit" name="submit"></td>
        </tr>        
    </table>
</form>

<?php
    }
?>