<?php
namespace App\Enums;

enum OrderStatus : int {

    case Pending = 0;
    case Approved = 1;
    case Delivered = 2;

        public function color(): string
        {
            return match($this) 
            {
                OrderStatus::Pending => 'red',   
                OrderStatus::Approved => 'green',               
                OrderStatus::Delivered => 'yellow'
     
            };
        }

        public function message(): string
        {
            return match($this) 
            {
                OrderStatus::Pending => 'ဆိုင်းငံ့ထားသည်။',   
                OrderStatus::Approved => 'အတည်ပြုခဲ့သည်။',               
                OrderStatus::Delivered => 'ပေးပို့ခဲ့သည်။',      
            };
        }
}