<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Http\Response;

class ProductController extends Controller
{

    public $productService;
    public $productRepository;

    public function __construct(
        ProductService $service,
        ProductRepositoryInterface $productRepository
    ){
        $this->productService = $service;
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        return $this->productRepository->index();
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request): Response
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'status' => 'sometimes|boolean',
        ]);
        $response = $this->productRepository->store($validated);

        return response($response, Response::HTTP_CREATED);
    }

    public function show($id)
    {
        return $this->productRepository->getById($id); 
        //return view('products.show');
    }

    public function edit($id)
    {
        return view('products.edit');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string',
            'status' => 'sometimes|boolean',
        ]);
        $response = $this->productRepository->update($validated, $id);
        return response('', Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $response = $this->productRepository->delete($id);
        return response('', Response::HTTP_OK);
    }
}