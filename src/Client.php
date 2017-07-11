<?php

namespace GamingSolved\PaperspaceApiClient;

class Client
{

    public function __construct(string $apiVersion)
    {
        return new Version_0_1\Client();
    }

}
