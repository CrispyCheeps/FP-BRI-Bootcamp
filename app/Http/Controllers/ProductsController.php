<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::get();
        if (empty($product)) {
            $product->id(null);
            $product->name("-");
            $product->description("-");
            $product->status("-");
            $product->category_id("-");
            $product->price("-");
            $product->weight("-");
            $product->img_url("-");
        }
        return view("employees.employees_list", compact("product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Products::create($request->all());

        if ($product) {

            return redirect()->route("form/emplyee/list")->with('message', 'Data berhasil ditambahkan!');
        } else {
            return response()->json([
                'status' => '404',
                'response' => 'Not Found',
            ]);
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
        $product = Products::findOrFail($id);

        $product->update($request->all());
        if ($product) {
            return redirect()->back()->with('message', 'Data berhasil di update');
        } else {
            return redirect()->back()->with("alert", "Data gagal diupdate!");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->back()->with("alert", "Data berhasil dihapus!");
    }


    public function employeesAdd()
    {
        return view('employees.employee_add');
    }
}
