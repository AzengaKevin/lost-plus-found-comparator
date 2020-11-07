<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'officer_id',
        'station_id',
        'person_name',
        'person_national_identification_number',
        'person_birth_certificate_number',
        'person_passport_number',
        'person_phone_number',
        'person_date_of_birth',
        'extra_items',
        'last_seen',
        'last_seen_place',
        'last_seen_with'
    ];

    protected $casts = [
        'last_seen_with' => 'array',
    ];
}
