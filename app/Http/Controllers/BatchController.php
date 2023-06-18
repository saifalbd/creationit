<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batches = Batch::query()->paginate();

        return view('Admin.pages.batch.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Admin.pages.batch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD


        $request->validate([
            'title'=>['required','string'],
            'saturday'=>['nullable','string'],
            'sunday'=>['nullable','string'],
            'monday'=>['nullable','string'],
            'tuesday'=>['nullable','string'],
            'wednesday'=>['nullable','string'],
            'thursday'=>['nullable','string'],
            'friday'=>['nullable','string'],
        ]);


        Batch::create($request->toArray());

        return redirect()->route('batch.index');
=======
        $request->validate([
            'name' => 'required|string',
        ]);
>>>>>>> ba556d6ef9961579c3fa8333781bf28bbc2753e5
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Batch $batch)
    {
        return view('Admin.pages.batch.view',compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Batch $batch)
    {
        return view('Admin.pages.batch.edit',compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Batch $batch)
    {
        $request->validate([
            'title'=>['required','string'],
            'saturday'=>['nullable','string'],
            'sunday'=>['nullable','string'],
            'monday'=>['nullable','string'],
            'tuesday'=>['nullable','string'],
            'wednesday'=>['nullable','string'],
            'thursday'=>['nullable','string'],
            'friday'=>['nullable','string'],
        ]);

        $batch->update($request->toArray());

        return redirect()->route('batch.index');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batch.index');
    }
}
