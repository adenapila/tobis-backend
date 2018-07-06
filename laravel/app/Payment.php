<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function costing()
    {
        return $this->hasOne('App\Costing', 'id');
    }

    protected $table = 't101s';
    protected $fillable = ['branchcode','booking_no','code_customer','name_customer','code_unit','type_unit','price_unit','first_payment','type_payment','harga_trans','dp','kpr','cash','reveral_code','status'];

    public static function rules($update = false, $id = null)
    {
        $commun = [
            'branchcode' => 'required',
            'booking_no' => 'required',
            'code_customer' => 'required',
            'name_customer' => 'required',
            'code_unit' => 'required',
            'type_unit' => 'required',
            'price_unit' => 'required|numeric',
            'first_payment' => 'required|numeric',
            'type_payment' => 'required',
            'harga_trans' => 'required|numeric',
            'dp' => 'required|numeric',
            'kpr' => 'required|numeric',
            'cash' => 'required|numeric',
            'reveral_code' => 'required',   
            'status' => 'required',   
        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
            'branchcode' => 'required|max:255',
            'booking_no' => 'required|max:255',
            'code_customer' => 'required|max:255',
            'name_customer' => 'required|max:255',
            'code_unit' => 'required|max:255',
            'type_unit' => 'required|max:255',
            'price_unit' => 'required|numeric|min:1',
            'first_payment' => 'required|numeric|min:1',
            'type_payment' => 'required|max:255',
            'harga_trans' => 'required|max:255',
            'dp' => 'required|numeric|min:1',
            'kpr' => 'required|numeric|min:1',
            'cash' => 'required|numeric|min:1',
            'reveral_code' => 'required|max:255',
            'status' => 'required|max:255',
        ]);
    }

}