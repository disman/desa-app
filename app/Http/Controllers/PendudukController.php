<?php

namespace App\Http\Controllers;

use App\Http\Requests\PendudukStoreRequest;
use App\Http\Requests\PendudukUpdateRequest;
use App\Models\Penduduk;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $penduduks = Penduduk::latest()->paginate(5);
        return view('penduduks.index', compact('penduduks'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('penduduks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PendudukStoreRequest $request): RedirectResponse
    {
        Penduduk::create($request->validated());
        return redirect()->route('penduduks.index')
            ->with('success', 'Data penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penduduk $penduduk): View
    {
        return view('penduduks.show', compact('penduduk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penduduk $penduduk): View
    {
        return view('penduduks.edit', compact('penduduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PendudukUpdateRequest $request, Penduduk $penduduk): RedirectResponse
    {
        $penduduk->update($request->validated());
        return redirect()->route('penduduks.index')
            ->with('success', 'Data penduduk berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penduduk $penduduk): RedirectResponse
    {
        $penduduk->delete();
        return redirect()->route('penduduks.index')
            ->with('success', 'Data penduduk berhasil dihapus');
    }
}
