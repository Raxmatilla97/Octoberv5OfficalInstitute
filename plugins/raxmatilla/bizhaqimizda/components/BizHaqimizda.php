<?php namespace Raxmatilla\BizHaqimizda\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\BizHaqimizda\Models\BizHaqimizda as BizHaqimizdaa ;
class BizHaqimizda extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'BizHaqimizda Component',
            'description' => 'No description provided yet...'
        ];
    }

    public $bizhaqimizda;

    public function onRun(){
        $this->bizhaqimizda = BizHaqimizdaa::all();
        dump($this->bizhaqimizda);
    }

    public function defineProperties()
    {
        return [];
    }
}
