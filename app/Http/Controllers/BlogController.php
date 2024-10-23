<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard\blogs\add');
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
            'topic' => 'required|string|max:255',
            'content' => 'required',
            'author_name' => 'required|string|max:255',
            'featured_image' => 'nullable|image|max:2048',
            'description_image' => 'nullable|image|max:2048',
            'tags' => 'required|string',
        ]);

        // Create a new Blog instance and assign the validated data
        $blog = new BlogModel();
        $blog->topic = $request->topic;
        $blog->content = $request->content;
        $blog->author_name = $request->author_name;
        $blog->tags = $request->tags;

        // Handle file uploads
        if($request->hasFile('featured_image')){
            $file = $request->file('featured_image');
            // dd($file);
            $filename = time().$file->getClientOriginalExtension();
            // dd($filename);
            $file->move(public_path('uploads/featured-images'), $filename);
            // dd($file);
            $blog->featured_image = $filename;
        }

        if($request->hasFile('description_image')){
            $file = $request->file('description_image');
            // dd($file);
            $filename = time().$file->getClientOriginalExtension();
            // dd($filename);
            $file->move(public_path('uploads/description-images'), $filename);
            // dd($file);
            $blog->description_image = $filename;
        }

        // Save the blog post to the database
        $blog->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $blog = BlogModel::all();
        return view('dashboard.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         // Find the category by ID
    $blog = BlogModel::findOrFail($id);

    // Return the edit view with the category data
    return view('dashboard.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'content' => 'required',
            'author_name' => 'required|string|max:255',
            'featured_image' => 'nullable|image|max:2048',
            'description_image' => 'nullable|image|max:2048',
            'tags' => 'required|string',
        ]);

        // Find the category by ID
    $blog = BlogModel::find($id);

    // Check if a new picture was uploaded
    if ($request->hasFile('featured_image')) {
        // Get the current category picture path
        $currentPicturePath = public_path('uploads/featured-images/' . $blog->featured_image);

        // Delete the existing picture if it exists
        if ($blog->featured_image && file_exists($currentPicturePath)) {
            unlink($currentPicturePath);
        }

        // Upload the new picture
        $uploadedFile = $request->file('featured_image');
        $filename = time() . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('uploads/featured-images'), $filename);

        // Update the category picture field with the new filename
        $blog->featured_image = $filename;
    }

    if ($request->hasFile('description_image')) {
        // Get the current category picture path
        $currentPicturePath = public_path('uploads/featured-description-images/' . $blog->description_image);

        // Delete the existing picture if it exists
        if ($blog->description_image && file_exists($currentPicturePath)) {
            unlink($currentPicturePath);
        }

        // Upload the new picture
        $uploadedFile = $request->file('description_image');
        $filename = time() . $uploadedFile->getClientOriginalExtension();
        $uploadedFile->move(public_path('uploads/description-images'), $filename);

        // Update the category picture field with the new filename
        $blog->description_image = $filename;
    }

    // Update the category name
    $blog->topic = $request->input('topic');
    $blog->content = $request->input('content');
    $blog->author_name = $request->input('author_name');
    $blog->tags = $request->input('tags');
    

    // Save the updated category
    $blog->save();

    // Redirect back with a success message
    return redirect()->route('blog.show')->with('success', 'Blog updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = BlogModel::find($id);
        if($blog->featured_image && file_exists(public_path('uploads/featured-images/' . $blog->featured_image)) ){
            unlink(public_path('uploads/featured-images/' . $blog->featured_image));
        }
        if($blog->description_image && file_exists(public_path('uploads/description-images/' . $blog->description_image)) ){
            unlink(public_path('uploads/description-images/' . $blog->description_image));
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog Deleted Successfully');
    }
}
