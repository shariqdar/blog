@extends('main')
@section('title', '| All Posts')
@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
		<div class="col-md-2">
			{!! Html::linkRoute('posts.create', 'Create New Post', array(), array('class' => 'btn btn-lg btn-block btn-primary btn-h1-spacing')) !!}
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Slug</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($posts as $post)
						<tr>
							<th>{{$post->id}}</th>
							<td>{{$post->title}}</td>
							<td>{{$post->slug}}</td>
							<td>{{substr($post->body,0,10)}}{{(strlen($post->body) >10) ? "...":""}}</td>
							<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
							<td>{!! Html::linkRoute('posts.show', 'View', array($post->id),array('class' =>'btn btn-default btn-sm')) !!}
								 {!! Html::linkRoute('posts.edit', 'Edit', [$post->id],array('class' => 'btn btn-default btn-sm')) !!} 
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $posts->links(); !!}	
			</div>
		</div>
		
	</div>

@stop