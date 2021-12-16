<form method="post" action="{{route('send') }}"> 
	{{ csrf_field() }}
	<h1> {{Auth()->id()}}
	<input type="text" name="to"  placeholder="to" >
	<input type="text" name="text" placeholder="text">
	<input type="submit" value="submit">
</form>