@extends('admin.base')

@section('content')
<div id="page-wrapper" class="bg-gray-2"><br><br><br>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-blue-1">
                            <h4 class="titulo-4"><i class="fa fa-envelope fa-fw"></i> Correos electrónicos.</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                            	@foreach($mails as $mail)
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-check-circle-o  fa-fw"></i>{{$mail->email}}
                                    <span class="pull-right text-muted small"><em>{{$mail->created_at}}</em>
                                    </span>
                                </a>
                               	@endforeach
                            </div>
                            <!-- /.list-group -->
                            <!--<a href="#" class="btn btn-default btn-block">Descargar en archivo plano</a>-->
                             <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
                        </div>

	</div>
</div>

@stop