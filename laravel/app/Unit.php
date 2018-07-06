<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $table = 't003s';
    protected $fillable = ['branchcode','code_unit','type_unit','block_unit','no_unit','lt_unit','lb_unit','status_unit','code_customer','name_customer','price'];

    

public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode' => 'required',
            'code_unit' => 'required',
            'type_unit' => 'required',
            'block_unit' => 'required',
            'no_unit' => 'required',
            'lt_unit' => 'required',
            'lb_unit' => 'required',
            'status_unit' => 'required',
            'code_customer' => 'required',
            'name_customer' => 'required',
            'price' => 'required|numeric',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode' => 'required',
            'code_unit' => 'required|max:255',
            'type_unit' => 'required|max:255',
            'block_unit' => 'required|max:255',
            'no_unit' => 'required|min:1',
            'lt_unit' => 'required|min:1',
            'lb_unit' => 'required|min:1',
            'status_unit' => 'required|max:255',
            'code_customer' => 'required',
            'namee_customer' => 'required',
            'price' => 'required|min:5',
        ]);
    }
}