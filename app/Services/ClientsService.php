<?php
/**
 * Created by PhpStorm.
 * User: kllez
 * Date: 4/4/2017
 * Time: 2:31 PM
 */

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientsService
{
    private $UserRepository;
    private $ClientRepository;

    public function __construct(UserRepository $UserRepository, ClientRepository $ClientRepository)
    {
        $this->UserRepository = $UserRepository;
        $this->ClientRepository = $ClientRepository;
    }

    public function update(array $data, $id)
    {
        $this->ClientRepository->update($data, $id);
        $userId = $this->ClientRepository->find($id, ['user_id'])->user_id;
        $this->UserRepository->update($data['users'], $userId);
    }

    public function create(array $data)
    {
        $data['users']['password'] = bcrypt(123456);
        $user = $this->UserRepository->create($data['users']);

        $data['user_id'] = $user->id;
        $this->ClientRepository->create($data);


    }

}