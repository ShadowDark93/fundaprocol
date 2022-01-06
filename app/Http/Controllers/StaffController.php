<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Class StaffController
 * @package App\Http\Controllers
 */
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::paginate();

        return view('staff.index', compact('staff'))
            ->with('i', (request()->input('page', 1) - 1) * $staff->perPage());
    }

    public function activar($id)
    {
        $staff = Staff::find($id);

        if (isset($staff)) {
            $staff->Estado = 1;
            $staff->save();

            return redirect()->route('staff.index')
                ->with('success', 'Administrativo actualizado correctamente.');

        }
    }

    public function desactivar($id)
    {
        $staff = Staff::find($id);

        if (isset($staff)) {
            $staff->Estado = 0;
            $staff->save();

            return redirect()->route('staff.index')
                ->with('success', 'Administrativo actualizado correctamente.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = new Staff();
        return view('staff.create', compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Staff::$rules);

        $staff = new Staff();

        $staff->Nombres = $request->get('Nombres');
        $staff->Apellidos = $request->get('Apellidos');
        $staff->Cargo = $request->get('Cargo');
        $staff->Telefono = $request->get('Telefono');

        if ($request->hasFile('Foto')) {
            $file = $request->file('Foto');
            $destinationPath = 'img/staff/';
            $fileName = Str::slug($staff->Nombres . '-' . $staff->Apellidos) . '.png';
            $uploadSuccess = $request->file('Foto')->move($destinationPath, $fileName);
            $staff->Foto = $destinationPath . $fileName;
        } else{
            $staff->Foto ="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/100/000000/external-user-interface-kiranshastry-solid-kiranshastry-1.png";
        }

        $staff->save();

        return redirect()->route('staff.index')
            ->with('success', 'Staff created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::find($id);

        return view('staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = Staff::find($id);

        return view('staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        request()->validate(Staff::$rules);

        $staff = Staff::find($staff->id);

        if (isset($staff)) {
            $staff->Nombres = $request->get('Nombres');
            $staff->Apellidos = $request->get('Apellidos');
            $staff->Cargo = $request->get('Cargo');
            $staff->Telefono = $request->get('Telefono');

            if ($request->hasFile('Foto')) {
                $file = $request->file('Foto');
                $destinationPath = 'img/staff/';
                $fileName = Str::slug($staff->Nombres . '-' . $staff->Apellidos) . '.png';
                $uploadSuccess = $request->file('Foto')->move($destinationPath, $fileName);
                $staff->Foto = $destinationPath . $fileName;
            }

            $staff->save();

            return redirect()->route('staff.index')
                ->with('success', 'Administrativo acutalizado correctamente');
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $staff = Staff::find($id)->delete();

        return redirect()->route('staff.index')
            ->with('success', 'Staff deleted successfully');

   }
}