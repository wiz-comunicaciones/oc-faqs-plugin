<?php namespace Wiz\Faqs\Models;

use Model;

class Faq extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;
    use \October\Rain\Database\Traits\Sortable;

    protected $dates = [
        'deleted_at',
    ];

    public $table = 'wiz_faqs_faqs';

    public $rules = [
        'question' => 'required',
        'answer' => 'required'
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', 1);
    }
}