@extends('layouts.app')

@section('title','showcomment')
@section('content')
<div>
@foreach($user as $users)
<tr>
	<td>Name:{{$users->name}}</td><br/>
	<td>Comment:{{$users->comments}}</td><br/>
	<td>Time:{{$users->created_at}}</td></br>
	<br/><br/>
</tr>
@endforeach
</div>
@endsection