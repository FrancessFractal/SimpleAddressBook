@extends('layout')

@section('content')

    <ul>
        @foreach($entries as $entry)
            <li>
                <a href="{{ route('entry.show', ['entry' => $entry->id]) }}" >
                    {{$entry->name}}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('entry.create') }}" >Create New Entry</a>

@endsection