<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marketing extends Model
{
    protected $table = 't002s';
    protected $fillable = ['branchcode','code','email','password','api_token','name','address','phone','phone2','ktp','npwp','reveral_code','komisi','agent'];
  

public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode' => 'required',
            'code' => 'required',
            'email'    => 'required|email',
            'password' => 'nullable',
            'api_token' => 'nullable',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric',
            'phone2' => 'required|numeric',
            'ktp' => 'required|numeric',
            'npwp' => 'required|numeric',
            'reveral_code' => 'required',
            'komisi' => 'required|numeric',
            'agent' => 'required',
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode' => 'required',
            'code' => 'required',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'nullable|min:6',
            'api_token' => 'nullable|min:6',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|min:6',
            'phone2' => 'required|min:6',
            'ktp' => 'required|min:6',
            'npwp' => 'required|min:6',
            'reveral_code' => 'required|min:1',
            'komisi' => 'required|min:6',
            'agent' => 'required|max:255'
        ]);
    }

    public function setPasswordAttribute($value='')
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setApiTokenAttribute($value='')
    {
        $this->attributes['api_token'] = bcrypt($value);
    }

    
}
