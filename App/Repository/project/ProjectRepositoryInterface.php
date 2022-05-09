<?php

namespace App\Repository\project;

interface ProjectRepositoryInterface
{
    public function findAll(): \Generator;
}