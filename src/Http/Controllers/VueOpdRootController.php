<?php

namespace Bantenprov\VueOpd\Http\Controllers;

/* Require */
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\BudgetAbsorption\Facades\VueOpdFacade;

/* Models */
use Bantenprov\VueOpd\Models\Bantenprov\VueOpd\VueOpd;

/* Etc */
use Validator;

/**
 * The VueOpdRootController class.
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdRootController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(VueOpd $vue_opd)
    {
        $this->vue_opd = $vue_opd;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        $vue_opd = $this->vue_opd;

        $response['vue_opd'] = $vue_opd;
        $response['status'] = true;

        return response()->json($vue_opd);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VueOpd  $vue_opd
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vue_opd = $this->vue_opd->findOrFail($id);

        $response['vue_opd'] = $vue_opd;
        $response['status'] = true;

        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VueOpd  $vue_opd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vue_opd = $this->vue_opd->findOrFail($id);

        $response['vue_opd'] = $vue_opd;
        $response['status'] = true;

        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VueOpd  $vue_opd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VueOpd  $vue_opd
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vue_opd = $this->vue_opd->findOrFail($id);

        if ($vue_opd->delete()) {
            $response['status'] = true;
        } else {
            $response['status'] = false;
        }

        return json_encode($response);
    }
}
