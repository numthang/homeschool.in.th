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

      if($this->param('id'))//ถ้ามีการ update จะส่ง query id เข้ามา
        $course = Course::find($this->param('id'));
      else
        $course = new Course();

      #$course->user_id = Input::get('user_id');
      #$course->name = Input::get('name');
      #print_r(post());
      $course->fill(post());
      $course->save();
      Flash::success('Course '.$course->name.' saved!');
      return Redirect::to('/login/edit/course/'.$course->id);
    }
    public function onDelete() {
      $course = new Course();
      $course->where('id', '=', $this->param('id'))->delete();
      return Redirect::to('/login/add/course')->with('message', $course->name.' Removed');
    }
}
