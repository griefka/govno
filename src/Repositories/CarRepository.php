<?php
namespace Repositories;

class CarRepository extends AbstractRepository
{
    protected $tableName = 'cars';

    public function getTableName() {
        return $this->tableName;
    }

}