<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use App\Http\Requests\People\PeopleRquest;
use App\Http\Resources\People\PeopleResource;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::orderBy('id', 'desc')->paginate(10);

        return view('pages.table_list')
            ->with([
                'peoples' => $peoples,
             ]);
    }

    public function count()
    {
        $peoples = People::count();

        return view('dashboard')
                ->with([
                    'peoples' => $peoples,
                ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\People\PeopleRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeopleRequest $request)
    {
        try {

            People::create($request->validated());

        } catch (Exception $e) {

            return $e;
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(PeopleRequest $request, People $people)
    {
        try { 

            $people->update($request->validated());


        } catch (Exception $e) {

            return $e;

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        try { 

            $people->delete();


        } catch (Exception $e) {

            return $e;

        }
    }
}