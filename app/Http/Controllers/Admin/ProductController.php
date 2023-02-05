<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('admin.items', compact('items'));
    }

    public function create()
    {
        return view('admin.create-item');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => ['required', 'max:50', 'string'],
            'item_desc' => ['required', 'max:500', 'string'],
            'price' => ['required', 'integer', 'min: 0'],
            'image' => ['required', 'mimes:jpeg, jpg, png']
        ]);

        $imageName = str_replace(' ', '-', $request->item_name);
        $imagePath = $request->file('picture')->store('/public/images/items/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        Item::create([
            'item_name' => $request->item_name,
            'item_desc' => $request->item_desc,
            'price' => $request->price,
            'image' => $imagePath
        ]);

        return redirect('admin/items');
    }

    public function createUpdate()
    {
        return view('admin.update-item');
    }

    public function update(Request $request)
    {
        $request->validate([
            'item_id' => ['required', 'exists:items'],
            'item_name' => ['required', 'max:50', 'string'],
            'item_desc' => ['required', 'max:500', 'string'],
            'price' => ['required', 'integer', 'min: 0'],
            'image' => ['required', 'mimes:jpeg, jpg, png']
        ]);

        $imageName = str_replace(' ', '-', $request->item_name);
        $imagePath = $request->file('picture')->store('/public/images/items/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);

        $item = Item::find($request->item_id);
        $item->item_name = $request->item_name;
        $item->item_desc = $request->item_desc;
        $item->price = $request->price;
        $item->image = $imagePath;
        $item->save();

        return redirect('admin/items');
    }

    public function delete($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect('admin/items');
    }
}
