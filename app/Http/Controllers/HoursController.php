<?php

namespace Vanguard\Http\Controllers;

use Illuminate\Http\Request;

use Vanguard\Http\Requests;
use Vanguard\Http\Requests\Createhour;
use Vanguard\Http\Requests\Updatehour;
use Vanguard\Hour;

class HoursController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('session.database', ['only' => ['sessions', 'invalidateSession']]);
    }
    public function index(Request $request)
    {
        $hour = Hour::orderBy('id','asc')->get();
        return view('hour.index', compact('hour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edit = false;
        return view('hour.create', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Createhour $request)
    {
        $hour = Hour::create($request->all());
        if ( $hour ) {
                return redirect()->route('hour.index')
                ->withSuccess(trans('app.store_hour'));
                
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
        $hour = Hour::find($id);
        return view('hour.create', compact('edit', 'hour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Updatehour $request, $id)
    {
        $hour = Hour::find($id)->update($request->all());
        if ( $hour ) {
                return redirect()->route('hour.index', compact('hour'))->withSuccess(trans('app.update_hour'));
                
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
        $deleterecord = Hour::find($id);
        try {
        $deleterecord->delete();
        return redirect()->route('hour.index')
            ->withSuccess(trans('app.delete_hour'));
        } catch (\Illuminate\Database\QueryException $e) {
            if($e->getCode() === '23000') {
            return back()
            ->withErrors(trans('app.cant_delete'));
            }
        }
    }
}
