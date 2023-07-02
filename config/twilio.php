<?php

return [

    'sid' => getenv('TWILIO_SID', ''),
    'token' => getenv('TWILIO_TOKEN', ''),
    'phone' => getenv('TWILIO_NUMBER', ''),
];