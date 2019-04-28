<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Button extends Model
{
    protected $fillable = [
        'id',
        'name',
        'position'
    ];
    public function devices() {
        return $this->belongsToMany(Device::class);
    }
    public function action() {
        return $this->belongsTo(Action::class);
    }
}
