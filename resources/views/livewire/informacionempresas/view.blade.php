@section('title', __('Informacionempresas'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Informacionempresa Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Informacionempresas">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Informacionempresas
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.informacionempresas.create')
						@include('livewire.informacionempresas.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id Infempresa</th>
								<th>Descripcion</th>
								<th>Mision</th>
								<th>Vision</th>
								<th>Culturaorganizacional</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($informacionempresas as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->id_InfEmpresa }}</td>
								<td>{{ $row->Descripcion }}</td>
								<td>{{ $row->Mision }}</td>
								<td>{{ $row->Vision }}</td>
								<td>{{ $row->CulturaOrganizacional }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Informacionempresa id {{$row->id}}? \nDeleted Informacionempresas cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $informacionempresas->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
