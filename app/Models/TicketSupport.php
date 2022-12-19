<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketSupport extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'filial', 'status', 'motived', 'description', 'section', 'name_operator',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function filial()
    {
        return $this->belongsTo(Filial::class);
    }
}
