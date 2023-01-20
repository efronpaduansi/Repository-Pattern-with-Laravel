<?php
namespace App\Repository;

interface RepositoryInterface
{
    public function index();
    public function store($data);
    public function update($data, $id);
    public function destroy($id);
}