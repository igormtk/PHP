<table border="1">
    <thead> 
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Endereço</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>

    <?php
        $sql = "SELECT idContact, upper(nameContact) as nameContact, lower(emailContact) as emailContact, upper(addressContact) as addressContact FROM contatos ORDER BY nameContact ASC";
        $result = mysqli_query($connection, $sql) or die("Query Error!" . mysqli_error($connection));
        while($dados = mysqli_fetch_assoc($result)){

        ?>
        <tbody> 
            <tr>
                <td><?=$dados["idContact"]?></td>
                <td><?=$dados["nameContact"]?></td>
                <td><?=$dados["emailContact"]?></td>
                <td><?=$dados["addressContact"]?></td>
                <td> <a href="index.php?menuop=editContact&idContact=<?=$dados["idContact"] ?>" >Editar</a> </td>
                <td> <a href="index.php?menuop=deleteContact&idContact=<?=$dados["idContact"] ?>" >Excluir</a> </td>
            </tr>

        <?php
    };
    ?>

    </tbody>

</table>