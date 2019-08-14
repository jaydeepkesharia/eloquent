@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<h2>{{ $name }}</h2>

<a href="{{url('role/create')}}">ADD</a>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Role</th>
	</tr>
	
@if(isset($roles))
	@foreach($roles as $role)
		<tr>
			<td>{{ $role->id }}</td>
			<td>{{ $role->role}}</td>
		</tr>
	@endforeach
@else
		<tr>
			<td colspan="2"><?php echo "No Records Found"; ?></td>
		</tr>
@endif
</table>