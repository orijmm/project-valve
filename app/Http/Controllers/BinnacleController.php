<?php

namespace Vanguard\Http\Controllers;

use Illuminate\Http\Request;
use Vanguard\Hour;
use Vanguard\Binnacle;
use Vanguard\Parameter;
use Vanguard\Http\Requests;
use Carbon\Carbon;
class BinnacleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('session.database', ['only' => ['sessions', 'invalidateSession']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hours = Hour::all();
        return view('binnacle.index', compact('hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array_para = [];
        foreach ($request->value_parameter as $key => $value) {
            $array_para[$request->parameter_id[$key]] = $value;
            }
        $data = [
            'hour_id' => $request->hour_id,
            'date' => date('Y-m-d',strtotime($request->date)),
            'user_id' => $request->user_id,
            'parameters' => $array_para,
            'out_service' => $request->out_service
        ];
        $binnacle = Binnacle::create($data);
        if ( $binnacle ) {
                return redirect()->route('binnacle.show',$binnacle->id)->withSuccess(trans('app.store_binnacle'));
                
        } else {    
            return back()->withErrors($messages);   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $binnacle = Binnacle::find($id);
        $hours = Hour::all();
        return view('binnacle.show',compact('binnacle','hours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $binnacle = Binnacle::find($id);
        return view('binnacle.edit', compact('binnacle'));
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
        $binnacle = Binnacle::find($id);
        $array_para = [];
            $i = 0;
            foreach ($binnacle->parameters as $key => $value) {
                $array_para[$key] = ($request->out_service == '')? $request->value_parameter[$i] : '';
                $i++;
            }
        $data = [
            'user_id' => $request->user_id,
            'parameters' => $array_para,
            'out_service' => $request->out_service
        ];
        $binnacle->update($data);
        if ( $binnacle ) {
                return redirect()->route('binnacle.show',$binnacle->id)->withSuccess(trans('app.update_binnacle'));
                
        } else {    
            return back()->withErrors($messages);   
        }
    }

    public function chooseDate(Request $request)
    { 
        $datef = date('Y-m-d', strtotime($request->date));
        $hourisempty = Binnacle::where('date',$datef)->where('hour_id',$request->hour_id)->first();
        if ($hourisempty) {
            return back()->withErrors(trans('app.hour_notvaible'));
        } else {
            return redirect()->route('binnacle.form.parameter',[$request->hour_id, $request->date]);
        }        
    }

    public function getFormDiary($hour, $date)
    {
        $parameters = Parameter::all();
        //$dateb = \Carbon::parse($date,);
        $hour1 = Hour::find($hour);
        return view('binnacle.formwizard', compact('hour','hour1','date','parameters'));
    }

    public function buscador()
    {
        $binnacles = Binnacle::orderBy('id','asc')->get();
        return view('binnacle.search', compact('binnacles'));
    }
}
