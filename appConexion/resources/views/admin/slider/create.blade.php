@extends('admin.base')

@section('content')
<div id="page-wrapper">

     <div class="row">

         <div class="col-lg-12">
            	<h1 class="page-header">NUEVA DIAPOSITIVA</h1>
           		<br><br>     
    	</div>
	</div>
	<div class="row">
                  
        <div class="col-lg-6 col-lg-offset-3">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                   DATOS DIAPOSITIVA
                </div>
                <div class="panel-body">
                	@include('messages._messages')
                    <div class="row">
                    	<!-- formualario para crear nueva diapositiva-->
                    	{!!Form::open(['route'=> 'slider.store', 'method'=>'POST','files' => true])!!}
                    	<div class="col-lg-12">
                            
                           	@include('admin.slider.form.formSlider')
                           	
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="submit" class="form-control btn btn-success" name="" value="REGISTRAR">
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