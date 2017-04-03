<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\Request;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests\AdminCategoriesRequest;
use Cache;

class CategoriesController extends Controller
{
    private $categories;

    public function __construct(CategoryRepository $repository)
    {
        $this->categories = $repository;
    }

    public function index()
    {
        $currentPage = \Request::get('page');
        $expiration = 1;
        $key = 'categoria_' . $currentPage;

        $categorias = Cache::remember($key, $expiration, function () {
            return $categorias = $this->categories->paginate(5);
        });


        return view("admin.categories.index", compact('categorias'));
    }

    public function create()
    {
        return view("admin.categories.create");
    }

    public function store(AdminCategoriesRequest $request)
    {
        $data = $request->all();

        $this->categories->create($data);

        return redirect()->route('admin.categories.index');
    }

    public function edit($id)
    {
        $categorias = $this->categories->find($id);

        return view('admin.categories.edit', compact('categorias'));
    }

    public function update(AdminCategoriesRequest $request, $id)
    {
        $data = $request->all();

        $this->categories->update($data,$id);
        return redirect()->route('admin.categories.index');
    }
}
