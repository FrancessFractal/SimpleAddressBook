@extends('layout')

@section('content')

    <h1>Modifying Address</h1>

    <form method="POST" action="{{route('address.update', ['address' => $address->id])}}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        @if (count($errors) > 0)
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <input name="line1" type="text" placeholder="Line 1" value="{{ $address->line1 }}"> <br />
        <input name="line2" type="text" placeholder="Line 2" value="{{ $address->line2 }}"> <br />
        <input name="town" type="text" placeholder="Town" value="{{ $address->town }}">,
        <input name="county" type="text" placeholder="County/State" value="{{ $address->county }}">
        <input name="postal" type="text" placeholder="Postal/Zip" value="{{ $address->postal }}"> <br />
        <input name="country" type="text" placeholder="Country" value="{{ $address->country }}"> <br />

        <input type="submit" value="Update Address">
        <a href="{{ route('entry.show', ['entry' => $address->entry->id]) }}">Cancel</a>
    </form>

@endsection