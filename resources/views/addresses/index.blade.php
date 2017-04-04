
<h2>Addresses</h2>
@each('addresses.show', $entry->addresses, 'address')

<a href="{{ route('entry.address.create', ['entry' => $entry->id]) }}">Add Address</a>
