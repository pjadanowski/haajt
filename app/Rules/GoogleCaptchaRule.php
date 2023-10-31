<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Closure;


class GoogleCaptchaRule implements ValidationRule
{
    protected const URL = 'https://www.google.com/recaptcha/api/siteverify';

    protected $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::asMultipart()
            ->post(self::URL, [
                'secret'   => config('services.google_captcha.secret'),
                'response' => $this->token,
                'remoteip' => request()->ip(),
            ])->json();

        if ($response['success'] && $response['score'] <= 0.5) {
            $fail('Google Captcha missing or invalid.');
        }
    }
}
