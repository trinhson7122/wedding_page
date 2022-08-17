<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::query()->orderBy('id', 'DESC')->with('account')->paginate(6);
        return view('admin.manage.checkout', [
            'carts' => $carts,
        ]);
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
     * @param  \App\Http\Requests\StoreCartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCartRequest $request)
    {
        $obj = new Cart();
        $obj->fill($request->validated());
        $obj->save();
        $arr = [
            'status' => 'success',
            'message' => 'Thêm báo giá cho khách hàng thành công',
        ];
        return Response($arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        $CartDetails = CartDetail::query()->where('id_cart', '=', $cart->id)->with('product')->get();
        $types = Type::query()->get();
        $categories = Category::query()->get();
        $products = Product::query()->get();
        //dd($CartDetails);
        return view('admin.cart.view', [
            'cartDetails' => $CartDetails,
            'types' => $types,
            'categories' => $categories,
            'products' => $products,
            'cart' => $cart,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCartRequest  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->deleteRelated();
        return Response([
            'status' => 'success',
            'message' => 'Xóa báo giá thành công',
        ]);
    }
}
