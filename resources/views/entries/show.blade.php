@extends('layout')

@section('content')

    <h1>{{$entry->name}}</h1>
    Email: {{$entry->email}} <br />
    Phone: {{$entry->phone}} <br />

    @include('addresses.index', ['addresses' => $entry->addresses])


@endsection