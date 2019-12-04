<?php

namespace Modules\SettingEmailGmail\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingEmailGmail extends Model
{
    protected $fillable = ['username', 'password', 'title', 'subject', 'body'];


      public function event_setting()
    {
        return $this->morphOne(EventSetting::class, 'configurable');
    }
}
