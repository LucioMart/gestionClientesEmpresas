<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cbCurrency extends Model
{
    //
    protected $table = 'cb_currency';

    protected $primaryKey = 'idcurrency';

    protected $fillable = ['currency', 'description', 'isactive', 'isocode', 'cursymbol', 'precisionstd', 'precisioncost', 'precisionprize'];

    protected $hidden = ['create_at', 'updated_at'];
}
