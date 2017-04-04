@extends('layout')

@section('content')

    <h1>{{$entry->name}}</h1>
    <form method="POST" action="{{route('entry.destroy', ['entry' => $entry->id])}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        <input type="submit" value="Delete">
    </form>
    <a href="{{ route('entry.edit', ['entry' => $entry->id]) }}">Edit</a> <br />
    Email: {{$entry->email}} <br />
    Phone: {{$entry->phone}} <br />

    @include('addresses.index', ['addresses' => $entry->addresses])


@endsection