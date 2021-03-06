<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserHistory extends Model
{
    use Notifiable;

    protected $table = 'user_history';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id' ,'email', 'dob', 'tel', 'address'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public static function getLatestHistory($request) {
        $last = self::where('user_id', $request->user()->id)->get()->last();
        if (!is_null($last)) {
            return $last;
        } else {
            return false;
        }
    }

    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }

}
