<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $table = 'column_t';
    protected $gurded = array('id');

    public static $rules = array(
        'title' => 'required|mac:100',
        'contents' => 'required|max:1000'
    );

    public function getData()
    {
        return $this->title. ':' . $this->contents;
    }
}
