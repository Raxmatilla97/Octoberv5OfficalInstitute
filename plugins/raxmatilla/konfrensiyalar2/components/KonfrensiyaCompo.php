<?php namespace Raxmatilla\Konfrensiyalar\Components;

use Cms\Classes\ComponentBase;
use Raxmatilla\Konfrensiyalar\Models\Konfrensiyalar;
class KonfrensiyaCompo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Konfrensiyalar uchun component',
            'description' => 'No description provided yet...'
        ];
    }

    public $konfrense;

    public function onRun(){

        $this->konfrense = Konfrensiyalar::all();

        dump($this->konfrense);
    }

    public function defineProperties()
    {
        return [];
    }
}
