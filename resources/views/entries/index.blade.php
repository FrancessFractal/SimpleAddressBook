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

@endsection