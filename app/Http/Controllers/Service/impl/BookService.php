<?php

class BookService extends ServiceImpl implements BookServiceInterface
{
    public function __construct(BookServiceInterface $bookService)
    {
        $this->repository = $bookService;
    }
}