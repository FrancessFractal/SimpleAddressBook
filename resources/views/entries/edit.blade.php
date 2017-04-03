@extends('layout')

@section('content')

    <h1>Editing Address Book Entry</h1>

    <form method="POST" action="{{route('entry.update', ['entry' => $entry->id])}}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <label for="name">Name: <input name="name" type="text" value="{{$entry->name}}"> </label> <br />
        <label for="email">Email: <input name="email" type="text" value="{{$entry->email}}"> </label> <br />
        <label for="phone">Phone: <input name="phone" type="text" value="{{$entry->phone}}"> </label> <br />

        <input type="submit" value="Save">
        <a href="{{ route('entry.show', ['entry' => $entry->id]) }}">Cancel</a>
    </form>

    @include('addresses.index', ['addresses' => $entry->addresses])

@endsection