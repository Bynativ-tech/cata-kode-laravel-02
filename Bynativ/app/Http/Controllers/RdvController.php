<?php

namespace App\Http\Controllers;

use App\Http\Resources\RdvResource;
use App\Models\Rdv as ModelsRdv;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\rdv;
use Illuminate\Support\Facades\DB;


class RdvController extends Controller
{
    public function create() //Request $req)
    {

        return view('rdvCreate');
    }

    public function show($rdv)
    {
        return $rdv;
    }
    public function index()
    {
        $rdvs = RdvResource::collection(rdv::all());
        //        return $rdvs;
        return view('rdv', compact('rdvs'));
    }
    public function lastRdv()
    {
        $test = rdv::orderBy('id', 'desc')->first();

        $rdv = $test->toArray();

        $rdv = $test->toJson();
        return view('rdvLast', compact('rdv'));
    }
    public function rdvCreated()
    {

        return view('rdvCreated');
    }

    public function store(Request $request)
    {

        // return $request->telephone;
        $request->validate([
            'nom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|numeric',
            'date' => 'date_format:Y-m-d',
            'heure' => 'date_format:H:i'
        ]);

        $rdv = new Rdv();
        $rdv->nom = $request->nom;
        $rdv->telephone = $request->telephone;
        $rdv->email = $request->email;
        $rdv->date = $request->date;
        $rdv->heure = $request->heure;
        $rdv->message = $request->message;

        $rdv->save();
        return redirect('/rdv/created');
    }
}
