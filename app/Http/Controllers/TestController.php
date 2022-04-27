<?php

namespace App\Http\Controllers;

use http\Client;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //1-1
    public function lessonOne() {
        return 'Я люблю учиться в ЧРТ';
    }
    //1-2
    public function Ivan1()
    {
        return 'Меня зовут Иван';
    }
    //1-3
    public function Ivan2()
    {
        return 'Меня зовут Иван и я люблю есть яблоки';
    }
    //1-4
    public function lessonTow(Request $request) {
        $e = 3;
        $w = 5;
        $request = $e+$w;


        return $request;
    }
    //1-5
    public function Signal($e, $r)
    {
        $t=$e+$r;
        return $t;
    }
    //1-6
    public function Hack($cipher)
    {
        if ($cipher = 'keyOneTest')
            {
                return 'Я взломал шифр';
            }
        else{
            return 'нет доступа!';
        }
    }





    /* //2: 3-4
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Переведу часы, хоть знаю: будет гонка'; break;
            case 2: $detachment = 'Не мог придумать я, что это за беда!'; break;
            case 3: $detachment = 'Ведь экая шалунья ты девчонка.'; break;
            case 4: $detachment = 'Чего будить? Сама часы заводишь'; break;
            default: $detachment = '-';
        }
        $arr = ['js', 'html', 'css', 'php'];
        foreach ($arr as $item) {
            echo $item;
        }

        return view('template', compact('detachment', 'item'));
    }
    */

    public function politikafunc()
    {
        return view('politika');
    }

    public function politikaminimal()
    {
        $organization = "CHRT";
        return view('politika', compact('organization'));
    }
    public function BookStr()
    {
        $text = '"Ведь экая шалунья ты девчонка."';
        return view('Book', compact('text'));
    }

    public function liTeg()
    {
        $var_li = ['php', 'html', 'css'];
        return view('li')->with('var_li', $var_li);
    }

    public function divTeg()
    {
        $var_div = ['Russia', 'ETO', 'KRUTO'];
        return view('div')->with('var_div', $var_div);
    }

    public function spanTeg()
    {
        $var_span = ['1', '2', '3', '4'];
        return view('span')->with('var_span', $var_span);
    }


}
