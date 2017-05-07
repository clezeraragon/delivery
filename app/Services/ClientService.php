<?php
/**
 * Created by PhpStorm.
 * User: klezer
 * Date: 03/04/2017
 * Time: 21:29
 */

namespace CodeDelivery\Services;


use CodeDelivery\Repositories\ClientRepository;
use CodeDelivery\Repositories\UserRepository;

class ClientService
{

    private $clientRepository;
    private $userRepository;

    public function __construct(ClientRepository $clientRepository,UserRepository $userRepository)
    {
        $this->clientRepository = $clientRepository;
        $this->userRepository = $userRepository;
    }

    public function update(array $data,$id)
    {
        $this->clientRepository->update($data,$id);
        $userId = $this->clientRepository->find($id,['user_id'])->user_id;
        $this->userRepository->update($data['user'],$userId);
    }
}