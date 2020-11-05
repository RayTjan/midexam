<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Habitat;
use App\Models\User;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animal.animal', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $habitats = Habitat::all();
        return view( 'animal.addAnimal',compact('users','habitats'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  

        Animal::create([
            'name' => $request->name,
            'family' => $request->family,
            'diet' => $request->diet,
            'quantity' => $request->quantity,
            'caretaker' => $request->caretaker,
            'habitat' => $request->habitat,
            'description' => $request->description,
            'arrival_date' => $request->arrival_date,
            'image' => $imageName,
        ]);

        $request->image->move(public_path('images'), $imageName); 

        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {   
        $users = User::all();
        $habitats = Habitat::all();
        return view('animal.editAnimal',compact('animal','users','habitats'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
      
            $imageName = time().'.'.$request->image->extension();  
    
            $animal->update([
                'name' => $request->name,
                'family' => $request->family,
                'diet' => $request->diet,
                'quantity' => $request->quantity,
                'caretaker' => $request->caretaker,
                'habitat' => $request->habitat,
                'description' => $request->description,
                'arrival_date' => $request->arrival_date,
                'image' => $imageName,
            ]);
            $request->image->move(public_path('images'), $imageName);
        }
        else{
            $animal->update([
                'name' => $request->name,
                'family' => $request->family,
                'diet' => $request->diet,
                'quantity' => $request->quantity,
                'caretaker' => $request->caretaker,
                'habitat' => $request->habitat,
                'description' => $request->description,
                'arrival_date' => $request->arrival_date,
                'image' => $animal->image,
            ]);
        }

        // $animal->update($request->all());
        return redirect()->route('animal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()->back();
    }
}
