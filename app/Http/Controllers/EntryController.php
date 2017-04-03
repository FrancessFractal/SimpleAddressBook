<?php

namespace App\Http\Controllers;

use App\Entry;
use App\Http\Requests\UpdateEntry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entries.index')
            ->with('entries', Entry::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entries.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateEntry $request)
    {
        // create the new entry
        $entry = Entry::create(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone]);

        // redirect to show the newly created entry
        return redirect(route('entry.show', ['entry' => $entry->id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function show(Entry $entry)
    {
        return view('entries.show')
            ->with('entry', $entry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Entry $entry)
    {
        return view('entries.edit')
            ->with('entry', $entry);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEntry $request, Entry $entry)
    {
        // update entry
        $entry->fill(['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone]);
        $entry->save();

        // redirect to display modified entry
        return redirect(route('entry.show', ['entry' => $entry->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Entry $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entry $entry)
    {
        // TODO: implement destroy()
        return "destroy entry $entry->id placeholder";
    }
}
