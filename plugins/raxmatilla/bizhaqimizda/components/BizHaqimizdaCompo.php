<?php namespace Raxmatilla\BizHaqimizda\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\BizHaqimizda\Models\BizHaqimizda;

class BizHaqimizdaCompo  extends ComponentBase
{
    public $bizhaqimizda;
    
    public function componentDetails()
    {
        return [
            'name'        => 'BizHaqimizda Component',
            'description' => 'No description provided yet...'
        ];
    }

   

    public function onRun(){
     $this->bizhaqimizda = BizHaqimizda::all()->take($this->property(''));
      
    }

   
    public function defineProperties()
    {
        return [
            'units' => [
                'title'             => 'SORTby',
                'type'              => 'dropdown',
                'default'           => 'imperial',
                'placeholder'       => 'Sortirofkalashni tanlang',
                'options'           => [
                    'created_at asc'=>"Vaqt bo'yicha tartiblash ASC", 
                    'created_at desc'=>"Vaqt bo'yicha tartiblash DESC", 
                    'id asc' => "ID bo'yicha tartiblash ASC",
                    'id desc' => "ID bo'yicha tartiblash DESC"

                                       ]
                ],
                'Nechtaligi' =>
                [

                ]
        ];
    }
}
