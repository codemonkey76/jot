<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];
    protected $dates = ['birthday'];

    public function setBirthdayAttribute($birthday)
    {
        $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y', $birthday);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function path()
    {
        return '/contacts/' . $this->id;
    }
}
