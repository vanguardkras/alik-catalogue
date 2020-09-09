<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    /**
     * Отправить сообщение
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function message(Request $request) {
        $request->validate([
            'email' => 'required|email:rfc,dns',
        ]);

        Mail::to(env('MAIL_CONTACT_FORM'))
            ->queue(new ContactForm($request->all()));

        $charlist = '[]()~`>#+-=|{}.!';
        $message = "*Сообщение формы обратной связи*\n\n";
        $message .= "*Email:* {$request->email}\n";
        $message .= isset($request->phone) ? "*Телефон:* {$request->phone}\n" : '';
        $message .= "*Текст сообщения*\n";
        $message .= "_{$request->text}_";
        Http::post('https://api.telegram.org/bot' . env('TELEGRAM_TOKEN') . '/sendMessage', [
            'chat_id' => '207435766',
            'text' => addcslashes($message, $charlist),
            'parse_mode' => 'MarkdownV2',
        ]);
        return back()->with('message_sent', true);
    }
}
