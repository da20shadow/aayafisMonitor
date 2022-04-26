<?php

namespace Database\DbInterfaces;

interface StatementInterface
{
    public function execute(array $params = []) : ResultSetInterface;
}