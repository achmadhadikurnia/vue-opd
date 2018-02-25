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
 * The VueOpdController class.
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdController extends Controller
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
        if (request()->has('sort')) {
            list($sortCol, $sortDir) = explode('|', request()->sort);

            $query = $this->vue_opd->orderBy($sortCol, $sortDir);
        } else {
            $query = $this->vue_opd->orderBy('id', 'asc');
        }

        if ($request->exists('filter')) {
            $query->where(function($q) use($request) {
                $value = "%{$request->filter}%";
                $q->where('id', 'like', $value)
                    ->orWhere('kunker', 'like', $value)
                    ->orWhere('name', 'like', $value)
                    ->orWhere('kunker_sinjab', 'like', $value)
                    ->orWhere('kunker_simral', 'like', $value)
                    ->orWhere('levelunker', 'like', $value)
                    ->orWhere('njab', 'like', $value)
                    ->orWhere('npej', 'like', $value);
            });
        }

        $perPage = request()->has('per_page') ? (int) request()->per_page : null;
        $response = $query->paginate($perPage);

        return response()->json($response)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $vue_opd = $this->vue_opd;

        if ($id == null) {
            $vue_opd->id = null;
            $vue_opd->kunker = null;
            $vue_opd->name = null;
            $vue_opd->kunker_sinjab = null;
            $vue_opd->kunker_simral = null;
            $vue_opd->levelunker = 1;
            $vue_opd->njab = null;
            $vue_opd->npej = null;
        } else {
            $vue_opd->id = null;
            $vue_opd->kunker = null;
            $vue_opd->name = null;
            $vue_opd->kunker_sinjab = null;
            $vue_opd->kunker_simral = null;
            $vue_opd->levelunker = $this->vue_opd->findOrFail($id)->levelunker + 1;
            $vue_opd->njab = null;
            $vue_opd->npej = null;
        }

        $response['vue_opd'] = $vue_opd;
        $response['status'] = true;

        return response()->json($response);
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
