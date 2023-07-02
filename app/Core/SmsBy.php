<?php

namespace App\Core;

class SmsBy
{
    private $login ;
    private $password;
    private $phone;
    private $url;

    public function __construct()
    {
        $config = (object)Config::get('sms_by');

        $this->login = $config->login;
        $this->password = $config->password;
        $this->phone = $config->phone;
        $this->url = $config->url;
    }


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }


    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }



    public function SendMesasge($phone, $text)
    {
        $data = [
            'login' => $this->login,
            'password' => $this->password,
            'phones' => $phone,
            'message' => $text
        ];
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }
}