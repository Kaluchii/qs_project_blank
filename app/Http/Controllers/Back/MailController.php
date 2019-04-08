<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Interpro\Feedback\Contracts\FeedbackAgent;


class MailController extends Controller
{
    private $feedback;
    public function __construct( FeedbackAgent $feedback){

        $this->feedback = $feedback;
        // Объявляем все шаблоны писем для форм

        $this->feedback->setBodyTemplate('example_form', 'back/mail/example_form_mail');

    }

    public function send(Request $request){
        try{
            $data = $request->all();

            $form = array_pull($data, 'form');

            $this->feedback->mail($form, $data);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'error'=> $error->getMessage()];
        }
    }

    public function Captcha( Request $request )
    {
        $data = $request->all();
        $secret = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($data['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()) {
            $data['error'] = false;
        } else {
            $data['error'] = true;
        }
        return json_encode($data);
    }

}
