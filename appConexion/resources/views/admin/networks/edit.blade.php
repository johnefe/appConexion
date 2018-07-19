@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">ACTUALIZAR RED SOCIAL</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
                  
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                   <h4 class="titulo-4">INFORMACIÓN</h4>
                </div>
                <div class="panel-body">
                	
                    <div class="row texto">
                    	<!-- formualario actualizar una red social-->
                   
                         {!!Form::model($network,['route'=> ['networks.update',$network->id], 'method'=>'PUT'])!!}
                           @csrf
                        <div class="col-lg-12">
                            
                           <div class="form-group">
                                {!!Form::label('Nombre:')!!}
                                {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de la red social'])!!}
                            </div>
                           <div class="form-group">
                                {!!Form::label('Url:')!!}
                                {!!Form::text('link',null,['class'=>'form-control','placeholder'=>'URL de la red social'])!!}
                            </div>
                            
                            <div class="form-group">
                                {!!Form::label('Icono:')!!}
                                {!!Form::text('logo',null,['class'=>'form-control','placeholder'=>'icono'])!!}
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
                        <!-- formualario actualizar una red social-->
                    </div>
                    
                </div>
            </div>
            
        </div>

    </div>
@stop