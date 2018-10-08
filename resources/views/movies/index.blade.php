<h1>Hello Movies</h1>

<ul>
@foreach($Movies as $Movie)
	<li>
		{{ $Movie->MovieName }}
		<br>
		<a href="{{ url('/movies/'.$Movie->MovieID.'/edit') }}">Edit</a>
		<form action="{{ url('/movies/'.$Movie->MovieID) }}" method="post">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit">Delete</button>
		</form>
	</li>
@endforeach
</ul>