<?php

namespace App\Http\Controllers;

use App\Models\ChiefModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class chiefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard\chief\add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'chief_name' => 'required|string|max:255',
            'nationality' => 'string',
            'speciality' => 'required|string',
            'experience' => 'integer|min:0|max:25',
            'chief_picture' => 'image|mimes:jpeg,png,jpg,gif|max:4048',
        ]);
        $picture = "";
        if($request->hasFile('chief_picture'))
        {
            $picture = $request->file('chief_picture');
            $pictureName = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads/chiefs'), $pictureName);
            $picture = 'uploads/chiefs/' . $pictureName;
        }

        $chief = new ChiefModel([
            'chief_name' => $request->input('chief_name'),
            'nationality' => $request->input('nationality'),
            'speciality' => $request->input('speciality'),
            'experience' => $request->input('experience'),
            'chief_picture' => $picture,

        ]);
        $chief->save();
        return redirect()->route('chief.show')->with('success', 'Chief Added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $chiefs = ChiefModel::paginate(10);
        return view('dashboard\chief\show', compact('chiefs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    // Find the chef by ID
    $chief = ChiefModel::find($id);

    if ($chief) {
        // Return the edit form with the chef data
        return view('dashboard.chief.edit', compact('chief'));
    } else {
        return redirect()->back()->with('failure', 'Chef not found.');
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'chief_name' => 'required|string|max:255',
            'nationality' => 'required|string',
            'speciality' => 'required|string',
            'experience' => 'required|integer|min:0',
            'chief_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4048',
        ]);

        if (ChiefModel::findOrFail($id)) {


            $chief = ChiefModel::find($id);

            if ($request->hasFile('chief_picture')) {
                // Delete the old picture if it exists
                if ($chief->chief_picture && file_exists(public_path('uploads/chiefs/') . $chief->chief_picture)) {
                    unlink((public_path('uploads/chiefs/') . $chief->chief_picture));
                }
                $picture = $request->file('chief_picture');
                $pictureName = time() . '.' . $picture->getClientOriginalExtension();
                $picturePath = $picture->move(public_path('uploads/chiefs/'), $pictureName);
                $picture = public_path('uploads/chiefs/') . $pictureName;
            }

            $chief->chief_name = $request->input('chief_name');
            $chief->nationality = $request->input('nationality');
            $chief->speciality = $request->input('speciality');
            $chief->experience = $request->input('experience');
            $chief->save();

            return redirect()->route('chief.show')->with('success', 'Chief updated successfully!');
        } else {
            return redirect()->back()->with('failure', 'Chief not found!');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (ChiefModel::findOrFail($id)) {



            $chief = ChiefModel::findOrFail($id);
            if ($chief->chief_picture && file_exists(public_path('uploads/chiefs/') . $chief->chief_picture)) {
                unlink((public_path('uploads/chiefs/') . $chief->chief_picture));
            }
            $chief->delete();
            return redirect()->route('chief.show')->with('success', 'Chief deleted successfully!');
        } else {
            return redirect()->back()->with('failure', 'Chief not found!');
        }
    }
}
