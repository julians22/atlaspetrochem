<?php

namespace App\Services;

/**
 * Interface ServiceContract.
 *
 * Modified from: https://github.com/kylenoland/laravel-base-repository
 */
interface ServiceContract
{
    public function all();

    public function count();

    public function deleteById($id);

    public function first();

    public function get();

    public function getById($id);

    public function getByColumn($item, $column, array $columns = ['*']);

    public function limit($limit);

    public function orderBy($column, $value);

    public function paginate($limit = 25, array $columns = ['*'], $pageName = 'page', $page = null);

    public function where($column, $value, $operator = '=');

    public function whereIn($column, $value);

    public function with($relations);
}
