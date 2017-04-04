<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientsRequest;
use CodeDelivery\Http\Requests\Request;
use CodeDelivery\Repositories\CategoryRepository;
use CodeDelivery\Http\Requests\AdminCategoriesRequest;
use Cache;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Services\ClientsService;

class ClientsController extends Controller
{
    private $clients;
    private $ClientsService;

    public function __construct(ClientRepository $repository,ClientsService $ClientsService)
    {
        $this->clients = $repository;
        $this->ClientsService = $ClientsService;
    }

    public function index()
    {
        
        $clients = $this->clients->paginate(5);

        return view("admin.clients.index", compact('clients'));
    }

    public function create()
    {
        return view("admin.clients.create");
    }

    public function store(AdminClientsRequest $request)
    {
        $data = $request->all();

        $this->ClientsService->create($data);

        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $clients= $this->clients->find($id);

        return view('admin.clients.edit', compact('clients'));
    }

    public function update(AdminClientsRequest $request, $id)
    {
        $data = $request->all();

        $this->ClientsService->update($data,$id);
        return redirect()->route('admin.clients.index');
    }
}
