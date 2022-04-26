<?php

namespace Database;

use Database\DbInterfaces\ResultSetInterface;

class PDOResultSet implements ResultSetInterface
{
    /**
     * @var \PDOStatement
     */
    private $pdoStatement;

    public function __construct(\PDOStatement $PDOStatement)
    {
        $this->pdoStatement = $PDOStatement;
    }

    public function fetch($className) : \Generator
    {
        while ($row = $this->pdoStatement->fetchObject($className)){
            yield $row;
        }
    }
}