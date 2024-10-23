<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //     $men = MenuModel::with('category')->get();
        //    dd($men);
        //     // dd($men->category);
        $categories = CategoryModel::all();
        return view('dashboard.menu.add')->with('categories', $categories);
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
            'itemname' => 'required|string|max:255',
            'detail' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:4048', // Validate the image file
        ]);

        // Handle the picture upload if a file is provided
        $picturePath = null;
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads/menuitems'), $pictureName);
            $picturePath = 'uploads/menuitems/' . $pictureName; // Store relative path
        }



        // Create a new MenuModel instance and fill it with validated data
        $menuModel = new MenuModel([
            'itemname' => $request->input('itemname'),
            'detail' => $request->input('detail'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'picture' => $picturePath,
        ]);

        // Save the instance to the database
        $menuModel->save();
        return redirect()->back()->with('success', 'Item added successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function trashshow()
    {
        $menuitem = MenuModel::onlyTrashed()->get();
        return view('dashboard.menu.trash')->with('menuitem', $menuitem);
    }

    public function show()
    {
        $menuitem = MenuModel::Paginate(30);
        return view('dashboard.menu.show')->with('menuitem', $menuitem);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the menu item by ID
        if (MenuModel::find($id))
        {
            $menuitem = MenuModel::find($id);

            // Get all categories for dropdown
            $categories = CategoryModel::all();

            // Return the edit form with the menu item and categories
            return view('dashboard.menu.edit')->with(['menuitem' => $menuitem, 'categories' => $categories]);
        } else {
            return redirect()->back()->with('failure', 'Menu item not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the input data
    $request->validate([
        'itemname' => 'required|string|max:255',
        'detail' => 'required|string',
        'price' => 'required|numeric|min:0',
        'category_id' => 'required|string',
        'picture' => 'image|mimes:jpeg,png,jpg,gif|max:4048', // Validate the image file, nullable if no update
    ]);

    // Find the existing menu item by ID
    $menuModel = MenuModel::findOrFail($id);

    $picturepath = $menuModel->picture; // Retain the existing image path

    if ($request->hasFile('picture')) {
        // Delete the old image if it exists
        if ($menuModel->picture && file_exists(public_path($menuModel->picture))) {
            unlink(public_path($menuModel->picture));
        }

        // Upload the new image
        $picture = $request->file('picture');
        $pictureName = time() . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('uploads/menuitems'), $pictureName);
        $picturepath = 'uploads/menuitems/' . $pictureName; // Update the picture path
    }

    // Update the other fields
    $menuModel->itemname = $request->input('itemname');
    $menuModel->detail = $request->input('detail');
    $menuModel->price = $request->input('price');
    $menuModel->category_id = $request->input('category_id');
    $menuModel->picture = $picturepath;
    $menuModel->update();

    return redirect()->back()->with('success', 'Item updated successfully!');
}


    public function restore(string $id)
{
    // Retrieve the soft-deleted item
    $menuitem = MenuModel::withTrashed()->find($id);

    if($menuitem)
    {
        if ($menuitem->restore())
        {
            return redirect()->back()->with('success', 'Item restored successfully!');
        } else {
            return redirect()->back()->with('failure', 'Failed to restore the item.');
        }
    } else {
        return redirect()->back()->with('failure', 'Item not found!');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the menu item by ID
        if (MenuModel::find($id))
        {
            $menuitem = MenuModel::find($id);

            if ($menuitem->delete())
            {

                return redirect()->back()->with('success', 'Item Trashed successfully!');
            }
        } else {
            return redirect()->back()->with('failure', 'Item not found!');
        }

    }

        public function permdeleted(string $id)
        {
            $menuitem = MenuModel::withTrashed()->find($id);

            if ($menuitem) {
                if ($menuitem->forceDelete()) {

                // Delete the picture if it exists
                if ($menuitem->picture && file_exists(public_path($menuitem->picture)))
                {
                    unlink(public_path($menuitem->picture));
                     return redirect()->back()->with('success', 'Item deleted successfully!');
                }
            } else
            {
                return redirect()->back()->with('failure', 'Item not found!');
            }
    }
}
}
