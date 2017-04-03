<!-- TODO: look more into blade layouts to see if any of this can be reused with edit.blade.php -->
@extends('layout')

@section('content')

    <h1>Creating Address Book Entry</h1>

    <form method="POST" action="{{route('entry.store')}}">
        <input type="hidden" name="_method" value="POST">
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <label for="name">Name: <input name="name" type="text"> </label> <br />
        <label for="email">Email: <input name="email" type="text"> </label> <br />
        <label for="phone">Phone: <input name="phone" type="text"> </label> <br />

        <input type="submit" value="Create Entry">
        <a href="{{ route('entry.index') }}">Cancel</a>
    </form>

@endsection