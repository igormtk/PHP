<?php
    include("./Db/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Contatos</title>
</head>
<body>

    <header>
        <h1>Lista de contatos</h1>
    <nav>
        <a href="index.php?menuop=home">Home</a>
        <a href="index.php?menuop=addContact">Adicionar Contato</a>
    </nav>
    </header>

    <main>
        <?php

            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

            switch($menuop){
                case "home":
                include("./Pages/home/home.php");
                break;

                case "addContact":
                include("./Pages/contatos/addContact.php");
                break;

                case "insertContact":
                include("./Pages/contatos/insertContact.php");
                break;

                case "editContact":
                include("./Pages/contatos/editContact.php");
                break;

                case "updateContact":
                include("./Pages/contatos/updateContact.php");
                break;

                case "deleteContact":
                include("./Pages/contatos/deleteContact.php");
                break;

                default:
                include("./Pages/home/home.php");
                break;
            };

        ?>
    </main>

</body>
</html>