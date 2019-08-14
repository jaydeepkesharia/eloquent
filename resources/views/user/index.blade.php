@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<h2>{{ $name }}</h2>

<a href="{{url('home/create')}}">ADD</a>

<table border="1">
	<tr>
		<th>No</th>
		<th>Name</th>
	</tr>
@if(isset($users))
	@foreach($users as $user)
		<tr>
			<td>{{ $user->id}}</td>
			<td>{{ $user->name}}</td>
		</tr>
	@endforeach
@else
		<tr>
			<td colspan="2"><?php echo "No Records Found"; ?></td>
		</tr>
@endif
</table>