<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Places;

class PlacesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() {
//        return $results = app('db')->select("SELECT * FROM users");
        return $user = Places::all();
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse|string
     */
    public function show($id) {

        return $flight = Places::find($id);
    }

}
