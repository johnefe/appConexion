
@extends('admin.base')

@section('content')
<div id="page-wrapper">
     <div class="row">
         <div class="col-lg-12">
            	<h1 class="page-header">Mi información básica</h1>
            	<h4 class="note">Aquí puedes gestionar la informacion básica de la empresa, como dirección, correo electronico, el logo, nombre de la página web, etc.</h4><br><br>     
    	</div>
	</div>
	<div class="row">
        <!-- for each slider-->
        @include('messages._messages')
    </div>
</div>
@stop