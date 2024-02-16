<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::get();
        return view("categories.categories_list", compact("category"));
    }

    public function addCategory()
    {
        return view('categories.category_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;



        $saveCategory = $category->save();

        if ($saveCategory) {

            return redirect()->route("AddCategory")->with('alert', 'Data berhasil ditambahkan!');
        } else {
            return redirect()->route('formAddCategory')->with("alert", "Data gagal ditambahkan!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $category = Category::findOrFail($id);
        $product = Products::where('category_id', $id)->delete();
        $category->delete();

        return redirect()->back()->with("alert", "Data berhasil dihapus!");
    }
}
