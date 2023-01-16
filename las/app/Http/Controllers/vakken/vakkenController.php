<?php

namespace App\Http\Controllers\vakken;

use App\Models\vakken;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vakkenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vakken = vakken::all();

        return view('vakken.index')->with('vakken',$vakken);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('vakken.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'vak' => 'required',
        ]);

        $vak = new vakken;
        $vak->vak = $request->input('vak');
        $vak->save();
        return redirect('/vakken')->with("success","Nieuw vak toegevoegd...");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vakken = vakken::find($id);
        return view('vakken.show')->with('vakken',$vakken);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vakken = vakken::find($id);
        return view('vakken.edit')->with('vakken',$vakken);
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
        $this->validate($request,[
            'vak' => 'required',
        ]);
        $vakken = vakken::find($id);
        $vakken->vak = $request->input('vak');
        $vakken->save();
        return redirect('/vakken')->with("success","het vak is bewerkt!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ?>
        <script>
        if (confirm('weet je zeker?')) 
        {
            <?php
                $vakken = vakken::find($id);
                $vakken->delete();
                return redirect('/vakken')->with("success","het vak is verwijderd");
            ?>
            
        } 
        else 
          {
            <?php
                return redirect('/vakken')->with("info","verwijderen vak is geannuleerd");
            ?>
          }
        
        </script>    
        <?php
    }
}
