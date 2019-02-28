<?php namespace Numthang\Homeschool\Models;

use Model;
/**
 * Model
 */
class Course extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'numthang_homeschool_courses';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $fillable = ['user_id', 'hs_name', 'name', 'student_name', 'birth_date', 'school_exp', 'development', 'class_reason', 'purpose', 'format', 'schedule', 'curriculum', 'activity', 'learning', 'evaluate', 'other'];//กำหนด field ให้เป็น fillable
    #protected $guarded = [];//ใช้อันนี้ ถ้าต้องการให้ fillable ทุก field ให้เลือกใช้อย่างใดอย่างหนึ่งกับ $fillable กรณีที่ไม่มี field ใน table แล้วส่งค่ามาก็จะ error กรณีนี้เราทำ json field เลย error ที่ father_name field not found
		public $hasMany =[
        'evaluations' =>[
            'Numthang\Homeschool\Models\Evaluation'        ]
    ];

}
