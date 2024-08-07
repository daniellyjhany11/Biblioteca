<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/livro.css">
</head>
<body>
<div class="container mt-5">
    <h2>Adicionar Livro</h2>
    <form method="POST" action="{{ route('livros.store') }}">
        @csrf
        <div class="form-group">
            <label >Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor">
        </div>
        <div class="form-group">
            <label>Título:</label>
            <input type="text" class="form-control" id="titulo" name="titulo">
        </div>
        <div class="form-group">
            <label>Subtítulo:</label>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo">
        </div>
        <div class="form-group">
            <label>Edição:</label>
            <input type="text" class="form-control" id="edicao" name="edicao">
        </div>
        <div class="form-group">
            <label>Editora:</label>
            <input type="text" class="form-control" id="editora" name="editora">
        </div>
        <div class="form-group">
            <label>Ano da Publicação:</label>
            <input type="number" class="form-control" id="ano_publicado" name="ano_publicado">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Voltar</a>
    </form>
</div>
</body>
</html>