<header>
    <h3>Excluir contato</h3>
</header>

<?php
    $idContact = mysqli_real_escape_string($connection, $_GET["idContact"]);
    $sql = "DELETE FROM contatos WHERE idContact = '{$idContact}'";
    mysqli_query($connection, $sql) or die("DELETE CONTACT ERROR!" . mysqli_error($conecction));
    echo "Contato excluído com sucesso!";
?>