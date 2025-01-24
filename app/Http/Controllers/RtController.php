<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Http\Requests\RtStoreRequest;
use App\Http\Requests\RtUpdateRequest;

class RtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $rts = Rt::latest()->paginate(5);
        return view('rts.index', compact('rts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('rts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RtStoreRequest $request): RedirectResponse
    {
        Rt::create($request->validated());
        return redirect()->route('rts.index')->with('success', 'Data RT berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rt $rt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rt $rt): View
    {
        return view('rts.edit', compact('rt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RtUpdateRequest $request, Rt $rt): RedirectResponse
    {
        $rt->update($request->validated());
        return redirect()->route('rts.index')->with('success', 'Data RT berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rt $rt): RedirectResponse
    {
        $rt->delete();
        return redirect()->route('rts.index')->with('success', 'Data RT berhasil dihapus!');
    }
}
