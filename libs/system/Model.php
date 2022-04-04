<?php

namespace libs\system;

class Model
{
    protected $entitieManager;
    public function __construct()
    {
        require_once "bootstrap.php";
        $this->entitieManager = $entityManager;
    }
}
