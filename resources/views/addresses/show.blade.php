{{$address->line1}} <br />
{{$address->line2}} <br />
{{$address->town}}, {{$address->county}} {{$address->postal}} <br />
{{$address->country}} <br />

<form method="POST" action="{{route('address.edit', ['address' => $address->id])}}">
    <input type="hidden" name="_method" value="GET">
    {{ csrf_field() }}
    <input type="submit" value="Edit">
</form>
<form method="POST" action="{{route('address.destroy', ['address' => $address->id])}}">
    <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
    <input type="submit" value="Delete">
</form>
<br />
<br />
