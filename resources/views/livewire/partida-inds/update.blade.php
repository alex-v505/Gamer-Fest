<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Partida Ind</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="id_jug1"></label>
                <input wire:model="id_jug1" type="text" class="form-control" id="id_jug1" placeholder="Id Jug1">@error('id_jug1') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="id_jug2"></label>
                <input wire:model="id_jug2" type="text" class="form-control" id="id_jug2" placeholder="Id Jug2">@error('id_jug2') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="ganador_par_ind"></label>
                <input wire:model="ganador_par_ind" type="text" class="form-control" id="ganador_par_ind" placeholder="Ganador Par Ind">@error('ganador_par_ind') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="fecha_par_ind"></label>
                <input wire:model="fecha_par_ind" type="text" class="form-control" id="fecha_par_ind" placeholder="Fecha Par Ind">@error('fecha_par_ind') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="observacion_par_ind"></label>
                <input wire:model="observacion_par_ind" type="text" class="form-control" id="observacion_par_ind" placeholder="Observacion Par Ind">@error('observacion_par_ind') <span class="error text-danger">{{ $message }}</span> @enderror
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
