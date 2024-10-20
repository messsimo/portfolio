<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
// Подключение модулей
use App\Http\Requests\contactRequest;

class mainController extends Controller {
    // Отображение страницы
    public function showPage() {
        return view("main");
    }

    // Функция обработки формы обратной связи
    public function contactForm(contactRequest $req) {
        // Массив данных из формы
        $data = [
            "name" => $req->input("name"),
            "email" => $req->input("email"),
            "message" => $req->input("message")
        ];

        try {
            // Отправка письма
            Mail::send("emails.contact", $data, function($messages) use ($data) {
                $messages->to("danielmihai.it@mail.ru")
                         ->subject("Customer from web")
                         ->replyTo ($data["email"], $data["name"])
                         -> from (env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            });

            // Редиркет обратно c успешной записью
            return back()->with("success", "Thank you for mail! I will answer in a few minutes");
        } catch (\Exception $e) {
            // Редиркет обратно c ошибкой
            return back()->with("error", "Something went wrong. Please try again");
        }
    }
}
