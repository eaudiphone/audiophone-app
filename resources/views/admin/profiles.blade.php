@extends('layouts.dashboardAdmin')

@section('title', 'profiles')
@section('content')
	
	<link rel="stylesheet" href="{{asset('css/table.css')}}">
	
	<!--Contenido-->
	<div class="col-md-9 ml-sm-auto col-lg-9 pt-3 px-4">

		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">

			<h1>Perfiles de Usuario</h1>

			<!-- Grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div class="btn-group mr-2">
					<button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
					data-target="#modalPAdministrador"> 
						<i class="fas fa-w fa-user"></i>
						Nuevo Administrador
					</button>
					<button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" 
					data-target="#modalPerfil">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div> 

		<!-- buscador de usuarios: -->
		@include('admin.search')
		@include( 'admin/profiles/tableUsers' )
		
	</div>
		

		<!-- incluir la paginación -->

@endsection