@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<h2>{{ $name }}</h2>

<a href="{{url('passport/create')}}">ADD</a>

<table border="1">
	<tr>
		<th>Number</th>
		<th>User Id</th>
	</tr>
@if(isset($passports))
	@foreach($passports as $passport)
		<tr>
			<td>{{ $passport->number }}</td>
			<td>{{ $passport->user_id }}</td>
		</tr>
	@endforeach
@else
		<tr>
			<td colspan="2"><?php echo "No Records Found"; ?></td>
		</tr>
@endif
</table>