<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Responsabilidadsociale</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_responsabilidad_social"></label>
                <input wire:model="id_responsabilidad_social" type="text" class="form-control" id="id_responsabilidad_social" placeholder="Id Responsabilidad Social">@error('id_responsabilidad_social') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Servicio"></label>
                <input wire:model="Servicio" type="text" class="form-control" id="Servicio" placeholder="Servicio">@error('Servicio') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="CursoCapacitacion"></label>
                <input wire:model="CursoCapacitacion" type="text" class="form-control" id="CursoCapacitacion" placeholder="Cursocapacitacion">@error('CursoCapacitacion') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FechaInicio_curso"></label>
                <input wire:model="FechaInicio_curso" type="text" class="form-control" id="FechaInicio_curso" placeholder="Fechainicio Curso">@error('FechaInicio_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="FechaFin_curso"></label>
                <input wire:model="FechaFin_curso" type="text" class="form-control" id="FechaFin_curso" placeholder="Fechafin Curso">@error('FechaFin_curso') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Fecha_nacimiento"></label>
                <input wire:model="Fecha_nacimiento" type="text" class="form-control" id="Fecha_nacimiento" placeholder="Fecha Nacimiento">@error('Fecha_nacimiento') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Costo"></label>
                <input wire:model="Costo" type="text" class="form-control" id="Costo" placeholder="Costo">@error('Costo') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="Campo"></label>
                <input wire:model="Campo" type="text" class="form-control" id="Campo" placeholder="Campo">@error('Campo') <span class="error text-danger">{{ $message }}</span> @enderror
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
