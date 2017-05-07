<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests\AdminClientsRequest;
use CodeDelivery\Http\Requests\Request;
use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Services\ClientService;

class ClientsController extends Controller
{
    private $clients;
    private $clientService;

    public function __construct(ClientRepository $repository,ClientService $clientService)
    {
        $this->clients = $repository;
        $this->clientService = $clientService;
    }

    public function index()
    {

        $client = $this->clients->paginate(5);

        return view("admin.clients.index", compact('client'));
    }

    public function create()
    {
        return view("admin.clients.create");
    }

    public function store(AdminClientsRequest $request)
    {
        $data = $request->all();
        $this->clients->create($data);

        return redirect()->route('admin.clients.index');
    }

    public function edit($id)
    {
        $client = $this->clients->find($id);

        return view('admin.clients.edit', compact('client'));
    }

    public function update(AdminClientsRequest $request, $id)
    {
        $data = $request->all();
        $this->clientService->update($data, $id);

        return redirect()->route('admin.clients.index');
    }
}
