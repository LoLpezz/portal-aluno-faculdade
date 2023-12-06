<h1 class="bg-primary-subtle py-3">
    <a href="index.php" class="text-decoration-none">Novo Usuário</a>
</h1>
<div class="container">
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Curso</label>
        <input type="text" name="curso" class="form-control">
    </div>
    <div class="mb-3">
        <label>Modalidade</label>
        <input type="text" name="modalidade" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
</div>