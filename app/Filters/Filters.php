<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 10.09.2018
 * Time: 21:18
 */

namespace App\Filters;

use App\User;
use Illuminate\Http\Request;

abstract class Filters
{

    protected $request, $builder;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply($builder)
    {

        $this->builder = $builder;

        foreach ($this->getFilters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($value);
            }
        }

        return $this->builder;

    }

    public function getFilters()
    {
       return $this->request->only($this->filters);
    }
}