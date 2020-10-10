<?php namespace Raxmatilla\Majmualar;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Raxmatilla\Majmualar\Components\MajmualarCompo' => 'majmualarCompoment',
        ];
    }

    public function registerSettings()
    {
    }
}
