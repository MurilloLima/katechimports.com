<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Departments;
use App\Models\Helpers\Formated;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    private $formated;

    public function __construct(Product $product, Formated $formated)
    {
        $this->product =  $product;
        $this->formated =  $formated;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->product->orderby('created_at', 'desc')->where('status', 'Ativo')->paginate();
        return view('admin.pages.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::pluck('name', 'id');
        return view('admin.pages.product.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image_url')->extension();
            $nameFile = "{$name}.{$extension}";

            $upload = $request->image_url->storeAs('products', $nameFile);

            $data['image_url'] = $nameFile;

            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $data['price'] = $this->formated->moneyFormated($request->price);
        $data['cost_price'] = $this->formated->moneyFormated($request->cost_price);
        $data['slug'] = str_slug($request->name);
        $this->product->create($data);
        return back()->with('success', 'Cadastrado com sucesso!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->product->find($id);
        $departments = Departments::pluck('name', 'id');
        return view('admin.pages.product.edit', compact('data', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = $this->product->find($id);
        $data = $request->all();
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image_url')->extension();
            $nameFile = "{$name}.{$extension}";

            $upload = $request->image_url->storeAs('products', $nameFile);

            $data['image_url'] = $nameFile;

            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $data['price'] = $this->formated->moneyFormated($request->price);
        $data['cost_price'] = $this->formated->moneyFormated($request->cost_price);
        $data['slug'] = str_slug($request->name);
        $product->update($data); // Finally, save the record.
        return redirect()->back()->with('success', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->product->destroy($id);
        alert()->success('Sucesso', 'Producto deletada!');
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
