<?php

namespace Database;

use Database\DbInterfaces\ResultSetInterface;
use Generator;
use PDOStatement;

class PDOResultSet implements ResultSetInterface
{
    /**
     * @var PDOStatement
     */
    private PDOStatement $PDOStatement;

    public function __construct(PDOStatement $PDOStatement)
    {
        $this->PDOStatement = $PDOStatement;
    }

    public function fetch($className) : Generator
    {
        while ($row = $this->PDOStatement->fetchObject($className)){
            yield $row;
        }
    }

    public function getSingleData(){
        return $this->PDOStatement->fetch();
    }

    public function getAllData(): bool|array
    {
        return $this->PDOStatement->fetchAll();
    }
}