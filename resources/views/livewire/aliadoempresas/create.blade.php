<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Aliadoempresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="id_aliadoEmpresa"></label>
                <input wire:model="id_aliadoEmpresa" type="text" class="form-control" id="id_aliadoEmpresa" placeholder="Id Aliadoempresa">@error('id_aliadoEmpresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Titulo"></label>
                <input wire:model="Titulo" type="text" class="form-control" id="Titulo" placeholder="Titulo">@error('Titulo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Rol"></label>
                <input wire:model="Rol" type="text" class="form-control" id="Rol" placeholder="Rol">@error('Rol') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Experiencia"></label>
                <input wire:model="Experiencia" type="text" class="form-control" id="Experiencia" placeholder="Experiencia">@error('Experiencia') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Funciones"></label>
                <input wire:model="Funciones" type="text" class="form-control" id="Funciones" placeholder="Funciones">@error('Funciones') <span class="error text-danger">{{ $message }}</span> @enderror
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
