<?php namespace Raxmatilla\BizHaqimizda;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
             'Raxmatilla\Bizhaqimizda\Components\Bizhaqimizda' => 'BizHaqimizda'
        ];
    }


    public function registerSettings()
    {
      
    }
}
