<?php 
namespace Itd\Admin\Components;

use CMS\Classes\ComponentBase;
use Input;
use Mail;

class FeedbackForm extends ComponentBase 
{
    public function componentDetails()
    {
        return [
            'name' => 'Feedback Form',
            'description' => 'Feedback Form use mail',
        ];
    }

    public function onSend()
    {
        $vars = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'content' => Input::get('content'),
        ];

        $pat = 'itd.admin::mail.message';


        Mail::send($pat, $vars, function($message) {
            $message->to('kojiek7212@gmail.com', 'Admin Person ABN');
        });
    }


}