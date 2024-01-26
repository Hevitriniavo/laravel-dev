<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * @mixin IdeHelperHotel
 * @method static create(mixed $data)
 */
class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'phone_number',
        'email',
        'url'
    ];


    public function imageUrl(): string {
        return Storage::disk("public")->url($this->url);
    }
}
