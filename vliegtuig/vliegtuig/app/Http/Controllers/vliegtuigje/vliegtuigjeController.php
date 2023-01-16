<?php
namespace App\Http\Controllers\vliegtuigje;

use App\Models\Vliegtuigje;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class vliegtuigjeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vliegtuigjes = Vliegtuigje::all();

        return view('vliegtuig.index')->with('vliegtuigjes',$vliegtuigjes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vliegtuig.create');
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
            'naam' => 'required',
            'stoelen' => 'required',
            'maatschappij' => 'required',
            'type' => 'required',
            'piloot' => 'required', 
        ]);

        $Vliegtuigjes = new Vliegtuigje;
        $Vliegtuigjes->naam = $request->input('naam');
        $Vliegtuigjes->stoelen = $request->input('stoelen');
        $Vliegtuigjes->maatschappij = $request->input('maatschappij');
        $Vliegtuigjes->type = $request->input('type');
        $Vliegtuigjes->piloot = $request->input('piloot');
        $Vliegtuigjes->save();
        return redirect('/vliegtuig')->with("success"," nieuw vliegtuig toegevoegd...");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vliegtuigjes = Vliegtuigje::find($id);
        return view('vliegtuig.show')->with('vliegtuigjes',$vliegtuigjes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vliegtuigjes = Vliegtuigje::find($id);
        return view('vliegtuig.edit')->with('vliegtuigjes', $vliegtuigjes);
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
            'naam' => 'required',
            'stoelen' => 'required',
            'maatschappij' => 'required',
            'type' => 'required',
            'piloot' => 'required',  
        ]);
        $vliegtuigje = Vliegtuigje::find($id);
        $vliegtuigje->naam = $request->input('naam');
        $vliegtuigje->stoelen = $request->input('stoelen');
        $vliegtuigje->maatschappij = $request->input('maatschappij');
        $vliegtuigje->type = $request->input('type');
        $vliegtuigje->piloot = $request->input('piloot');
        $vliegtuigje->save();
        return redirect('/vliegtuig')->with("success", "vliegtuig is bewerkt!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $vliegtuigjes = Vliegtuigje::find($id);
       $vliegtuigjes->delete();
       return redirect('/vliegtuig')->with("success"," weg ermee");
    }
}
