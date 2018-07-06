<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table ='t007s';
    protected $fillable = ['branchcode','name','disc'];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode'    => 'required',
            'name'    => 'required',
            'disc'    => 'required',                 
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode'    => 'required',
            'name'    => 'required',
            'disc'    => 'required',
        ]);
    }
}
