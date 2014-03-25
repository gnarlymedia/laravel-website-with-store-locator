@extends('layouts.layout')

@section('content')
    @foreach($sites as $site)
        <p>{{ $site->name }}</p>
        <p>{{{ $site->addressLine1 }}}</p>
        <p>{{{ $site->addressLine2 }}}</p>
        <p>{{ $site->addressSuburb }}</p>
        <p>{{ $site->addressState }}</p>
        <p>{{ $site->addressPostcode }}</p>
        <p>{{ $site->openingHours }}</p>
        <p>{{ $site->phone }}</p>
        <p>{{ $site->fax }}</p>
        <p>{{ $site->modalities }}</p>
    @endforeach
@stop