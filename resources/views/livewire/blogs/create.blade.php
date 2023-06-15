<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="id_Blog"></label>
                <input wire:model="id_Blog" type="text" class="form-control" id="id_Blog" placeholder="Id Blog">@error('id_Blog') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Titulo"></label>
                <input wire:model="Titulo" type="text" class="form-control" id="Titulo" placeholder="Titulo">@error('Titulo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Contenido"></label>
                <input wire:model="Contenido" type="text" class="form-control" id="Contenido" placeholder="Contenido">@error('Contenido') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_publicacion"></label>
                <input wire:model="Fecha_publicacion" type="text" class="form-control" id="Fecha_publicacion" placeholder="Fecha Publicacion">@error('Fecha_publicacion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Autor"></label>
                <input wire:model="Autor" type="text" class="form-control" id="Autor" placeholder="Autor">@error('Autor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
