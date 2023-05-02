<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use Statamic\Events\FormSubmitted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

/**
 * Triggered when a frontend Statamic form is submitted.
 *
 * @internal Smarta
 */
class SubmitFormRecaptchaCheck implements ShouldQueue
{

    public $recaptcha_base_url = "https://www.google.com/recaptcha/api/siteverify?";

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param FormSubmitted $event
     * @throws ValidationException
     */
    public function handle(FormSubmitted $event)
    {
        // Get the custom field value directly from the request
        $request = app(Request::class);
        $recaptcha_token = $request->input('token');
        $score = $this->calculate_recaptcha_score($recaptcha_token);

        if(!env('RE_CAPTCHA_SECRET_KEY'))
        {
            throw ValidationException::withMessages(['recaptcha secret key not set']);
        }
        if(!$recaptcha_token)
        {
            throw ValidationException::withMessages(['recaptcha token not set']);
        }

        if(!$score->success)
        {
            throw ValidationException::withMessages([json_encode($score),env('RE_CAPTCHA_SECRET_KEY'),$recaptcha_token]);
        }
    }

    public function calculate_recaptcha_score($recaptcha_token)
    {
        $url = $this->recaptcha_base_url."secret=".env('RE_CAPTCHA_SECRET_KEY')."&response=".$recaptcha_token;
        return $this->post_request($url);
    }

    public function post_request($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Content-Length: 0'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }
}
