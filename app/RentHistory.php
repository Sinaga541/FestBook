<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class RentHistory extends Model
{
    protected $table = 'rent_history';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(User::class, 'id', 'admin_id');
    }
     
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function scopeIsRented($query)
    {
        return $query->where('returned_at',null);
    }
}
