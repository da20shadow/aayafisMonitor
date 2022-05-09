<?php

namespace Database;

use Database\DbInterfaces\ResultSetInterface;
use Database\DbInterfaces\StatementInterface;
use PDOStatement;

class PDOPreparedStatement implements StatementInterface
{
    /**
     * @var PDOStatement
     */
    private PDOStatement $PDOStatement;

    public function __construct(PDOStatement $PDOStatement)
    {
        $this->PDOStatement = $PDOStatement;
    }

    public function execute(array $params = []): ResultSetInterface
    {
        $this->PDOStatement->execute($params);
        return new PDOResultSet($this->PDOStatement);
    }
}