<?php namespace Wiz\Faqs\Classes;

class ListColumnTypes {

    /**
     * Outputs strings with HTML parsed
     */
    public static function htmlColumnType($value, $column, $record)
    {
        return $value;
    }
}