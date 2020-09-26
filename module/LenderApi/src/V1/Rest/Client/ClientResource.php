<?php
namespace LenderApi\V1\Rest\Client;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\ApiTools\Rest\AbstractResourceListener;

class ClientResource extends AbstractResourceListener
{

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return new ApiProblem(405, 'The GET method has not been defined for individual resources');
    }


    public function fetchAll($params = [])
    {
        $clients = $this->grabAllClients();

        return $clients;
    }

    private function grabAllClients()
    {
        return [
            new ClientEntity(1, 'ABC Lending'),
            new ClientEntity(2, "Bob's Legit Lending"),
            new ClientEntity(3, "Grumpy Lending"),
        ];
    }
}
