@extends('layouts.users')

@section('content')
    @foreach($users as $user)
        <p><span style="margin-right:10px">{{ $user->username }}</span><span>{{ $user->email }}</span></p>
    @endforeach
@stop