<?php

namespace Database\DbInterfaces;

use Generator;

interface ResultSetInterface
{
    public function fetch($className) : Generator;
}