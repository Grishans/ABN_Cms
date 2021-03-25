<?php namespace Itd\Admin\Models;

use Model;

/**
 * Model
 */
class MainPage extends Model
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
    public $table = 'itd_admin_main_page';

    public $translatable = [
        'title_page_1',
        'desc_page_1',
        'title_page_2',
        'subtitle_1_page_2',
        'subtitle_2_page_2',
        'subtitle_3_page_2',
        'subdesc_1_page_2',
        'subdesc_2_page_2',
        'subdesc_3_page_2',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'image_page_1' => 'System\Models\File',
        'image_page_2' => 'System\Models\File',
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
