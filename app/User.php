<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::Class);
    }

    public function saveContact($contact)
    {
        return $this->contacts()->create($contact);
    }

    public function todos()
    {
        return $this->hasMany(Todo::class);
    }

    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
}
