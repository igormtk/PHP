<header>
    <h3>
        Atualizar Contato
    </h3>
</header>

<?php

    $idContact = mysqli_real_escape_string($connection, $_POST["idContact"]);    

    $nameContact = mysqli_real_escape_string($connection, $_POST["nameContact"]);

    $emailContact = mysqli_real_escape_string($connection, $_POST["emailContact"]);

    $addressContact = mysqli_real_escape_string($connection, $_POST["addressContact"]);

    $sql = "UPDATE contatos SET
        nameContact = '{$nameContact}',
        emailContact = '{$emailContact}',
        addressContact = '{$addressContact}'
        WHERE idContact = '{$idContact}'
    ";

    $result = mysqli_query($connection, $sql) or die("Insert Error" . mysqli_error($connection));

    echo "O registro foi atualizado com sucesso!";

?>