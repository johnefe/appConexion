
@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">Mi información básica</h1>
            	<h4 class="note texto">Aquí puedes gestionar la informacion básica de la empresa, como dirección, correo electronico, el logo, nombre de la página web, etc.</h4><br><br>     
    	</div>
	</div>
	<div class="row">
        <!-- for each slider-->
        @include('messages._messages')

        @foreach($date as $date)
         <div class="col-lg-4 col-lg-offset-4">
            
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                  <label class="titulo-4">{{$date->title}}</label>
                </div>
                <div class="panel-body">
                     
                    <div class="row text-center">
                        <div class="col-lg-12">
                            <div class="form-group">
                               <img src="{{asset('storage/img/logo/'.$date->logo) }}" width="100%;" height="200px">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="texto">{{$date->address}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="texto">{{$date->phone}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="texto">{{$date->email}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="texto">{{$date->city}}</label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                         <div class="form-group text-center">
                                            <a href="/admin/date/{{$date->id}}/edit" class="  btn btn-default btn-circle"><span class="fa fa-pencil fa-1x"></span></a>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
        @endforeach
    </div>
</div>
@stop