<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Http\Requests\AgamaStoreRequest;
use App\Http\Requests\AgamaUpdateRequest;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $agamas = Agama::latest()->paginate(5);
        return view('agamas.index', compact('agamas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('agamas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgamaStoreRequest $request): RedirectResponse
    {
        Agama::create($request->validated());
        return redirect()->route('agamas.index')->with('success', 'Data agama berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama): View
    {
        return view('agamas.edit', compact('agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgamaUpdateRequest $request, Agama $agama): RedirectResponse
    {
        $agama->update($request->validated());
        return redirect()->route('agamas.index')->with('success', 'Data agama berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama): RedirectResponse
    {
        $agama->delete();
        return redirect()->route('agamas.index')->with('success', 'Data agama berhasil dihapus!');
    }
}
