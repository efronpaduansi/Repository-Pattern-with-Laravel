<?php

namespace App\Repository;
use App\Models\Customer;

class CustomersImplement implements RepositoryInterface
{
    public function index()
    {
        return Customer::all();
    }

    public function store($data)
    {
        $customer = new Customer();
        $customer->create($data);
    }

    public function update($data, $id)
    {
        $customer = Customer::find($id);
        $customer->name = $data->name;
        $customer->email = $data->email;
        $customer->phone = $data->phone;
        $customer->address = $data->address;
        $customer->update();
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
    }
}