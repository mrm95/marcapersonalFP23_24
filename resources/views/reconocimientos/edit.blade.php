@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar Reconocimiento
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{action([App\Http\Controllers\ReconocimientoController::class, 'putEdit'], ['id' => $reconocimiento->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
	            @csrf

	            <div class="form-group">
					<label for="estudiante_id">Estudiante</label>
					<select id="estudiante_id" name="estudiante_id">
					 @foreach($estudiantes as $estudiante)
						 <option {{$reconocimiento->estudiante_id == $estudiante->id?"selected":"";}} value="{{$estudiante->id}}">{{$estudiante->nombre}} {{$estudiante->apellidos}}</option>
					 @endforeach
					 </select>
	            </div>

	            <div class="form-group">
	            	<label for="actividad_id">Actividad</label>
	                <select id="actividad_id" name="actividad_id">
						@foreach($actividades as $actividad)
            				<option {{$reconocimiento->actividad_id == $actividad->id?"selected":"";}} value="{{$actividad->id}}">{{$actividad->insignia}}</option>
						@endforeach
       	 			</select>
	            </div>

	            <div class="form-group">
	            	<label for="documento">URL del documento</label>
	               <input type="url" name="documento" id="documento" class="form-control" value="{{ $reconocimiento->documento }}">
	            </div>

	            <div class="form-group">
	               <label for="fecha">Fecha</label>
	               <input type ="date" name="fecha" id="fecha" class="form-control">
	            </div>

                <div class="form-group">
	            	<label for="docente_validador">Docente Validador</label>
					<select id="docente_validador" name="docente_validador">
						@foreach($docentes as $docente)
            				<option {{$reconocimiento->docente_validador == $docente->id?"selected":"";}} value="{{$docente->id}}">{{$docente->nombre}} {{$docente->apellidos}}</option>
						@endforeach
       	 			</select>
	            </div>


                <div class="form-group">
                    <label for="reconocimientoIMG">Documento de reconocimiento</label>
                    <input type="file" class="form-control" id="reconocimientoIMG" name="reconocimientoIMG" placeholder="documento de reconocimiento">
                </div>

	            <div class="form-group text-center">
	               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
	                   Modificar Reconocimiento
	               </button>
	            </div>

            </form>

         </div>
      </div>
   </div>
</div>

@endsection
