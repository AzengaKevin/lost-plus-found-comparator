<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

     protected $fillable = [
         'person_name',
         'person_national_identification_number',
         'person_birth_certificate_number',
         'person_passport_number',
         'person_phone_number',
         'social_media_accounts',
         'person_date_of_birth',
         'last_seen',
         'last_seen_place',
         'last_seen_with'
     ];
}
