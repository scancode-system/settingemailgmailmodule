<?php

namespace Modules\SettingEmailGmail\Observers;

use Modules\SettingEmailGmail\Entities\SettingEmailGmail;


class SettingEmailGmailObserver {


	public function creating(SettingEmailGmail $setting_email_gmail) {
		$setting_email_gmail->username = 'scancodesistemas@gmail.com';
		$setting_email_gmail->password = 'index@@12';
		$setting_email_gmail->title = 'Scancode';
		$setting_email_gmail->subject = 'Detalhes do pedido';
		$setting_email_gmail->body = 'Segue em anexo seu pedido em PDF.';
	}


}
