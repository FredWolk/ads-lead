<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\StoreShopRequest;
use App\Http\Requests\Shop\UpdateShopRequest;
use App\Models\Shop;
use App\Models\ShopCategory;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('admin.shop.index', compact('shops'));
    }

    public function create()
    {
        $category = ShopCategory::all();
        return view('admin.shop.create', compact('category'));
    }

    public function store(StoreShopRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image'])){
            $data['image'] = Storage::disk('public')->put('/admin/shop', $data['image']);
        }
        $shop = Shop::create($data);
        return redirect()->route('shop.show', $shop->id);
    }

    public function show(Shop $shop)
    {
        return view('admin.shop.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {
        $category = ShopCategory::all();
        return view('admin.shop.edit', compact('shop', 'category'));
    }

    public function update(UpdateShopRequest $request, Shop $shop)
    {
        $data = $request->validated();
        if (!empty($data['image'])){
            Storage::disk('public')->delete($shop->image);
            $data['image'] = Storage::disk('public')->put('/admin/shop', $data['image']);
        }
        $shop->update($data);
        return redirect()->route('shop.show', $shop->id);
    }

    public function destroy(Shop $shop)
    {
        Storage::disk('public')->delete($shop->image);
        $shop->delete();
        return redirect()->route('shop.index');
    }
}
