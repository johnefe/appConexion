@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">LO QUE PODEMOS HACER</h1>
            	<h4 class="note texto">Aquí puedes gestionar la información de lo que nuestra empresa puede hacer, en otras palabras se podria mostrar un catálogo de los trabajos realizados.</h4><br><br>     
    	</div>
	</div>
	<div class="row">
        <!-- for each slider-->
        @include('messages._messages')
            @foreach( $make as $make)

        <div class="col-lg-4">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                  <h4 class="titulo-4">{{$make->title}}</h4>
                </div>
                <div class="panel-body">
                	 
                    <div class="row texto">
                    	<div class="col-lg-12">
                            <form role="form">
                                		
                              	<div class="form-group">
                                    <img src="{{asset('storage/img/blog/'.$make->url_img) }}" width="100%;" height="250px">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            <a href="/admin/make/{{$make->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil "></span></a>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            <a href="/admin/maker/{{$make->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-eye "></span></a>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        @endforeach
            <!-- end for each slider-->
    </div>



</div>

@stop