<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    private $response = [
        'status' => 'error',
        'message' => 'empty',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $obj = new Product();
        $obj->fill($request->validated());
        $obj->save();
        $this->response = [
            'status' => 'success',
            'message' => 'Thêm sản phẩm thành công',
        ];
        return Response($this->response);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
        $product = Product::query()->find($product_id);
        if ($product) {
            $this->response = [
                'status' => 'success',
                'message' => $product,
            ];
        }
        return Response($this->response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $product)
    {
        $obj = Product::query()->find($product);
        if ($obj) {
            $obj->update($request->validated());
            $obj->save();
            $this->response = [
                'status' => 'success',
                'message' => 'Cập nhật sản phẩm thành công',
            ];
        }

        return Response($this->response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if ($product) {
            $product->delete();
            $this->response = [
                'status' => 'success',
                'message' => 'Xóa sản phẩm thành công',
            ];
        }
        return Response($this->response);
        //return redirect()->route('admin.index');
    }
}
