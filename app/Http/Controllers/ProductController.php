<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public readonly Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        $products = $this->product->all();

        return view(view:'products', data:['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view:'product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $create = $this->product->create([
            'nomeproduto' => $request->input(key:'nomeproduto'),
            'preco' => $request->input(key:'preco'),
            'descricao' => $request->input(key:'descricao'),
            'imagem' => $request->input(key:'imagem'),
        ]);


        if ($create) {
            return redirect()->back()->with('message', 'Cadastrado com sucesso!');
        }
    
        return redirect()->back()->with('message', 'Erro no cadastro');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view(view:'product_edit', data:['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->product->where('id', $id)->update($request->except(['_token', '_method']));
    
        if ($updated) {
            return redirect()->back()->with('message', 'Sucesso no update');
        }
    
        return redirect()->back()->with('message', 'Erro no update');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
