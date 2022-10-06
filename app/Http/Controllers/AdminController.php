<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Staff;
use App\Models\Supplier;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adminn = Admin::all();
        return view('admin', ['adminn' => $adminn, 'layout' => 'index']);
    }

    // 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// public function client()
    // {
    //     $client = Client::all();
    //     return view('_dash-client', ['client' => $client, 'layout' => 'client']);
    // }

    // public function supplier()
    // {
    //     $supplier = Supplier::all();
    //     return view('_dash-supplier', ['supplier' => $supplier, 'layout' => 'supplier']);
    // }

    // public function staff()
    // {
    //     $staff = Staff::all();
    //     return view('_dash-staff', ['staff' => $staff, 'layout' => 'staff']);
    // }

    // public function sale()
    // {
    //     $sale = Sale::all();
    //     return view('_dash-sales', ['sale' => $sale, 'layout' => 'sale']);
    // }

    // public function product()
    // {
    //     $product = Product::all();
    //     return view('_dash-products', ['product' => $product, 'layout' => 'product']);
    // }