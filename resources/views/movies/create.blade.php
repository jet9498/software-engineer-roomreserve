<h1>Create Movie</h1>

<form action="{{ url('/movies') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Movie Name:</label>
	<input type="text" name="MovieName">
	<label>Movie Description:</label>
	<textarea name="MovieDescription"></textarea>
	<button type="submit">Submit</button>
</form>