<?php

namespace SachinKiranti\AakashSms;

use Exception;
use JsonException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client as Http;
use GuzzleHttp\Exception\ClientException;

class AakashSms
{

    public $recipients;

    public $message;

    public function __construct( $recipients, $message )
    {
        $this->recipients = $recipients;
        $this->message    = $message;
    }

    public function send()
    {
        $request = new Request( 'POST', config('aakash-sms.base_url'));
        try {
            $response = (new Http)
                ->send( $request, [
                    'form_params' => [
                        'auth_token' => config('aakash-sms.token'),
                        'to'         => is_array($this->recipients) ? implode(',', $this->recipients) : $this->recipients,
                        'text'       => $this->message,
                    ],
                ]);

            $response = json_decode($response->getBody()->getContents(), true);
            return $response;
        } catch (ClientException $e) {
            logger()->error('HTTP AakashSMS : '. $e->getMessage());

            return false;
        } catch (Exception $e) {
            logger()->error('AakashSMS Exception : '.$e->getMessage());

            return false;
        }
    }

}