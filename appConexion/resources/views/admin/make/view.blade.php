@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header">Nuestros trabajos</h1>
            	<br><br>     
    	</div>
	</div>
	<div class="row">
        <!-- for each slider-->
        @include('messages._messages')
        @foreach( $make as $make)
        <!--<div class="col-lg-12">
            <div class="form-group text-center">
                <a href="/admin/makes/{{$make->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil "></span></a>
            </div>
        </div>-->
        <div class="col-lg-4">
            
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                  {{$make->title}}
                </div>
                <div class="panel-body">
                     
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                        
                                <div class="form-group">
                                    <img src="{{asset('storage/img/blog/sub-blog/'.$make->url_img) }}" width="100%;" height="250px">
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            <a href="/admin/makes/{{$make->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil "></span></a>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            {!!Form::open(['route'=>['maker.destroy',$make->id],'method'=>'DELETE'])!!}
                                                <button type="submit" class=" btn btn-default btn-circle" ><span class="fa fa-trash fa-1x"></span></button>
                                            {!!Form::close()!!}
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