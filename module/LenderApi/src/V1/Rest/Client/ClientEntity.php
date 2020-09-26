<?php
namespace LenderApi\V1\Rest\Client;

class ClientEntity
{
    public int $clientId;
    public string $name;

    public function __construct(int $clientId, string $name)
    {
        $this->clientId = $clientId;
        $this->name     = $name;
    }
}
