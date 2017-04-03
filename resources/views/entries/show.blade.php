@extends('layout')

@section('content')

    <h1>{{$entry->name}}</h1>
    <a href="{{ route('entry.edit', ['entry' => $entry->id]) }}">Edit</a> <br />
    Email: {{$entry->email}} <br />
    Phone: {{$entry->phone}} <br />

    @include('addresses.index', ['addresses' => $entry->addresses])


@endsection