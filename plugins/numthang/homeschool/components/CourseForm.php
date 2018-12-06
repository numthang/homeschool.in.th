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
                'name' => Input::get('name'),
                'email' => Input::get('email')
            ],
            [
                'name' => 'required|min:5',
                'email' => 'required|email'
            ]
        );

      if($validator->fails()){
          return Redirect::back()->withErrors($validator);
      }
      $course = new Course();
      $course->name = Input::get('name');
      $course->introduction = Input::get('introduction');
      $course->save();
      Flash::success('Course added!');
      return Redirect::back();
    }
}
