@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header">Sobre nosotros</h1>
            	<h4 class="note">Aquí puedes gestionar el contenido de la seccion 'sobre nosotros', seccion que se utiliza</h4><br><br>     
    	</div>
	</div>
	<div class="row">
		 <!-- /.panel -->
		 @include('messages._messages')
		 @foreach($about as $about)
		 <div class="col-lg-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                   {{$about->title}} 
                </div>
                <div class="panel-body">
                    <p>{{$about->body}}</p>
                </div>
                <div class="panel-footer text-center">
                     <a href="/admin/aboutUs/{{$about->id}}/edit" class="btn btn-success btn-circle"><span class="fa fa-pencil"></span></a>
                </div>
            </div>
        </div>
        @endforeach


	</div>

</div>
@stop