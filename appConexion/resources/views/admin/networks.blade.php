@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header">Tus redes sociales</h1>
            	<h4 class="note">Aquí puedes gestionar el contenido de tus redes sociales</h4><br><br>     
    	</div>
	</div>
	<div class="row">
		 <!-- /.panel -->
		 @include('messages._messages')
		 @foreach($networks as $network)
		 <div class="col-lg-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                   {{$network->name}} 
                </div>
                <div class="panel-body">
                    <a class="warning" href="{{$network->link}}" target="blank"><i class="{{$network->logo}} fa-5x"></i></a>
                </div>
                <div class="panel-footer">
                     <a href="/admin/networks/{{$network->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil"></span></a>
                </div>
            </div>
        </div>
        @endforeach
	</div>

</div>
@stop