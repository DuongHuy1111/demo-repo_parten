<?php

class ServiceImpl implements ServiceInterface
{
    protected $repository;

    public function getAll()
    {
        $result = $this->repository->getAll();
        return $result;
    }
}