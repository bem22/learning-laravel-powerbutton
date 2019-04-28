<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Action extends Model
{
    protected $fillable = [
        'id',
        'name',
        'status',
        'device_id',
        'user_id',
        'button_id'
    ];
    public function devices() {
        return $this->belongsToMany(Device::class);
    }
    public function buttons() {
        return $this->belongsTo(Button::class);
    }
    public function user() {
        return $this->belongsTo( User::class);
    }
}
