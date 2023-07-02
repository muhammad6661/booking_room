<?php

namespace App\Core;

use Exception;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;
use Twilio\Rest\Api\V2010\Account\MessageInstance;
class TwilioSMS
{
    private string $sid;
    private string $token;
    private string $phone;

    protected Client $client;
    public function __construct()
    {
        $config = (object)Config::get('twilio');
        try {
            $this->sid = $config->sid;
            $this->token = $config->phone;
            $this->phone = $config->phone;
            $this->client = new Client($this->sid, $this->token);
        } catch (Exception $e) {
            echo "Wrong config in Twilio";
        }
    }


    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    public function getSid()
    {
        return $this->sid;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPone()
    {
        return $this->phone;
    }


    /**
     * @throws TwilioException
     */
    public function SendMesasge($phone, $text): MessageInstance
    {
      return   $this->client->messages->create(
            $phone,
            [
                'from' => $this->phone,
                'body' => $text,
            ]
        );


    }

}