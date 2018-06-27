@extends("layouts.base")

@section("content")
	<div class="container">
			<div class="row">
					<div class="col-lg-12">
						<h1>usuarios</h1>
						
						<ul>
						@foreach($users as $user)
							<li>{{$user->name}}</li>
							<div class="well">
								@foreach($user->posts as $post)
									<strong>{{$post->title}}</strong>
								@endforeach
							</div>
							<div class="alert alert-info">
								@foreach($user->comments as $comment)
									<strong>{{$comment->body}}</strong>
								@endforeach
							</div>
						@endforeach
						@foreach($redes as $redesSociales)
							{{$redesSociales->title_app}}

						@endforeach
						</ul>
					</div>
				
			</div>

	</div>

@endsection


