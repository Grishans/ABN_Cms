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

    function onRender()
    {
        $this->page['contact'] = isset($this->page->contactList->records[0]) ? $this->page->contactList->records[0] : null;
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
            $message->to('info@abninter.com.pt', 'Admin Person ABN');
        });

        return json_encode(['success' => 1]);
    }


}