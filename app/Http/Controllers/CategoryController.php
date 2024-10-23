<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\MenuModel;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.MenuCategory.add');
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
            'catname' => 'required|string|max:255',
            'category_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $category = new CategoryModel;
        $category->catname = $request->catname;

        if($request->hasFile('category_pic')) {
            // Get the uploaded file
            $file = $request->file('category_pic');
            $filename = time()."Aci Programmer". '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/categories'), $filename);

            // Save the filename in the category model
            $category->category_pic = $filename;
        }

        $category->save();

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = CategoryModel::all();
        return view('dashboard\MenuCategory\show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = CategoryModel::find($id);
        return view('dashboard\MenuCategory\edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'catname' => 'required|string|max:255',
            'category_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the category by its ID
        $category = CategoryModel::find($id);

        // Update the category name
        $category->catname = $request->catname;

        // Check if a new image has been uploaded
        if ($request->hasFile('category_pic')) {

            // Delete the old image if it exists
            if ($category->category_pic && file_exists(public_path('uploads/categories/' . $category->category_pic))) {
                unlink(public_path('uploads/categories/' . $category->category_pic));
            }

            // Upload the new image
            $file = $request->file('category_pic');
            $filename = time()."Aci Programmer". '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/categories'), $filename);

            // Update the category_pic field with the new image filename
            $category->category_pic = $filename;
        }

        // Save the updated category details to the database
        $category->save();

        // Redirect to the index page with a success message
        return redirect()->route('category.show')->with('success', 'Category updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = CategoryModel::find($id);

        // Check if there are any menus associated with this category
        $menusWithCategory = MenuModel::where('category_id', $id)->exists();

        if ($menusWithCategory) {
            return redirect()->back()->with('failure' ,'This category cannot be deleted because it is associated with one or more menu items');
        }

        if ($cat->category_pic && file_exists(public_path('uploads/categories/' . $cat->category_pic))) {
            unlink(public_path('uploads/categories/' . $cat->category_pic));
        }
        $cat->delete();

        return redirect()->back()->with('success', 'Category Deleted successfully!');
    }
}
