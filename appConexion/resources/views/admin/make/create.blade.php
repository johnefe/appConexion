@extends('admin.base')

@section('content')
<div id="page-wrapper" class=" bg-gray-2">

     <div class="row">

         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">NUEVA TRABAJO</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
                  
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                 
                </div>
                <div class="panel-body">
                	@include('messages._messages')
                    <div class="row texto">
                    	<!-- formualario para crear nueva diapositiva-->
                    	{!!Form::open(['route'=> 'make.store', 'method'=>'POST','files' => true])!!}
                          @csrf
                    	<div class="col-lg-12">
                            <div class="form-group">

                               
                                {!!Form::label('Make','Selecciona el grupo a adicionar: ')!!}
                                {!!Form::select('id_maker',$make,null,['class'=>'form-control'])!!}    
                            </div>
                            
                           	<div class="form-group">

                                {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Título'])!!}
                            </div>
                            <div class="form-group" d="divMain">
                                <div id="divInputLoad">
                                    <small class="note"><strong>Escoge una imágen:</strong>El nombre de la imágen no debe contener tíldes.</small>
                                    {!!Form::file('url_img',['class'=>'form-control', 'id'=>'url_img', 'accept'=>'image/*'])!!}

                                    <div class="form-group text-center img-prev"  id="file-preview-zone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::label('Descripción')!!}
                                {!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Descripción','rows'=>'3'])!!}
                            </div>
                           	
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn bg-blue-1 titulo-4" name="" value="REGISTRAR">
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
            reader.onload = function (e) {
                var filePreview = document.createElement('img');
                filePreview.id = 'file-preview';
                filePreview.src = e.target.result;
                console.log(e.target.result);
 
                var previewZone = document.getElementById('file-preview-zone');
                previewZone.appendChild(filePreview);
            }
 
            reader.readAsDataURL(input.files[0]);
        }
    }
 
    var fileUpload = document.getElementById('url_img');
    fileUpload.onchange = function (e) {
        readFile(e.srcElement);
    }
 
</script>

@stop