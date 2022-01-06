<?php

namespace App\Http\Controllers;

use App\Models\Legale;
use Illuminate\Http\Request;

/**
 * Class LegaleController
 * @package App\Http\Controllers
 */
class LegaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legales = Legale::paginate();

        return view('legale.index', compact('legales'))
            ->with('i', (request()->input('page', 1) - 1) * $legales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $legale = new Legale();
        return view('legale.create', compact('legale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Legale::$rules);

        $legale = Legale::create($request->all());

        return redirect()->route('legales.index')
            ->with('success', 'Legale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $legale = Legale::find($id);

        return view('legale.show', compact('legale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $legale = Legale::find($id);

        return view('legale.edit', compact('legale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Legale $legale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Legale $legale)
    {
        request()->validate(Legale::$rules);

        $legale->update($request->all());

        return redirect()->route('legales.index')
            ->with('success', 'Legale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $legale = Legale::find($id)->delete();

        return redirect()->route('legales.index')
            ->with('success', 'Legale deleted successfully');
    }
}
