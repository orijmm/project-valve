<?php

namespace Vanguard\Http\Controllers;

use Illuminate\Http\Request;

use Vanguard\Http\Requests;
use Vanguard\Parameter;
use Vanguard\Unit;
use Vanguard\Classification;
use Vanguard\Http\Requests\UpdateParameter;
use Vanguard\Http\Requests\CreateParameter;

class ParameterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('session.database', ['only' => ['sessions', 'invalidateSession']]);
    }
    public function index(Request $request)
    {
        $parameter = Parameter::orderBy('id')->get();
        if ( $request->ajax() ) {
            if (count($parameter)) {
                return response()->json([
                    'success' => true,
                    'view'    => view('parameter.list', compact('parameter'))->render(),
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => trans('app.no_records_found')
                ]);
            }
        }
        return view('parameter.index', compact('parameter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        $classification = Classification::all()->pluck('tx_name','id');
        $units = Unit::all()->pluck('tx_unit','id');
        return view('parameter.create', compact('edit', 'classification', 'units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateParameter $request)
    {
        $parameter = Parameter::create($request->all());
        if ( $parameter ) {
                return redirect()->route('parameter.index')->withSuccess(trans('app.store_parameter'));
                
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
        $parameter = Parameter::find($id);
        $units = Unit::all()->pluck('tx_unit','id');
        $classification = Classification::all()->pluck('tx_name','id');
        return view('parameter.create', compact('edit', 'parameter', 'classification','units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParameter $request, $id)
    {
        $parameter = Parameter::find($id)->update($request->all());
        if ( $parameter ) {
                return redirect()->route('parameter.index', compact('parameter'))->withSuccess(trans('app.update_parameter'));
                
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
        $deleterecord = Parameter::find($id);
        if ( $deleterecord->delete() ) {
            
            return redirect()->route('parameter.index')
            ->withSuccess(trans('app.delete_parameter'));
        } else {
            return back()
            ->withSuccess(trans('app.cant_delete'));
        }
    }
}
