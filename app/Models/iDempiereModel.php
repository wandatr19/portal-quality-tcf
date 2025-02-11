<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class iDempiereModel extends Model
{
    //
    use HasFactory;
    protected $connection = 'idempiere';
    protected $table = 'c_bpartner';

    public function scopeFromPartner($query)
    {
        return $query->from('c_bpartner')
                    // ->whereIn('ad_org_id', [1000001, 1000002])
                    ->where('isactive', 'Y')
                    ->where('iscustomer', 'Y');
    }
    public function scopeFromPart($query)
    {
        return $query->from('m_product')
                    ->where('isactive', 'Y');
    }

    
}
