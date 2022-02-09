<h2>Listado de Posts</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td>
                <button class="btn btn-warning">
                    Editar
                </button>
            </td>
            <td>
                <button wire:click="destroy({{ $post->id }})" class="btn btn-danger">
                    Eliminar
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex">
    {!! $posts->links() !!}
</div>
