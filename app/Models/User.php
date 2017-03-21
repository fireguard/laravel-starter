<?php

namespace App\Models;

use Fireguard\Form\Contracts\FormModelInterface;
use Fireguard\Form\Laravel\FormModelEloquentTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable implements FormModelInterface
{
    //SoftDeletes //TODO
    use Notifiable,  FormModelEloquentTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'function'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getAvatarAttribute($value)
    {
        return !empty($this->image) ? Storage::url($this->image) : asset('assets/images/user-avatar.png');
    }

    public function getElementValue($field)
    {
        $defaultValue = isset($this->{$field}) ? $this->{$field} : '';
        if ($field == 'image' && !empty($defaultValue)) {
            return get_uri($defaultValue);
        }
        if (function_exists('old')) return old($field, $defaultValue);
        return $defaultValue;
    }
}
