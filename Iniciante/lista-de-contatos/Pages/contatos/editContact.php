<?php
    $idContact = $_GET["idContact"];
    $sql = "SELECT * FROM contatos WHERE idContact = {$idContact}";
    $result = mysqli_query($connection, $sql) or die("GET ERROR" . mysqli_error($connection));
    $data = mysqli_fetch_assoc($result);
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=updateContact" method="post">
    <div>
        <label for="idContact">ID</label>
        <input type="text" name="idContact" value="<?=$data["idContact"]?>">
    </div>

    <div>
        <label for="nameContact">Nome</label>
        <input type="text" name="nameContact" value="<?=$data["nameContact"]?>">
    </div>

    <div>
        <label for="emailContact">E-mail</label>
        <input type="email" name="emailContact" value="<?=$data["emailContact"]?>">
    </div>


    <div>
        <label for="addressContact">Endereço</label>
        <input type="text" name="addressContact" value="<?=$data["addressContact"]?>">
    </div>

    <div>
        <input type="submit" value="Update" name="btnUpdate">
    </div>

</form>
</div>