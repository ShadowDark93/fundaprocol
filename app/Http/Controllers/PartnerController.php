<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Class PartnerController
 * @package App\Http\Controllers
 */
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate();

        return view('partner.index', compact('partners'))
            ->with('i', (request()->input('page', 1) - 1) * $partners->perPage());
    }

    public function activar($id)
    {
        $partner = Partner::find($id);
        if (isset($partner)) {
            $partner->Estado = 1;
            $partner->save();
            return redirect()->route('partners.index')
                ->with('success', 'Partner se ha actualizado.');

        } else {
            return redirect()->route('partners.index')
                ->with('error', 'No se ha encontrado Partner.');

        }

    }

    public function desactivar($id)
    {
        $partner = Partner::find($id);
        if (isset($partner)) {
            $partner->Estado = 0;
            $partner->save();
            return redirect()->route('partners.index')
                ->with('success', 'Partner se ha actualizado.');

        } else {
            return redirect()->route('partners.index')
                ->with('error', 'No se ha encontrado Partner.');

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partner = new Partner();
        return view('partner.create', compact('partner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Partner::$rules);

        $partner = new Partner();

        $partner->Nombre = $request->get('Nombre');
        $partner->Url = $request->get('Url');
        $partner->Telefono = $request->get('Telefono');
        $partner->Direccion = $request->get('Direccion');

        if ($request->hasFile('Imagen')) {
            $file = $request->file('Imagen');
            $destinationPath = 'img/partners/';
            $fileName = Str::slug($partner->Nombre) . '.png';
            $uploadSuccess = $request->file('Imagen')->move($destinationPath, $fileName);
            $partner->Imagen = $destinationPath . $fileName;
        }

        $partner->save();

        return redirect()->route('partners.index')
            ->with('success', 'Partner created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partner = Partner::find($id);

        return view('partner.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::find($id);

        return view('partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        request()->validate(Partner::$rules);

        $partner = Partner::find($partner->id);

        if (isset($partner)) {
            $partner->Nombre = $request->get('Nombre');
            $partner->Url = $request->get('Url');
            $partner->Telefono = $request->get('Telefono');
            $partner->Direccion = $request->get('Direccion');

            if ($request->hasFile('Imagen')) {
                $file = $request->file('Imagen');
                $destinationPath = 'img/partners/';
                $fileName = Str::slug($partner->Nombre) . '.png';
                $uploadSuccess = $request->file('Imagen')->move($destinationPath, $fileName);
                $partner->Imagen = $destinationPath . $fileName;
            }

            $partner->save();

            return redirect()->route('partners.index')
                ->with('success', 'Partner updated successfully');

        } else {
            return redirect()->route('partners.index')
                ->with('error', 'No se ha encontrado partner');

        }

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $partner = Partner::find($id)->delete();

        return redirect()->route('partners.index')
            ->with('success', 'Partner deleted successfully');

    }
}