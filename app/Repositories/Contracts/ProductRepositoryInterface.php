<?php

namespace App\Repositories\Contracts;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function index(): array;
    public function getById($id): array;
    public function store(array $data): Product;
    public function update(array $data,$id): bool;
    public function delete($id): bool;
}