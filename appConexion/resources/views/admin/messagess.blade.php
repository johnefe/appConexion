@extends('admin.base')

@section('content')
<div id="page-wrapper"><br><br><br>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><i class="fa fa-comment fa-fw"></i>Mensajes recibidos </h4>
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                @foreach($messages as $message)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$message->id}}">{{$message->name}}...</a> <small> {{$message->created_at}}</small>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$message->id}}" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <!-- mensajes-->
                                            	<ul class="chat" >
					                                <li class="left clearfix">
					                                    <span class="chat-img pull-left">
					                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
					                                    </span>
					                                    <div class="chat-body clearfix">
					                                        <div class="header">
					                                            <strong class="primary-font"><i class="fa fa-envelope fa-fw"></i>{{$message->email}}, <i class="fa fa-phone fa-fw"></i> {{$message->phone}}</strong>
					                                            <small class="pull-right text-muted">
					                                                <i class="fa fa-clock-o fa-fw"></i> {{$message->created_at}}
					                                            </small>
					                                        </div>
					                                        <p  >
					                                            {{$message->body}}
					                                        </p>
					                                    </div>
					                                </li>
					                            </ul>
					                            <div class="form-group text-center">
						                        {!!Form::open(['route'=>['messages.destroy',$message->id],'method'=>'DELETE'])!!}
		                                        	<button type="submit" class=" btn btn-default btn-circle" ><span class="fa fa-trash fa-1x"></span></button>
		                                        {!!Form::close()!!}
                                        	</div>
                                            <!--end mensajes -->
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                      
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

</div>
@stop