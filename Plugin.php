<?php namespace Wiz\Faqs;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'wiz.faqs::lang.plugin.name',
            'description' => 'wiz.faqs::lang.plugin.description',
            'author'      => 'Wiz Comunicaciones',
            'icon'        => 'icon-question-circle',
            'iconSvg'     => '/plugins/wiz/faqs/assets/images/plugin-icon.svg',
            'homepage'    => 'https://wiz.cl'
        ];
    }

    public function registerPermissions()
    {
        return [
            'wiz.faqs::manage_faqs' => [
                'tab'   => 'wiz.faqs::lang.plugin.name',
                'label' => 'Gestionar preguntas frecuentes',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'wiz-faqs' => [
                'label'       => 'FAQs',
                'url'         => Backend::url('wiz/faqs/faqs'),
                'icon'        => 'icon-question-circle',
                'iconSvg'     => '/plugins/wiz/faqs/assets/images/plugin-icon.svg',
                'permissions' => ['wiz.faqs::manage_faqs'],
                'order'       => 500,
            ],
        ];
    }

    public function registerComponents()
    {
        return [
            \Wiz\Faqs\Components\Faqs::class => 'Faqs',
        ];
    }

    public function registerListColumnTypes()
    {
        return [
            'wiz_faqs_html' => [
                'Wiz\Faqs\Classes\ListColumnTypes',
                'htmlColumnType'
            ],
        ];
    }
}