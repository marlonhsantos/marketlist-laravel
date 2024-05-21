<?php

namespace App\Repositories\Database;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;
//suse Illuminate\Database\Eloquent\Collection;
//use Illuminate\Support\Facades\DB;

class ProductRepository implements ProductRepositoryInterface
{
    public function index(): array
    {
        $products = [];
        foreach (Product::all() as $product) {
            $products[] = $product->toArray();
        }
        return $products;
    }

    public function store(array $product): Product
    {
        return Product::create($product);
    }

    public function update(array $product,$id): bool
    {
        return Product::where('id', $id)->update($product);
    }

    public function delete($id): bool
    {
        return Product::destroy($id);
    }

    public function getById($id): array
    {
        $product = Product::find($id);
        return !empty($product) ? $product->toArray() : [];
    }
}