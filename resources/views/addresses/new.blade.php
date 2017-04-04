@extends('layout')

@section('content')

    <h1>Creating New Address for entry "{{$entry->name}}"</h1>

    <form method="POST" action="{{route('entry.address.store', ['entry' => $entry])}}">
        <input type="hidden" name="_method" value="POST">
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input name="line1" type="text" placeholder="Line 1"> <br />
        <input name="line2" type="text" placeholder="Line 2"> <br />
        <input name="town" type="text" placeholder="Town">,
        <input name="county" type="text" placeholder="County/State">
        <input name="postal" type="text" placeholder="Postal/Zip"> <br />
        <input name="country" type="text" placeholder="Country"> <br />

        <input type="submit" value="Create Address">
        <a href="{{ route('entry.show', ['entry' => $entry->id]) }}">Cancel</a>
    </form>

@endsection