@extends('admin.base')

@section('content')
<div id="page-wrapper" class=" bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">ACTUALIZAR CONTENIDO</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
        @include('messages._messages')          
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                   <h4 class="titulo-4">DATOS</h4>
                </div>
                <div class="panel-body">
                	
                    <div class="row texto">
                    	<!-- formualario para crear nueva diapositiva-->
                   
                        {!!Form::model($contentVideo,['route'=> ['contentVideo.update',$contentVideo->id], 'method'=>'PUT','files' => true])!!}
                          @csrf
                    	<div class="col-lg-12">
                            
                           <div class="form-group">
                                {!!Form::label('Título:')!!}
                                {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Título'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('id video:')!!}
                                {!!Form::text('link_video',null,['class'=>'form-control','placeholder'=>'id video youtube'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('icono:')!!}
                                {!!Form::text('icon',null,['class'=>'form-control','placeholder'=>'Icono'])!!}
                            </div>
                            <div class="form-group" d="divMain">
                                <div id="divInputLoad">
                                    {!!Form::label('Escoge una imagen')!!}
                                    {!!Form::file('url_img',['class'=>'form-control', 'id'=>'url_img', 'accept'=>'image/*'])!!}
                                    <div class="form-group text-center img-prev"  id="file-preview-zone">
                                    </div>
                                </div>
                                <div  id="prev">
                                   <img src="{{asset('storage/img/about/'.$contentVideo->url_img) }}" width="100%;" height="250px">  
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::label('Descripción')!!}
                                {!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'6'])!!}
                            </div>
                           	
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn bg-blue-1 titulo-4" name="" value="ACTUALIZAR">
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
 
    var fileUpload = document.getElementById('url_img');
    fileUpload.onchange = function (e) {
         document.getElementById("prev").innerHTML="";
        readFile(e.srcElement);
    }
 
</script>

@stop