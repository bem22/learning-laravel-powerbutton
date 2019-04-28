<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * @property mixed status
 */
class Device extends Model
{
    const DEVICE_STATUS_ON = 'on';
    const DEVICE_STATUS_OFF = 'off';
    protected $fillable = [
        'id',
        'name',
        'model',
        'make',
        'imei',
        'color',
        'size_length',
        'size_width',
        'image',
        'status'
    ];
    /**
     * @return mixed
     */
    public function getDeviceStatus() {
        return ($this->status == self::DEVICE_STATUS_ON) ? self::DEVICE_STATUS_ON:self::DEVICE_STATUS_OFF;
    }
    public function actions() {
        return ($this->hasMany(Action::class));
    }
    public function user() {
        return ($this->hasOne(User::class));
    }
}
