@section('title', __('Cursos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Curso Listing </h4>
						</div>
						<div wire:poll.60s>
							<code><h5>{{ now()->format('H:i:s') }} UTC</h5></code>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Cursos">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Cursos
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.cursos.create')
						@include('livewire.cursos.update')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Id Cursos</th>
								<th>Nombre Curso</th>
								<th>Descripcion Curso</th>
								<th>Duracion Curso</th>
								<th>Fecha Curso</th>
								<th>Fecha Fin Curso</th>
								<th>Instructor Curso</th>
								<th>Lugar Curso</th>
								<th>Precio Curso</th>
								<th>Cuposmaximos Curso</th>
								<th>Cuposdisponibles Curso</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@foreach($cursos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->id_Cursos }}</td>
								<td>{{ $row->Nombre_curso }}</td>
								<td>{{ $row->Descripcion_curso }}</td>
								<td>{{ $row->Duracion_curso }}</td>
								<td>{{ $row->Fecha_curso }}</td>
								<td>{{ $row->Fecha_Fin_curso }}</td>
								<td>{{ $row->Instructor_curso }}</td>
								<td>{{ $row->Lugar_curso }}</td>
								<td>{{ $row->Precio_curso }}</td>
								<td>{{ $row->CuposMaximos_curso }}</td>
								<td>{{ $row->CuposDisponibles_curso }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a>							 
									<a class="dropdown-item" onclick="confirm('Confirm Delete Curso id {{$row->id}}? \nDeleted Cursos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $cursos->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
