
@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">Servicios destacados</h1>
            	<h4 class="note texto">Aquí puedes gestionar el contenido de los tres servicios mas importantes de la empresa. Esta sección esta diseñada para gestionar 3 servicios, puesto que asi corresponde al diseño de la pagina web.</h4><br><br>     
    	</div>
	</div>
	<div class="row">
		 <!-- /.panel -->
		 			@include('messages._messages')  
                    <div class="panel panel-default">
                        <div class="panel-heading bg-blue-1">
                      
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">

                            	@foreach($habilities as $hability)
                            	<li @if($hability->id === 2) class="timeline-inverted" @endif>
                                    <div class="timeline-badge warning"><i class="{{$hability->link_icon}}"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title titulo-3">{{$hability->title}}</h4>
                                            <p><small class="text-muted texto"><i class="fa fa-clock-o"></i>Actualizado el {{$hability->updated_at}}</small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="texto">{{$hability->body}}</p>
                                        </div>
                                         <div class="col-lg-12">
			                            <div class="row">
			                                <div class="col-lg-12 text-center">
			                                         <div class="form-group">
			                                            <a href="/admin/threeServices/{{$hability->id}}/edit" class="btn btn-success btn-circle"><span class="fa fa-pencil"></span></a>
			                                        </div>
			                                </div>
			                            </div>
			                            
			                        </div>
                                    </div>
                                </li>
                            	@endforeach
                               
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
	</div>



</div>
@stop
