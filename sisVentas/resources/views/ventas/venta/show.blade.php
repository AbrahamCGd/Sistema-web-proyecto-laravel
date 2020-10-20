@extends('layouts.admin')
@section('contenido')

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="form-group">
			<label for="proveedor">Cliente</label>
			<p>{{$venta->nombre}}</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label>Tipo comprobante</label>
			<p>{{$venta->tipo_comprobante}}</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label for="serie_comprobante">Serie de documento</label>
			<p>{{$venta->serie_comprobante}}</p>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<div class="form-group">
			<label for="num_comprobante">Número de comprobante</label>
			<p>{{$venta->num_comprobante}}</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="panel panel-primary" style="border-color: #A9D0F5">
		<div class="panel-body" >
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
					<thead style="background-color: #A9D0F5">
						<th>Artículo</th>
						<th>Cantidad</th>
						<th>Precio venta</th>
						<th>Descuento %</th>
						<th>Subtotal</th>
					</thead>
					<tfoot>
						<th>Total</th>
						<th></th>
						<th></th>
						<th></th>
						<th><h4 id="total">$ {{$venta->total_venta}}</h4></th>
					</tfoot>
					<tbody>
						@foreach($detalles as $det)
						<tr>
							<td>{{$det->articulo}}</td>
							<td>{{$det->cantidad}}</td>
							<td>{{$det->precio_venta}}</td>
							<td>{{$det->descuento}}</td>
							<td>{{ ($det->precio_venta - ($det->descuento / 100 * $det->precio_venta)) * $det->cantidad }}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection