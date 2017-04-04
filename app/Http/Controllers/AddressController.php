<?php

namespace App\Http\Controllers;

use App\Address;
use App\Entry;
use App\Http\Requests\UpdateAddress;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    /**
     * Show the form for creating a new address for the given address book entry.
     *
     * @param  \App\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function create(Entry $entry)
    {
        return view('addresses.new', ['entry' => $entry]);
    }

    /**
     * Store a newly created address in storage.
     *
     * @param  \App\Http\Requests\UpdateAddress  $request
     * @param  \App\Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateAddress $request, Entry $entry)
    {

        // create the new address
        Address::create([
            'entry_id' => $entry->id,
            'line1' => $request->line1,
            'line2' => $request->line2,
            'town' => $request->town,
            'county' => $request->county,
            'postal' => $request->postal,
            'country' => $request->country,
        ]);

        // redirect to show the address book entry containing the new address
        return redirect(route('entry.show', ['entry' => $entry->id]));
    }

    /**
     * Show the form for editing the specified address.
     *
     * @param  \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        return view('addresses.edit')
            ->with('address', $address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddress  $request
     * @param  \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddress $request, Address $address)
    {
        // update entry
        $address->fill([
            'line1' => $request->line1,
            'line2' => $request->line2,
            'town' => $request->town,
            'county' => $request->county,
            'postal' => $request->postal,
            'country' => $request->country,
        ]);
        $address->save();

        // redirect to display display the entry this address belongs to
        return redirect(route('entry.show', ['entry' => $address->entry]));
    }

    /**
     * Remove the specified address from storage.
     *
     * @param  \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {

        // delete address
        $address->delete();

        // redirect to display display the entry this address belongs to
        return redirect(route('entry.show', ['entry' => $address->entry]));
    }
}
