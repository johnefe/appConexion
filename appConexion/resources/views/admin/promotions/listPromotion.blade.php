@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
                <h1 class="page-header">Promociones</h1>
                <h4 class="note">Aquí puedes gestionar la información de las promociones que se van publicando.</h4><br><br>     
        </div>
    </div>
    <div class="row">
        <!-- for each slider-->
        @include('messages._messages')
            @foreach( $promotions as $promotion)

        <div class="col-lg-4">
            
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                  {{$promotion->title}}
                </div>
                <div class="panel-body">
                     
                    <div class="row">
                        <div class="col-lg-12">
                            <form role="form">
                                        
                                        <div class="form-group">
                                            <img src="{{asset('storage/img/promotions/'.$promotion->link_image) }}" width="100%;" height="250px">
                                        </div>
                            </form>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                         <div class="form-group text-center">
                                            <a href="/admin/promotions/{{$promotion->id}}/edit" class="btn btn-default btn-circle"><span class="fa fa-pencil "></span></a>
                                            
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group text-center">
                                        {!!Form::open(['route'=>['promotions.destroy',$promotion->id],'method'=>'DELETE'])!!}
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