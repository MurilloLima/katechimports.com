<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentsRequest;
use App\Models\Departments;

class DepartmentController extends Controller
{

    private $department;

    public function __construct(Departments $department)
    {
        $this->department =  $department;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->department->orderby('created_at', 'desc')->paginate();
        return view('admin.pages.department.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departments::all();
        return view('admin.pages.department.create', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentsRequest $request)
    {

        $this->department->create([
            'name' => $request->name,
            'status' => $request->status,
            'slug' => str_slug($request->name),
        ]);
        return redirect()->back()->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'value' => 'required'
        ]);
        $data = $this->department->where('name', 'LIKE', '%' . $request->value . '%')->paginate();
        return view('admin.pages.department.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->department->find($id);
        return view('admin.pages.department.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentsRequest $request, $id)
    {
        $data = $this->department->find($id);

        $data->update([
            'name' => $request->name,
            'status' => $request->status,
            'slug' => str_slug($request->name),
        ]);
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
        $this->department->destroy($id);
        return redirect()->back()->with('success', 'Deletado com sucesso!');
    }
}
