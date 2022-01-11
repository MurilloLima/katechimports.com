<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Departments;
use App\Models\Slider;
use Illuminate\Support\Str;

class SliderController extends Controller
{
    private $slider;

    public function __construct(Slider $slider)
    {
        $this->slider =  $slider;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->slider->orderby('created_at', 'desc')->where('status', 'Ativo')->paginate();
        return view('admin.pages.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::pluck('name', 'id');
        return view('admin.pages.slider.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image_url')->extension();
            $nameFile = "{$name}.{$extension}";

            $upload = $request->image_url->storeAs('sliders', $nameFile);

            $data['image_url'] = $nameFile;

            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $this->slider->create($data);
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
        $data = $this->slider->find($id);
        $departments = Departments::pluck('name', 'id');
        return view('admin.pages.slider.edit', compact('data', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = $this->slider->find($id);
        $data = $request->all();
        if ($request->hasFile('image_url') && $request->file('image_url')->isValid()) {

            $name = uniqid(date('HisYmd'));
            $extension = $request->file('image_url')->extension();
            $nameFile = "{$name}.{$extension}";

            $upload = $request->image_url->storeAs('sliders', $nameFile);

            $data['image_url'] = $nameFile;

            if (!$upload)
                return redirect()
                    ->back()
                    ->with('error', 'Falha ao fazer upload')
                    ->withInput();
        }
        $slider->update($data);
        return back()->with('success', 'Editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->slider->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
