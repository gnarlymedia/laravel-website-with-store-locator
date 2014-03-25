@extends('layouts.layout')

@section('content')
    @foreach($users as $user)
        <p><span style="margin-right:10px">{{ $user->name }}</span><span>{{ $user->email }}</span></p>
    @endforeach
@stop