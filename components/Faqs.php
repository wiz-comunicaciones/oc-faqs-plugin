<?php namespace Wiz\Faqs\Components;

use Cms\Classes\ComponentBase;
use Wiz\Faqs\Models\Faq as FaqModel;

class Faqs extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Todas las preguntas frecuentes',
            'description' => 'Muestra todas las preguntas frecuentes.'
        ];
    }

    public function defineProperties()
    {
        return [
            'faqsPerPage' => [
                'title'             => 'Cantidad de preguntas frecuentes por página',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'default'           => '10',
            ]
        ];
    }

    public function onRun()
    {
        $this->faqs = $this->page['faqs'] = $this->loadFaqs();
    }

    protected function loadFaqs()
    {
        $perPage = $this->property('faqsPerPage');
        $page = $this->param('page') ? : 1;
        $faqs = FaqModel::published()
            ->paginate($perPage, $page);
        return $faqs;
    }

}
