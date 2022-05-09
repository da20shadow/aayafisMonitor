<?php

namespace Database;

use Database\DbInterfaces\StatementInterface;
use PDO;

class PDODatabase
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query(string $query): StatementInterface
    {
        $stmt = $this->pdo->prepare($query);
        return new PDOPreparedStatement($stmt);

    }

    public function getErrorInfo(): array
    {
        // TODO: Implement getErrorInfo() method.
    }
}