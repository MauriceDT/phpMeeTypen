<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)

    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $columns = implode(', ', array_keys($parameters));

        $values = ':' . implode(', :', array_keys($parameters));

        $sqlString = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            $columns,
            $values
        );

        try {
            $query = $this->pdo->prepare($sqlString);

            $query->execute($parameters);
        } catch (Exception $e) {
        }
    }
}
