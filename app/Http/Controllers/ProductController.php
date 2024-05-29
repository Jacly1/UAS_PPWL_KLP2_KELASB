<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'namaProduk' => 'required|max:255',
            'deskripsi' => 'required',
            'status' => 'required|in:to do,in process,done',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('fail', 'Gagal menambahkan produk baru');
        } else {
            Product::create([
                'nama_produk' => $request->namaProduk,
                'deskripsi' => $request->deskripsi,
                'status' => $request->status,
            ]);

            return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
        }
    }

    public function viewIndex()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }

    public function viewEdit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function edit(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'namaProduk' => 'required|max:255',
            'deskripsi' => 'required',
            'status' => 'required|in:to do,in process,done',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('fail', 'Gagal mengedit produk');
        } else {
            $product = Product::findOrFail($id);
            $product->nama_produk = $request->namaProduk;
            $product->deskripsi = $request->deskripsi;
            $product->status = $request->status;
            $product->update();

            return redirect()->back()->with('success', 'Produk berhasil diubah');
        }
    }
}
