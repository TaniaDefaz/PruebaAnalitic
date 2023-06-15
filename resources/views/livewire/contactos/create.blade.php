<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Contacto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="id_Contactos"></label>
                <input wire:model="id_Contactos" type="text" class="form-control" id="id_Contactos" placeholder="Id Contactos">@error('id_Contactos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Telefono"></label>
                <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Redes_Sociales"></label>
                <input wire:model="Redes_Sociales" type="text" class="form-control" id="Redes_Sociales" placeholder="Redes Sociales">@error('Redes_Sociales') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Email"></label>
                <input wire:model="Email" type="text" class="form-control" id="Email" placeholder="Email">@error('Email') <span class="error text-danger">{{ $message }}</span> @enderror
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
