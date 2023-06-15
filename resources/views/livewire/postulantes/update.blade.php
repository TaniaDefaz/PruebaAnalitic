<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Postulante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_Postulante"></label>
                <input wire:model="id_Postulante" type="text" class="form-control" id="id_Postulante" placeholder="Id Postulante">@error('id_Postulante') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Nombre"></label>
                <input wire:model="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre">@error('Nombre') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Telefono"></label>
                <input wire:model="Telefono" type="text" class="form-control" id="Telefono" placeholder="Telefono">@error('Telefono') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Direccion"></label>
                <input wire:model="Direccion" type="text" class="form-control" id="Direccion" placeholder="Direccion">@error('Direccion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Email"></label>
                <input wire:model="Email" type="text" class="form-control" id="Email" placeholder="Email">@error('Email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_nacimiento"></label>
                <input wire:model="Fecha_nacimiento" type="text" class="form-control" id="Fecha_nacimiento" placeholder="Fecha Nacimiento">@error('Fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Solicitud"></label>
                <input wire:model="Solicitud" type="text" class="form-control" id="Solicitud" placeholder="Solicitud">@error('Solicitud') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>
