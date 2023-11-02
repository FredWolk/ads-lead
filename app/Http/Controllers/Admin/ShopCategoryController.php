<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Shop\StoreShopCategoryRequest;
use App\Http\Requests\Shop\UpdateShopCategoryRequest;
use App\Models\ShopCategory;

class ShopCategoryController extends Controller
{
    public function index()
    {
        $category = ShopCategory::all();
        return view('admin.shop-category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.shop-category.create');
    }
    public function store(StoreShopCategoryRequest $request)
    {
        $data = $request->validated();
        $category = ShopCategory::create($data);
        return redirect()->route('category-shop.show', $category->id);
    }

    public function show(ShopCategory $category_shop)
    {
        return view('admin.shop-category.show', compact('category_shop'));
    }

    public function edit(ShopCategory $category_shop)
    {
        return view('admin.shop-category.edit', compact('category_shop'));
    }

    public function update(UpdateShopCategoryRequest $request, ShopCategory $category_shop)
    {
        $data = $request->validated();
        $category_shop->update($data);
        return redirect()->route('category-shop.show', $category_shop->id);
    }

    public function destroy(ShopCategory $category_shop)
    {
        $category_shop->delete();
        return redirect()->route('category-shop.index');
    }
}
