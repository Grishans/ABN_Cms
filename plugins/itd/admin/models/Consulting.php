<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class Consulting extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'itd_admin_consulting';

    public $translatable = [
        'title_page_1',
        'desc_page_1',
        'subtitle_1_page_1',
        'subtitle_2_page_1',
        'subtitle_3_page_1',
        'subdesc_1_page_1',
        'subdesc_2_page_1',
        'subdesc_3_page_1',
        'title_page_2',
        'desc_page_2',
        'subtitle_1_page_2',
        'subtitle_2_page_2',
        'subtitle_3_page_2',
        'subdesc_1_page_2',
        'subdesc_2_page_2',
        'subdesc_3_page_2',
        'title_page_3',
        'desc_page_3',
        'subtitle_1_page_3',
        'subtitle_2_page_3',
        'subtitle_3_page_3',
        'subdesc_1_page_3',
        'subdesc_2_page_3',
        'subdesc_3_page_3',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image_1_page_1' => 'System\Models\File',
            'subimage_1_page_1' => 'System\Models\File',
            'subimage_2_page_1' => 'System\Models\File',
            'subimage_3_page_1' => 'System\Models\File',

        'image_1_page_2' => 'System\Models\File',
            'subimage_1_page_2' => 'System\Models\File',
            'subimage_2_page_2' => 'System\Models\File',
            'subimage_3_page_2' => 'System\Models\File',

        'image_1_page_3' => 'System\Models\File',

    ];

    public static function boot()
    {
        parent::boot();
    
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            return;
    
        self::extend(function($model){
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';
        });
    }
}
