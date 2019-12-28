<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Setting; 

class InsertSettingsRecordsEmailGmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Setting::create(['module' => 'SettingEmailGmail', 'alias' => 'Email', 'import' => 'EmailGmail@setting']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        (Setting::where('module', 'SettingEmailGmail')->first())->delete();
    }
}
