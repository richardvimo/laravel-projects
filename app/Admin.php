<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;


    public function roles() {
        return $this->belongsToMany('App\Role','role_admins');
    }


    public function hasAnyRole($roles) {
        if ( is_array($roles) ) {
            foreach ($roles as $role) {
                if ( $this->hasRole($role) ) {
                    return true;
                } else {
                    if ( $this->hasRole($roles) ) {
                        return true;
                    }
                }
                return false;
            }
        }
    }
    public function hasRole($role) {
        if ( $this->roles()->where('name',$role)->first() ) {
            return true;
        }
    }


    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'photo', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
