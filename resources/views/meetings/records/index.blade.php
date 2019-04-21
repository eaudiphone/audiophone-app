@extends('layouts.dashboard')
@section('title', 'Meeting Records')
@section('content')
		<div class="d-flex justify-content-between flex-wrap flex-md-nowrap 
		align-items-center pb-2 mb-3 border-bottom">
				
			<h1>Agendar Grabación</h1>
			<!-- grupo de botones -->
			<div class="btn-toolbar mb-2 mb-md-0">
				<div>
					<button type="button" class="btn btn-sm btn-info" data-toggle="modal" 
					data-target="#modalRecordsInfo">
						<i class="fas fa-w fa-info-circle"></i>
						Información
					</button>
				</div>
			</div>
		</div>
		<!-- Importamos el calendario -->
		@include('layouts.calendar')	
@endsection