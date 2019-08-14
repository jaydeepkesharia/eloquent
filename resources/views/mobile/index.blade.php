@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<h2>{{ $name }}</h2>

<a href="{{url('mobile/create')}}">ADD</a>

<table border="1">
	<tr>
		<th>Number</th>
		<th>User Id</th>
	</tr>
	
@if(isset($mobiles))
	@foreach($mobiles as $mobile)
		<tr>
			<td>{{ $mobile->number }}</td>
			<td>{{ $mobile->user_id }}</td>
		</tr>
	@endforeach
@else
		<tr>
			<td colspan="2"><?php echo "No Records Found"; ?></td>
		</tr>
@endif
</table>