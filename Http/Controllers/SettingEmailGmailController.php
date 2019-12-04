<?php

namespace Modules\SettingEmailGmail\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingEmailGmail\Entities\SettingEmailGmail;

class SettingEmailGmailController extends Controller
{

    public function update(Request $request, SettingEmailGmail $setting_email_gmail)
    {
        $data = $request->all();
        if(is_null($request->password)){
            unset($data['password']);
        }
        $setting_email_gmail->update($data);
        return back()->with('success', 'Configuração de email alterado.');
    }


}
