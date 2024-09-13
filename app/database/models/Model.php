<?php

namespace app\database\models;

use PDO;
use PDOException;
use PDOStatement;
use app\database\Filters;
use app\database\Connection;

abstract class Model
{
    private string $fields = '*';
    private string $filters = '';
    // private string $pagination = '';

    protected string $table = 'usuarios';

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function setFilters(Filters $filters)
    {
        $this->filters = $filters->dump();
    }

    public function fetcAll()
    {
        try {
            $sql = "select {$this->fields} from {$this->table} {$this->filters}";
            
            $connection = Connection::connect();
            $query = $connection->query($sql);

            return $query->fetcAll(PDO::FETCH_CLASS, get_called_class());
            
        } catch (PDOException $e){
            dd($e->getMessage());
        }
    }

}
