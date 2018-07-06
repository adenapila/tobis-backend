<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UTJ extends Model
{
    protected $table = 't005s';
    protected $fillable = ['branchcode','nominal'];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode'    => 'required',
            'nominal' => 'required|numeric',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode'    => 'required|max:255',
            'nominal' => 'required|min:6',
        ]);
    }

}

