<?php
namespace App\Repository;

interface RepositoryInterface
{
    public function index();
    public function store($data);
}