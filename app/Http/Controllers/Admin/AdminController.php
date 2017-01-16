<?php namespace App\Http\Controllers\Admin;

// liuxiaolu@dankegongyu.com
use App\Models\City;
use Lego\Lego;

class AdminController
{
    public function getIndex()
    {
        $filter = Lego::filter(new City());
        $filter->addText('name', '姓名');

        $grid = Lego::grid($filter);
        $grid->addText('id', '编号')->cell(function ($id) {
            return $id + 1;
        });
        $grid->addText('name', '姓名');
        $grid->addText('level', '级别');
        $grid->paginate(3);

        return $grid->view('admin.layout', ['grid' => $grid, 'filter' => $filter]);
    }

    public function anyItem()
    {
        echo 'hello Item';
    }

}