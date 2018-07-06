<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = 't004s';
    protected $fillable = ['branchcode','code_customer','name','address','city_code','email','ktp','npwp','phone','phone2'];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode'    => 'required',
            'code_customer' => 'required',
            'name' => 'required',
            'address' => 'required',
            'city_code' => 'required',
            'email' => 'required|email',
            'ktp' => 'required',
            'npwp' => 'required',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode'    => 'required|max:255',
            'code_customer' => 'required|max:255',
            'name' => 'required|max:255',
            'address' => 'required',
            'city_code' => 'required',
            'email' => 'required|email',
            'ktp' => 'required',
            'npwp' => 'required',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
        ]);
    }  
}
