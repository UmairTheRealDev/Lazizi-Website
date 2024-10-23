<?php

namespace App\Http\Controllers;

use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\ChiefModel;
use App\Models\MenuModel;
use App\Models\ReservationModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index()
    {
        $onthegril = MenuModel::where('category_id', '2')->latest()->take('4')->get();
        $nonveg = MenuModel::where('category_id', '3')->latest()->take('4')->get();
        $carousol = MenuModel::inRandomOrder()->take(10)->get();
        $cheffs = ChiefModel::inRandomOrder()->take(6)->get();
        $latblog = BlogModel::latest()->take(5)->get();
        return view('website/website')->with([
            'onthegril' => $onthegril,
            'nonveg' => $nonveg,
            'carousol' => $carousol,
            'cheffs' => $cheffs,
            'latblog' => $latblog,
        ]);
    }


    public function temp()
    {
        return view('website.webtemplate');
    }
    public function menu()
    {
        $mitem = MenuModel::all();
        $category = CategoryModel::all();
        return view('website.menu')->with(['mitem' => $mitem, 'category' => $category]);
    }
    public function singlecategory($id)
    {
        $mitem = MenuModel::where('category_id', $id)->get();
        $category = CategoryModel::all();
        return view('website.menu')->with(['mitem' => $mitem, 'category' => $category]);
    }

    public function myreservation($id)
    {
        if (Auth::user()->id != $id) {
            return redirect()->back()->with('error', 'You are not authorized to view these reservations.');
        }
        $reservations = ReservationModel::where('reserved_person_id', $id)->get();
        return view('website\reservation')->with(['reservations' => $reservations]);
    }
    public function aboutus()
    {
        $cheffs = ChiefModel::inRandomOrder()->take(6)->get();
        return view('website.about')->with(['cheffs' => $cheffs]);;
    }
    public function blogdetails($id)
    {
        $blog = BlogModel::find($id);
        $recentblog = BlogModel::latest()->take(5)->get();

    return view('website.blog-details', compact('blog','recentblog'));
    }

    public function blog()
    {
        $blogs = BlogModel::all();

        return view('website\blog', compact('blogs'));

    }


}
