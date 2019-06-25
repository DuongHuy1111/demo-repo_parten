<?php

class BookRepository extends RepositoryImpl implements BookRepositoryInterface
{
    public function getModel()
    {
        return \App\Books::class;
    }
}