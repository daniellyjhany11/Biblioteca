<x-app-layout>
    
    <link href="../../public/css/campo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sua biblioteca pessoal.') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seus livros:') }}
        </h2>
        <title>Biblioteca</title>
        <style type="text/css">
            .py-12 {
                background-image: linear-gradient(#20434b, #d9bf);
                height: 100vh;
            }
        </style>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <a href="{{ route('livros.create') }}" class="btn btn-primary mb-3">Adicionar Livro</a>

            <div class="bg-black overflow-hidden shadow-sm sm:rounded-lg">
               <!-- <div class="p-6 text-gray-900">
                    {{ __("Bem-vindo!") }}
                </div> -->

                <table class="table table-bordered">
                        <thead>
                            <img src="" alt="">
                            <tr>
                                <th>Id</th>
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Edição</th>
                                <th>Editora</th>
                                <th>Ano da Publicação</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros as $livro)
                                <tr>
                                    <td>{{ $livro->id }}</td>
                                    <td>{{ $livro->autor }}</td>
                                    <td>{{ $livro->titulo }}</td>
                                    <td>{{ $livro->subtitulo }}</td>
                                    <td>{{ $livro->edicao }}</td>
                                    <td>{{ $livro->editora }}</td>
                                    <td>{{ $livro->ano_publicado }}</td>
                                    <td>
                                        <a href="{{ route('livros.edit', $livro->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este livro?')">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $livros->links('pagination::bootstrap-5') }}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

