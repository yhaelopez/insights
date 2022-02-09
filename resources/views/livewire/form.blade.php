<div>
    <label for="titulo">Titulo</label>
    <input wire:model="title" type="text" class="form-control" id="title">
    @error('title') <span>{{ $message }}</span> @enderror
</div>

<div>
    <label for="body">Contenido</label>
    <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
    @error('body') <span>{{ $message }}</span> @enderror
</div>
