<?php
namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;
class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view ('patients.index')->with('patients',$patients);
    
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return view('patients.create');


        $input = $request->all();
         Patient::create($input);
          return redirect('home')->with('flash_message', 'patient Addedd!');
    
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
        $patient = Patient::find($id);
        return view('patients.show')->with('patient', $patient);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
         $patient = Patient::find($id);
         return view('patients.edit')->with('patient', $patient);

        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Patient $patient)
    // {
    //     //
    //     $patient = Patient::find($id);
    //     $input = $request->all();
    //     $patient->update($input);
    //     return redirect('patient')->with('flash_message', 'Patient Updated!');
 
 
    // }
    {
        $request->validate([
            'name' => 'required',
            'Description' => 'required',
        ]);
        $patient->update($request->all());
        return redirect()->route('patients.index')
                        ->with('success','patient updated successfully');

    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('patients')->with('flash_message', 'Patient Deleted!');
    }
}
