<?php namespace Numthang\Location;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
    /**
     * Register new Twig variables
     * @return array
     */
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'form_select_geography' => ['Numthang\Location\Models\Geography', 'formSelect'],
                'form_select_province'   => ['Numthang\Location\Models\Province', 'formSelect'],
                'form_select_amphure'   => ['Numthang\Location\Models\Amphure', 'formSelect'],
                'form_select_district'   => ['Numthang\Location\Models\District', 'formSelect']
            ]
        ];
    }
}
