@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar proveedor:{{$persona->nombre}}</h3>
			@if(count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::model($persona,['method'=>'PATCH','route'=>['compras.proveedor.update',$persona->idpersona]])!!}
			{{Form::token()}}
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" required value="{{$persona->nombre}}" name="nombre" class="form-control" placeholder="Nombre">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="direccion">Dirección</label>
						<input type="text" value="{{$persona->direccion}}" name="direccion" class="form-control" placeholder="Dirección">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label>Documento</label>
						<select name="tipo_documento" class="form-control">
							@if($persona->tipo_documento=='DNI')
								<option value="DNI" selected>DNI</option>
								<option value="CURP">CURP</option>
								<option value="PAS">Passaporte</option>
							@elseif($persona->tipo_documento=='CURP')
								<option value="DNI">DNI</option>
								<option value="CURP" selected>CURP</option>
								<option value="PAS">Passaporte</option>
							@else($persona->tipo_documento=='PAS')
								<option value="DNI">DNI</option>
								<option value="CURP">CURP</option>	
								<option value="PAS" selected>Passaporte</option>
							@endif
						</select>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="num_documento">Número de documento</label>
						<input type="text" value="{{$persona->num_documento}}" name="num_documento" class="form-control" placeholder="Número de documento">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="telefono">Teléfono</label>
						<input type="text" value="{{$persona->telefono}}" name="telefono" class="form-control" placeholder="Teléfono">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" value="{{$persona->email}}" name="email" class="form-control" placeholder="Email">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Guardar</button>
						<button class="btn btn-danger" type="reset">Cancelar</button>
					</div>
				</div>
			</div>

			{!!Form::close()!!}
			
@endsection