<?php

namespace App\Http\Controllers\Naw;

use App\Models\Naw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naws = Naw::all();

        return view('Naws.index')->with('naws',$naws);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Naws.create');
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
            'roepnaam' => 'required',
            'voorvoegsel' => 'required',
            'achternaam' => 'required',
            'voorletters' => 'required',
            'officielenaam' => 'required',
            'postcode' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'toevoeging' => 'required',
            'woonplaats' => 'required',    
        ]);

        $naw = new Naw;
        $naw->roepnaam = $request->input('roepnaam');
        $naw->voorvoegsel = $request->input('voorvoegsel');
        $naw->achternaam = $request->input('achternaam');
        $naw->voorletters = $request->input('voorletters');
        $naw->officielenaam = $request->input('officielenaam');
        $naw->postcode = $request->input('postcode');
        $naw->straat = $request->input('straat');
        $naw->huisnummer = $request->input('huisnummer');
        $naw->toevoeging = $request->input('toevoeging');
        $naw->woonplaats = $request->input('woonplaats');
        $naw->save();
        return redirect('/naws')->with("success","Nieuwe student toegevoegd...");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $naw = Naw::find($id);
        return view('naws.show')->with('naws',$naw);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $naw = Naw::find($id);
        return view('naws.edit')->with('naws',$naw);
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
            'roepnaam' => 'required',
            'voorvoegsel' => 'required',
            'achternaam' => 'required',
            'voorletters' => 'required',
            'officielenaam' => 'required',
            'postcode' => 'required',
            'straat' => 'required',
            'huisnummer' => 'required',
            'toevoeging' => 'required',
            'woonplaats' => 'required',    
        ]);
        $naw = Naw::find($id);
        $naw->roepnaam = $request->input('roepnaam');
        $naw->voorvoegsel = $request->input('voorvoegsel');
        $naw->achternaam = $request->input('achternaam');
        $naw->voorletters = $request->input('voorletters');
        $naw->officielenaam = $request->input('officielenaam');
        $naw->postcode = $request->input('postcode');
        $naw->straat = $request->input('straat');
        $naw->huisnummer = $request->input('huisnummer');
        $naw->toevoeging = $request->input('toevoeging');
        $naw->woonplaats = $request->input('woonplaats');
        $naw->save();
        return redirect('/naws')->with("success","student is bewerkt!");
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
                $naw = Naw::find($id);
                $naw->delete();
                return redirect('/naws')->with("success","Student is verwijderd");
            ?>
            
        } 
        else 
          {
            <?php
                return redirect('/naws')->with("info","verwijderen student is geannuleerd");
            ?>
          }
        
        </script>    
        <?php
    }
}
