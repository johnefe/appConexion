

@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header titulo-3">Slider</h1>
            	<h4 class="note texto">Aquí puedes gestionar todas las imágenes con su respectivo título y descripción que irán en las diapositivas que esta presente en el inicio de esta aplicación.</h4><br><br>     
    	</div>
	</div>
	<div class="row">
        <!-- for each slider-->
        @include('messages._messages')
            @foreach( $sliders as $slider)

        <div class="col-lg-4">
        	
            <div class="panel panel-default">
                <div class="panel-heading text-center bg-blue-1">
                  <label class="titulo-4">{{$slider->title}}</label>
                </div>
                <div class="panel-body">
                	 
                    <div class="row">
                    	<div class="col-lg-12">
                            <form role="form">
                                		<div class="form-group">
	                   
                                        </div>
                                      	<div class="form-group">

                                            <img src="{{asset('storage/img/slider/'.$slider->url_img) }}" width="100%;" height="250px">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control texto" rows="5" disabled>{{$slider->body}}</textarea>
                                        </div>

                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            <a href="/admin/slider/{{$slider->id}}/edit" class="  btn btn-default btn-circle"><span class="fa fa-pencil fa-1x"></span></a>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            
                                            {!!Form::open(['route'=>['slider.destroy',$slider->id],'method'=>'DELETE'])!!}
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
            <!-- end for each slider-->
    </div>



</div>

@stop