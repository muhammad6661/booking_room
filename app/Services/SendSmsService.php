<?php

namespace App\Services;

use App\Core\SmsBy;
use App\Core\TwilioSMS;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
class SendSmsService
{
    public TwilioSMS $twilioSMS;
    public SmsBy $smsBy;
    public function __construct()
    {
        $this->twilioSMS = new TwilioSMS();
        $this->smsBy = new SmsBy();
    }


    public function SendSms($phone, $text)
    {
       $this->smsBy->SendMesasge($phone, $text);
//      $this->twilioSMS->SendMesasge($phone, $text);
    }

}