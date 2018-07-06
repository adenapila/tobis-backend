<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Payment extends Model
{
    protected $table = 't006s';
    protected $fillable = ['branchcode', 'name_payment', 'note_payment', 'dp', 'kpr', 'disc'];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode'    => 'required',
            'name_payment' => 'required',
            'note_payment' => 'required',
            'dp' => 'required|numeric',
            'kpr' => 'required|numeric',
            'disc' => 'required|numeric',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode'    => 'required|max:255',
            'name_payment'    => 'required|max:255',
            'note_payment'    => 'required|max:255',
            'dp'    => 'required|min:1',
            'kpr'    => 'required|min:1',
            'disc'    => 'required|min:1',
        ]);
    }
}
