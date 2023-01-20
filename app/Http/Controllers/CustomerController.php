<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CustomersImplement;  

class CustomerController extends Controller
{
    protected $customer;

    public function __construct(CustomersImplement $customer)
    {
        $this->customer = $customer;
    }

    public function get_data()
    {
        $customers = $this->customer->index();
        if(!empty($customers)){
            return view('welcome', compact('customers'));
        }else{
            return $this->responseError('Data tidak ditemukan');
        }
    }

    public function save_data(Request $request)
    {
        $this->customer->store($request->all());
        return response()->json([
            'message' => 'Data berhasil disimpan'
        ]);
    }

    public function update_data(Request $request, $id)
    {
        $customers = $this->customer->update($request, $id);
        return redirect()->back();
    }

    public function delete_data($id)
    {
        $customers = $this->customer->destroy($id);
        return redirect()->back();
    }
}
