<?php

namespace app\database\models;

use PDOException;
use app\database\Filters;

abstract class Model
{
    private string $fields = '*';
    private string $filters = '';
    private string $pagination = '';

    protected string $table = 'users';

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
            dd($sql);
        } catch (PDOException $e){
            dd($e->getMessage());

        }
    }

}
