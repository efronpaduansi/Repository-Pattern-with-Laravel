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
}