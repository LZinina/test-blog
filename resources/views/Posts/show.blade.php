@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
	
<div class="blog-post">

 <h2 class="blog-post-title">{{$post->title}}</h2>

 <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} </p>

 <p>{{$post->body}}</p>

 <div class="comments">

 	<ul class="list-group">

 	@foreach ($post->comments as $comment)

 		<li class="list-group-item">

 			<strong>
 				
 				{{ $comment->created_at->diffForHumans() }}

 			</strong>
 	
 			{{$comment->body}}		

 		</li>
 	
 	@endforeach

 	</ul>

 </div>


<hr>


<div class="card">

	<div class="card-block">

		<form method="POST" action="/posts/{{$post->id}}/comments">
			{{csrf_field()}}
			
			<div class="form-group">
				
				<textarea name="body" placeholder="Your comment here." class="form-control"></textarea>

			</div>

			
			
			 <button type="submit" class="btn btn-primary">Add Comment</button>

			
		</form>
		
		@include('layouts.errors')
	</div>
</div>
</div><!-- /.blog-post -->
</div>
@endsection
