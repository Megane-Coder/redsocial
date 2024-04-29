<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    /* use HasFactory; */

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/kQzQWeH1ov3i4n64NWVr3or1MfS4wD9lEyRX0SIH.jpg';
        return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
