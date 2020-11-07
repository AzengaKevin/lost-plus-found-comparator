<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    
    protected $fillable = [
        'fileable_id',
        'fileable_type',
        'path',
        'thumb_path',
        'description'
    ];

    public function fileable()
    {
        return $this->morphTo();
    }

    /*
    |--------------------------------------------------------------------------
    | File Utility Functions
    |--------------------------------------------------------------------------
    | Helper functions for the file class
    |
    */
    public function deleteFile()
    {
        if(!is_null($this->path)){
            if(Storage::exists($this->path)){
                Storage::delete($this->path);

                //Debugging
                Log::info('File deleted from disk');
            }
        }

        if(!is_null($this->thumb_path)){
            if(Storage::exists($this->thumb_path)){
                Storage::delete($this->thumb_path);

                //Debugging
                Log::info('Thumb file deleted from disk');
            }
        }
    }

}
