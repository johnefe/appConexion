@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">ACTUALIZAR SERVICIO DESTACADO</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
                  
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                   <h4 class="titulo-4">DATOS SERVICIO</h4>
                </div>
                <div class="panel-body">
                	
                    <div class="row texto">
                    	<!-- formualario para crear nueva diapositiva-->
                   
                        {!!Form::model($hability,['route'=> ['threeServices.update',$hability->id], 'method'=>'PUT','files' => true])!!}
                          @csrf
                    	<div class="col-lg-12">
                            <div class="form-group">
                                {!!Form::label('Icono:')!!}
                                {!!Form::text('link_icon',null,['class'=>'form-control','placeholder'=>'icono'])!!}
                            </div>
                           <div class="form-group">
                                {!!Form::label('Título:')!!}
                                {!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Título del servicio'])!!}
                            </div>
                           
                            <div class="form-group">
                                {!!Form::label('Descripción')!!}
                                {!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Aqui decribe el producto','rows'=>'3'])!!}
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
@stop