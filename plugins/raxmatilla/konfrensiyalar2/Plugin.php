<?php namespace Raxmatilla\Konfrensiyalar;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\Konfrensiyalar\Components\KonfrensiyaCompo' => 'Konfrensiyalar Compomenti';
        ];
    }

    public function registerSettings()
    {
    }
}
