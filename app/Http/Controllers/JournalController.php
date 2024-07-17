<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use App\Http\Requests\StoreJournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Models\User;
use Exception;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journals = Journal::where('user_id' , auth()->user()->id)->get();
        return view('student.journal.index', compact('journals'));
    }

    public function monitoring()
    {
        $journals = Journal::all();
        return view('admin.journal.index' ,compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJournalRequest $request)
    {
        Journal::create([
            'user_id' => auth()->user()->id,
            'description' => $request->description,
            'character_values' => $request->character_values,
            'date' => $request->date
        ]);

        return redirect()->back()->with('success' , 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJournalRequest $request, Journal $journal)
    {
        try {
            $journal->update([
                'user_id' => auth()->user()->id,
                'description' => $request->description,
                'character_values' => $request->character_values,
                'date' => $request->date
            ]);

            return redirect()->back()->with('success' , 'Data berhasil di perbarui');
        } catch (Exception $th) {
            return redirect()->back()->with('errors' , 'Anda sudah mengisi jurnal di tanggal tersebut');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        $journal->delete();
        return redirect()->back()->with('success' , 'Data berhasil di hapus');
    }
}
