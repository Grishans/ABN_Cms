<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class Electronic extends Model
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
    public $table = 'itd_admin_electronics';

    public $translatable = [
        'title_page_1',
        'desc_page_1',
        'title_page_2',
        'subtitle_page_2',
        'subdesc_page_2',
        'title_1_page_3',
        'title_2_page_3',
        'title_3_page_3',
        'desc_1_page_3',
        'desc_2_page_3',
        'desc_3_page_3',
        'title_page_4',
        'desc_page_4',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image_1_page_3' => 'System\Models\File',
        'image_2_page_3' => 'System\Models\File',
        'image_3_page_3' => 'System\Models\File',
        'image_1_page_1' => 'System\Models\File',
        'image_1_page_2' => 'System\Models\File',
        'image_1_page_4' => 'System\Models\File',
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
