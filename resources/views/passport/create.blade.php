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

<form action="{{url('passport')}}" method="POST">
@csrf
	<table border="0">
		<tr>
			<td>Number</td>
			<td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td>User Id</td>
			<td><input type="text" name="user_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Create"></td>
			<td><a href="{{url('passport')}}">Cancel</a></td>
		</tr>
	</table>
</form>