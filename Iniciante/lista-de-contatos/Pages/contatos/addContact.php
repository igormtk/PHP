<header>
    <h3>Adicionar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=insertContact" method="post">

    <div>
        <label for="nameContact">Nome</label>
        <input type="text" name="nameContact">
    </div>

    <div>
        <label for="emailContact">E-mail</label>
        <input type="email" name="emailContact">
    </div>

    <div>
        <label for="addressContact">Endereço</label>
        <input type="text" name="addressContact">
    </div>

    <div>
        <input type="submit" value="Salvar contato" name="btnAdd">
    </div>

</form>
</div>