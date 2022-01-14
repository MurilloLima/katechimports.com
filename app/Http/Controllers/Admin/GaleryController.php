<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriaRequest;
use App\Models\Galery;
use Intervention\Image\Facades\Image as Image;

class GaleryController extends Controller
{
    private $galery;

    public function __construct(Galery $galery)
    {
        $this->galery =  $galery;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_id)
    {
        $data = $this->galery->orderby('created_at', 'desc')->where('product_id', $product_id)->paginate();
        return view('admin.pages.product.galery.index', compact('data', 'product_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.product.galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GaleriaRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            
            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image')->extension();
            $nameFile = "{$name}.{$extension}";
            
            $upload = $request->image->storeAs('products', $nameFile);
           
            $data['image'] = $nameFile;
            
            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $this->galery->create($data);
        return back()->with('success', 'Cadastrado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->galery->destroy($id);
        alert()->success('Sucesso', 'Image deletada!');
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
