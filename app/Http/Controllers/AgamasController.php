<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AgamasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $pagination = 3;
        if ($request->search) {
            // Menampilkan pencarian data
            $agamas = Agama::select('id', 'nama')->where('nama', 'LIKE', '%' . $request->search . '%')->paginate($pagination)->withQueryString();
        } else {
            // Menampilkan semua data
            $agamas = Agama::select('id', 'nama')->latest()->paginate($pagination);
        }
        return view('agamas.index', compact('agamas'))->with('i', ($request->input('page', 1) - 1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return redirect('/agamas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agama $agama)
    {
        // echo "hay";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agama $agama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Agama $agama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agama $agama)
    {
        //
    }
}
