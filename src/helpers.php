<?php

use SachinKiranti\AakashSms\AakashSms;

if (! function_exists('send_aakash_sms')) :

    function send_aakash_sms ($recipients, $message) {
        return (new AakashSms($recipients, $message))->send();
    }

endif;