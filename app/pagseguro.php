<?php

namespace App;

class pagseguro
{
    const SANDBOX = true;
    const SANDBOX_EMAIL = "maiconalexdesouza@gmail.com";
    const PRODUCTION_EMAIL = "maiconalexdesouza@gmail.com";

    const SANDBOX_TOKEN = "BEE6C39575144D928BB12A5EE22EBE74";
    CONST PRODUCTION_TOKEN = "BEE6C39575144D928BB12A5EE22EBE75";

    const SANDBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";

    public static function getAuthentication():array
    {
        if(pagseguro::SANDBOX === true)
        {
            return[
                "email"=>pagseguro::SANDBOX_EMAIL,
                "token"=>pagseguro::SANDBOX_TOKEN
            ];
        }
        else
        {
            return[
                "email"=>pagseguro::PRODUCTION_EMAIL,
                "token"=>pagseguro::PRODUCTION_TOKEN
            ];
        }
    }

    public static function getUrlSessions():string
    {
        return (pagseguro::SANDBOX == true)? pagseguro::SANDBOX_SESSIONS : pagseguro::PRODUCTION_SESSIONS; 
    }
}
