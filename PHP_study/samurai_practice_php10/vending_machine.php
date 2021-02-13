<?php
    // クラスの宣言
    class vendingMachine{
        // メソッドの宣言
        public function buy($money){
            $message = '';
            if ($money >= 150) {
                $message .= "お買い上げありがとうございます。" ;
            } else {
                $message .= "購入金額が不足しております。" ;
            }
            return $message ;
        }
    }