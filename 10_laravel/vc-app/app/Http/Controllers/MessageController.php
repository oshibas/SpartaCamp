<?php
// 住所を指定
namespace App\Http\Controllers;
// Requestクラスを指定
use Illuminate\Http\Request;
// MessageControllerクラスを継承
class MessageController extends Controller
{
    public function hello() {
        return view('message.hello');
    }

    public function var() {
        return view('message.var',['variable' => 'Hello from MessageController']);
    }

    public function word($msg) {
        return view('message.word', ['msg' => $msg]);
    }

    public function word2($name, $msg) {
        return view('message.word2', [
            'name' => $name,
            'msg' => $msg
        ]);
    }
}
