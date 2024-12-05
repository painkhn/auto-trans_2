<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'name',
        'price',
        'mileage',
        'year',
        'engine',
        'volume',
        'power',
        'mark_id'
    ];

    public function mark()
    {
        return $this->belongsTo(Mark::class);
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favourites');
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
