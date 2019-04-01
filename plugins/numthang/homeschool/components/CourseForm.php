<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Numthang\Homeschool\Models\Course;
use Flash;
require_once './vendor/autoload.php';

class CourseForm extends ComponentBase
{
    public $record;
    public function componentDetails(){
        return [
            'name' => 'Course Form',
            'description' => 'Add homeschool course form'
        ];
    }
		public function onRun() {
      if($this->param('id')) {
        $id = $this->param('id');
        if($id  > 100000) {
          $tmp = Course::where('created_at', date('Y-m-d H:i:s', $id))->get();
          $this->record = $tmp[0];
        }
        else
          $this->record = Course::find($id);
      }
		}
    public function onSave(){
      $validator = Validator::make(
          [
            'name' => Input::get('name'),
            'hs_name' => Input::get('hs_name')
          ],
          [
            'name' => 'required|min:4',
            'hs_name' => 'required|min:4'
          ]
        );

      if($validator->fails()){
        #print_r($validator->errors());
        #return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => $validator->errors()->first('hs_name'), 'type' => 'error'])];
        return Redirect::back()->withErrors($validator);

      }

      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update และไม่ได้กดปุ่ม save as จะส่ง query id ของแผนการศึกษาเข้ามา ให้ค้นหากรองด้วย id ก่อน
        $record = Course::find($this->param('id'));
      else
        $record = new Course();

      #$record->user_id = Input::get('user_id');
      $record->father_profile = json_encode(Array('father_name'=>Input::get('father_name'), 'father_degree'=>Input::get('father_degree'), 'father_exp'=>Input::get('father_exp'), 'father_age'=>Input::get('father_age'), 'father_job'=>Input::get('father_job'), 'father_addr'=>Input::get('father_addr'), 'father_contact'=>Input::get('father_contact')));

      $record->mother_profile = json_encode(Array('mother_name'=>Input::get('mother_name'), 'mother_degree'=>Input::get('mother_degree'), 'mother_exp'=>Input::get('mother_exp'), 'mother_age'=>Input::get('mother_age'), 'mother_job'=>Input::get('mother_job'), 'mother_addr'=>Input::get('mother_addr'), 'mother_contact'=>Input::get('mother_contact')));
      #print_r(post());
      if(Input::get('birth_date')) {
		    $date = explode('/', Input::get('birth_date'));
		    $_POST['birth_date'] = $record->birth_date = $date[2].'-'.$date[1].'-'.$date[0];
		  }
      $record->fill(post());//กำหนด fillable field ใน Models/Course
      $record->save();
      Flash::success('Course '.$record->name.' saved!');
      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update จะส่ง query id ให้แสดง flash message
     		return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => 'Course '.$record->name.' saved!', 'type' => 'success'])];
     	else//ถ้าเป็นการสร้างใหม่ให้ redirect ไป edit
     		return Redirect::to('/login/edit/course/'.$record->id);
    }
    public function onDelete() {
      $record = new Course();
      $record->where('id', '=', $this->param('id'))->delete();
      return Redirect::to('/login/new/course')->with('message', $record->name.' Removed');
    }
}
