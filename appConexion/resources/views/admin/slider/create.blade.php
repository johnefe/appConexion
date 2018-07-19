@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">

     <div class="row">

         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">NUEVA DIAPOSITIVA</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
                  
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                   <label class="titulo-4">DATOS DIAPOSITIVA</label>
                </div>
                <div class="panel-body">
                	@include('messages._messages')
                    <div class="row">
                    	<!-- formualario para crear nueva diapositiva-->
                    	{!!Form::open(['route'=> 'slider.store', 'method'=>'POST','files' => true])!!}
                          @csrf
                    	<div class="col-lg-12">
                            
                           	@include('admin.slider.form.formSlider')
                           	
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn titulo-4 bg-blue-1" name="" value="REGISTRAR">
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


@stop