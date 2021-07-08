<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\HistoriaClinicaGeneral;
use App\Models\HistoriaClinicaOdontologica;
use Illuminate\Http\Request;


class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $hisID = User::findOrFail($id);
        $hisGeneral = $hisID->historiaClinicaGeneral;
        $hisOdon = $hisID->historiaClinicaOdontologica;
        $odontograma = $hisID->odontogramas;

        $historia = ['general' => $hisGeneral, 'odontologica' => $hisOdon, 'odontogramas' => $odontograma];

        return view('historiaClinica.show')->with('historia', $historia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
