@extends('../layouts/layout')

@section('page_title')
    user
@endsection

@section('projecten')

@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<br>
<td>{{ $user->name }}</td>
<br>
<td>{{ $user->email }}</td>
</tr>
@endforeach

@endsection