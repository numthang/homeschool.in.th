<?php namespace Numthang\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;
use Rainlab\User\Models\User as UserModel;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function boot() {
      UserModel::extend(function($model) {
        $model->addFillable([
          'website', 
          'facebook', 
          'line',
          'status'
        ]);
      });
      UsersController::extendFormFields(function($form, $model, $context) {
        $form->addTabFields([
          'website' => [
            'label' => 'Website',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'facebook' => [
            'label' => 'Facebook',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'line' => [
            'label' => 'Line',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ], 
          'status' => [
            'label' => 'Status',
            'type' => 'text',
            'tab' => 'rainlab.userplus::lang.tab.profile'
          ]
        ]);
      });
    }
}
