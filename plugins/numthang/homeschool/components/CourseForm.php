<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Numthang\Homeschool\Models\Course;
use Flash;

class CourseForm extends ComponentBase
{
    public function componentDetails(){
        return [
            'name' => 'Course Form',
            'description' => 'Add homeschool course form'
        ];
    }

    public function onSave(){
      $validator = Validator::make(
            [
                'name' => Input::get('name')
            ],
            [
                'name' => 'required|min:5'
            ]
        );

      if($validator->fails()){
        return Redirect::back()->withErrors($validator);
      }
      $course = new Course();
      #print_r($course);
      $course->user_id = Input::get('user_id');
      $course->name = Input::get('name');
      #$course->introduction = Input::get('introduction');
      $course->save();
      Flash::success('Course '.$course->name.' added!');
      return Redirect::back();
    }
}
