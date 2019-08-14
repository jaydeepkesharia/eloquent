<h2>{{ $name }}</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{url('home')}}" method="POST">
@csrf
	<table border="0">
		<tr>
			<td>name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
			<td><a href="{{url('home')}}">Cancel</a></td>
		</tr>
	</table>
</form>