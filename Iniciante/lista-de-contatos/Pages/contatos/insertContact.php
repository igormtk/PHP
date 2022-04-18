<header>
    <h3>
        Inserir Contato
    </h3>
</header>

<?php
    
    $nameContact = mysqli_real_escape_string($connection, $_POST["nameContact"]);

    $emailContact = mysqli_real_escape_string($connection, $_POST["emailContact"]);

    $addressContact = mysqli_real_escape_string($connection, $_POST["addressContact"]);

    $sql = "INSERT INTO contatos (
        nameContact, 
        emailContact, 
        addressContact
    )
    VALUES(
        '{$nameContact}',
        '{$emailContact}',
        '{$addressContact}'
    )";

    $result = mysqli_query($connection, $sql) or die("Insert Error" . mysqli_error($connection));

    echo "O registro foi concluído com sucesso!";

?>