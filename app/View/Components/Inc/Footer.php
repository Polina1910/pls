<?php

namespace App\View\Components\Inc;

use Illuminate\View\Component;
use App\Models\Cart\CartHandler;
use Single;
use Auth; 

class Footer extends Component
{
    public $fields;
    public $cartCount;
    public $is_user_login;

    public function __construct(){

        $s = new Single('Футер', 10, 2);

        
        $cart = new CartHandler();
        $this->cartCount = $cart->count();

        $user = Auth::user();
        $this->is_user_login = false;
        if(!empty($user)){
            $this->is_user_login = true;
        }

        $col1 = $s->field('Меню', 'Меню #1', 'repeat', true);
        $col1_items = [];
        foreach ($col1 as $elm){
            $col1_items [] = [
                $elm->field('Название', 'text', ''), 
                $elm->field('Ссылка', 'text', ''), 
            ];
            $elm->end();
        }

        $col2 = $s->field('Меню', 'Меню #2', 'repeat', true);
        $col2_items = [];
        foreach ($col2 as $elm){
            $col2_items [] = [
                $elm->field('Название', 'text', ''), 
                $elm->field('Ссылка', 'text', ''), 
            ];
            $elm->end();
        }

        $col3 = $s->field('Меню', 'Меню #3', 'repeat', true);
        $col3_items = [];
        foreach ($col3 as $elm){
            $col3_items [] = [
                $elm->field('Название', 'text', ''), 
                $elm->field('Ссылка', 'text', ''), 
            ];
            $elm->end();
        }

        $sc = new Single('Контактная информация', 10, 2);

        $phones = $sc->field('Контактная информация', 'Номера телефона', 'repeat', true);
        $phones_items = [];
        foreach ($phones as $elm){
            $phones_items [] = [
                $elm->field('Номер телефона', 'text', ''), 
            ];
            $elm->end();
        }

        $time = $sc->field('Контактная информация', 'Время работы', 'textarea', true, 'Пн-Вс 9.00-18.00');
        $email = $sc->field('Контактная информация', 'E-mail', 'text', true, 'info@designtextile.com.ua');
        
        $social = $sc->field('Контактная информация', 'Социальные сети', 'repeat', true);
        $social_items = [];
        foreach ($social as $elm){
            $social_items [] = [
                $elm->field('Ссылка', 'text', ''), 
                $elm->field('Иконка (закрашеная) {32x32}', 'photo', ''), 
                $elm->field('Иконка (маленькая) {15x15}', 'photo', ''), 
                $elm->field('Иконка (разноцветная) {32x32}', 'photo', ''), 
                $elm->field('Название', 'text', ''), 
            ];
            $elm->end();
        }
                
        $this->fields = [
            'copyright'         => $s->field('Copyright', 'Copyright', 'textarea', false, '© 2018-2022 SCOWTH. All Rights Reserved.'),
            'col1'              => $col1_items,
            'col2'              => $col2_items,
            'col3'              => $col3_items,
            'button_text'       => $s->field('Кнопка', 'Кнопка (текст)', 'text', false, 'Заказать дизайн'),
            'phones'            => $phones_items,
            'email'             => $email,
            'time'              => $time,
            'social'            => $social_items,
        ];
    }

    public function render(){
        return view('components.inc.footer');
    }
}
