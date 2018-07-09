@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header">ACTUALIZAR PROMOCIÓN</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
        @include('messages._messages')          
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                   DATOS
                </div>
                <div class="panel-body">
                	
                    <div class="row">
                    	<!-- formualario para editar promocion-->
                   
                        {!!Form::model($promotion,['route'=> ['promotions.update',$promotion->id], 'method'=>'PUT','files' => true])!!}
                    	<div class="col-lg-12">
                            
                           <div class="form-group">
                                {!!Form::label('Título:')!!}
                                {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Título de la promoción'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('Precio:')!!}
                                {!!Form::text('price',null,['class'=>'form-control','placeholder'=>'precio'])!!}
                            </div>
                            <div class="form-group" d="divMain">
                                <div id="divInputLoad">
                                    {!!Form::label('Escoge una imagen')!!}
                                    {!!Form::file('link_image',['class'=>'form-control', 'id'=>'url_img', 'accept'=>'image/*'])!!}
                                    <div class="form-group text-center img-prev"  id="file-preview-zone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!!Form::label('Descripción #1')!!}
                                {!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'3'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('Descripción #2')!!}
                                {!!Form::textarea('body_2',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'3'])!!}
                            </div>
                           	
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-success" name="" value="ACTUALIZAR">
                                    </div>
                                </div>
                                
                            </div>   
                        </div>
                        {!!Form::close()!!}
                        <!-- end formualario para editar promocion-->
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
        readFile(e.srcElement);
    }
 
</script>

@stop