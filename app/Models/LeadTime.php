<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_lead_time_factor',
        'id_bom'
    ];

    public function lead_time_factor(){
        return $this->belongsTo(LeadTimeFactor::class, 'id_lead_time_factor');
    }

    public function bom(){
        return $this->belongsTo(BOM::class, 'id_bom');
    }
}
