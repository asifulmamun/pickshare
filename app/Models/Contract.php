<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_request_id',
        'requester_user_id',
        'driver_user_id',
        'driver_request_amount',
        'contract_amount',
        'currency',
        'contracted_date',
        'status',
        'proposal',
    ];

    public function bookRequest()
    {
        return $this->belongsTo(BookRequest::class, 'book_request_id');
    }

    public function requester()
    {
        return $this->belongsTo(User::class, 'requester_user_id');
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_user_id');
    }

    // // contract.id relation book_requests.contracted_id
    // public function book_request()
    // {
    //     return $this->belongsTo(BookRequest::class, 'book_request_id');
    // }
}
