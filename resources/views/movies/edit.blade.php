<h1>Edit Movie</h1>

<form action="{{ url('/movies/'.$Movie->MovieID) }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<input type="hidden" name="_method" value="PUT">
	<label>Movie Name:</label>
	<input type="text" name="MovieName" value="{{ $Movie->MovieName }}">
	<label>Movie Description:</label>
	<textarea name="MovieDescription">{{ $Movie->MovieDescription }}</textarea>
	<button type="submit">Submit</button>
</form>