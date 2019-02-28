<?php namespace Numthang\Homeschool\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Numthang\Homeschool\Models\Evaluation;
use Flash;

class EvaluationForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Evaluation Form',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onSave(){
      $validator = Validator::make(
        [
          'name' => Input::get('name'),
        ],
        [
          'name' => 'required|min:4',
        ]
      );

      if($validator->fails()){
        return Redirect::back()->withErrors($validator);
      }

      if($this->param('id') && Input::get('save_as') == 0)//ถ้ามีการ update และไม่ได้กดปุ่ม save as จะส่ง query id ของแผนการศึกษาเข้ามา ให้ค้นหากรองด้วย id ก่อน
        $evaluation = Evaluation::find($this->param('id'));
      else
        $evaluation = new Evaluation();

      $evaluation->fill(post());//กำหนด fillable field ใน Models/Evaluation
      $evaluation->save();
      Flash::success('Evaluation '.$evaluation->name.' saved!');
      if($this->param('id') && Input::get('save_as') == 0)
     		return ['#flash_message' => $this->renderPartial('flash.htm', ['message' => 'Evaluation '.$evaluation->name.' saved!', 'type' => 'success'])];
     	else//ถ้าเป็นการสร้างใหม่ให้ redirect ไป edit
     		return Redirect::to('/login/edit/evaluation/'.$evaluation->id);
    }
    public function onDelete() {
      $evaluation = new Evaluation();
      $evaluation->where('id', '=', $this->param('id'))->delete();
      return Redirect::to('/login/add/evaluation')->with('message', $evaluation->name.' Removed');
    }
}
