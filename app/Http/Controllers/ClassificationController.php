<?php

namespace Vanguard\Http\Controllers;

use Illuminate\Http\Request;
use Vanguard\Http\Requests;
use Vanguard\Classification;
use Vanguard\Http\Requests\CreateClassification;
use Vanguard\Http\Requests\UpdateClassification;

class ClassificationController extends Controller
{
     
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('session.database', ['only' => ['sessions', 'invalidateSession']]);
    }
    public function index(Request $request)
    {
        $classification = Classification::orderBy('id','asc')->get();
        return view('classification.index', compact('classification'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('classification.create', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClassification $request)
    {
        $classification = Classification::create($request->all());
        if ( $classification ) {
                return redirect()->route('classification.index')
                ->withSuccess(trans('app.store_classification'));
                
        } else {    
            return back()->withErrors($messages);   
        }
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = true;
        $classification = Classification::find($id);
        return view('classification.create', compact('edit', 'classification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassification $request, $id)
    {
        $classification = Classification::find($id)->update($request->all());
        if ( $classification ) {
                return redirect()->route('classification.index', compact('classification'))->withSuccess(trans('app.update_classification'));
        } else {    
            return back()->withErrors($messages);   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleterecord = Classification::find($id);
        try {
        $deleterecord->delete();
        return redirect()->route('classification.index')
            ->withSuccess(trans('app.delete_classification'));
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() === '23000') {
            return back()
            ->withErrors(trans('app.cant_delete'));
            }
        }
    }
}
