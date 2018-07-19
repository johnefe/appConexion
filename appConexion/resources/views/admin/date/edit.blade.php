
@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">Actualizar información básica</h1>
   
    	</div>
	</div>
	<div class="row">
        @include('messages._messages')          
        <div class="col-lg-6 col-lg-offset-3">
            
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                   <h4 class="titulo-4">DATOS<h4>
                </div>
                <div class="panel-body">
                    
                    <div class="row texto">
                        <!-- formualario para crear nueva diapositiva-->
                   
                        {!!Form::model($date,['route'=> ['date.update',$date->id], 'method'=>'PUT','files' => true])!!}
                        <div class="col-lg-12">
                              @csrf
                           <div class="form-group">
                                {!!Form::label('Nombre:')!!}
                                {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Nombre de la aplicación'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('Dirección:')!!}
                                {!!Form::text('address',null,['class'=>'form-control','placeholder'=>'Dirección'])!!}
                            </div>
                             <div class="form-group">
                                {!!Form::label('Teléfono:')!!}
                                {!!Form::text('phone',null,['class'=>'form-control','placeholder'=>'Dirección'])!!}
                            </div>
                             <div class="form-group">
                                {!!Form::label('Correo electrónico:')!!}
                                {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo electrónico'])!!}
                            </div>
                             <div class="form-group">
                                {!!Form::label('Ciudad:')!!}
                                {!!Form::text('city',null,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
                            </div>
                            <div class="form-group" id="divMain">
                                
                                <div id="divInputLoad">
                                    {!!Form::label('Escoge una imagen')!!}
                                    {!!Form::file('logo',['class'=>'form-control', 'id'=>'logo', 'accept'=>'image/*'])!!}
                                    <div class="form-group text-center img-prev"  id="file-preview-zone">
                                    </div>
                                </div>
                                <div  id="prev">
                                    <img src="{{asset('storage/img/logo/'.$date->logo) }}" width="100%;" height="230px">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn bg-blue-1 titulo-4 name="" value="ACTUALIZAR">
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                        {!!Form::close()!!}
                        <!-- end formualario para crear nueva diapositiva-->
                    </div>
                    
                </div>
            </div>
            
        </div>

    </div>
</div>
<script>
    function readFile(input) {
        document.getElementById('file-preview-zone').innerHTML="";

        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //previewZone. removeChild(filePreview);
            reader.onload = function (e) {
                var filePreview = document.createElement('img');
                filePreview.id = 'file-preview';
                //e.target.result contents the base64 data from the image uploaded
                filePreview.src = e.target.result;
                console.log(e.target.result);
 
                var previewZone = document.getElementById('file-preview-zone');
                previewZone.appendChild(filePreview);
                //document.getElementById('file-preview-zone').innerHTML=filePreview;
            }
 
            reader.readAsDataURL(input.files[0]);
        }
    }
 
    var fileUpload = document.getElementById('logo');
    fileUpload.onchange = function (e) {
        document.getElementById("prev").innerHTML="";
        readFile(e.srcElement);
    }
 
</script>
@stop