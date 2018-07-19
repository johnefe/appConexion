@extends('admin.base')

@section('content')
<div id="page-wrapper" class=" bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">Contenido y video</h1>
            	<h4 class="note"></h4><br><br>     
    	</div>
	</div>
	<div class="row texto">
		 <!-- /.panel -->
		 @include('messages._messages')
		 @foreach($contentVideo as $h)
		 <div class="col-lg-3 text-center col-lg-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue-1">
                   <p class="r titulo-4">{{$h->title}} <i class="{{$h->icon}} "></i></p>
                </div>
                <div class="panel-body">
                    <p>{{$h->body}}</p>
                    
                </div>
                <div class="panel-footer">
                     <a href="/admin/contentVideo/{{$h->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil"></span></a>
                </div>
            </div>
        </div>
         <div class="col-lg-3 text-center">
            <div class="panel panel-default">
                <div class="panel-heading bg-blue-1">
                 <p class="titulo-4"> id video: {{$h->link_video}} </p>
                </div>
                <div class="panel-body">
                     <img src="{{asset('storage/img/about/'.$h->url_img) }}" width="100%;" height="250px">  
                </div>
                <div class="panel-footer">   
                </div>
             </div>
        </div>
        @endforeach
	</div>

</div>
@stop