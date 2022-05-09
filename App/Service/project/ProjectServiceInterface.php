<?php

namespace App\Service\project;

interface ProjectServiceInterface
{
    public function getAll(): \Generator;
}