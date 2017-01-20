<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visit;
use App\User;
use App\Company;


class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('visitors.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id=request()->id;
        $user = User::find($id);
        $companies = Company::all();

        return view('visitors.create',compact('user','companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visit = new Visit;

        $this->validate($request, [
            'user_id' => 'required',
            'company_id' => 'required|min:1',
            'purpose' => 'required',
        ]);

        $visit->user_id = $request->user_id;
        $visit->company_id = $request->company_id;
        $visit->purpose = $request->purpose;

        $visit->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function check(){
        return view('check');
    }

    function semak(Request $i){

        $this->validate($i, [
            'number' => 'required',
            ]);

        $check=User::where('ic',$i->input('number'))
        ->orwhere('passport',$i->input('number'))
        ->get();

        if ($check->isEmpty()){
            // return redirect('Regs');
            return "mirul";
        }
        else{
            foreach ($check as $checkUser) {
                $id=$checkUser->id;
                return redirect()->route('visitors.create',['id'=>$id]);//->with('id',$id);
                //return $id;
            }
            //return redirect('visitors.create',compact('id'));           
        }    
    }
}
