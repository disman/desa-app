<?php

namespace App\Http\Controllers;

use App\Http\Requests\DusunStoreRequest;
use App\Http\Requests\DusunUpdateRequest;
use App\Models\Dusun;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $dusuns = Dusun::latest()->paginate(5);
        return view('dusuns.index', compact('dusuns'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('dusuns.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DusunStoreRequest $request): RedirectResponse
    {
        Dusun::create($request->validated());
        return redirect()->route('dusuns.index')->with('success', 'Data Dusun berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dusun $dusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dusun $dusun): View
    {
        return view('dusuns.edit', compact('dusun'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DusunUpdateRequest $request, Dusun $dusun): RedirectResponse
    {
        $dusun->update($request->validated());
        return redirect()->route('dusuns.index')->with('success', 'Data Dusun berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dusun $dusun): RedirectResponse
    {
        $dusun->delete();
        return redirect()->route('dusuns.index')->with('success', 'Data Dusun berhasil dihapus!');
    }
}
