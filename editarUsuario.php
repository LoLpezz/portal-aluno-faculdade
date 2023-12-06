<h1 class="bg-primary-subtle py-3">
    <a href="index.php" class="text-decoration-none">Editar Usuário</a>
</h1>

<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<div class="container">
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Curso</label>
        <input type="text" name="curso" value="<?php print $row->curso;?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Modalidade</label>
        <input type="text" name="modalidade" value="<?php print $row->modalidade;?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>