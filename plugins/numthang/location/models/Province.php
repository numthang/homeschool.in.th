<?php namespace Numthang\Location\Models;

use Form;
use Model;
use RainLab\Translate\Classes\Translator;

/**
 * Model
 */
class Province extends Model
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
    public $table = 'numthang_location_provinces';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected static $nameList = null;

    public static function getNameList()
    {
      $translator = Translator::instance();
      $activeLocale = $translator->getLocale();

      if (self::$nameList) {
        return self::$nameList;
      }

      return self::$nameList = self::lists('name_'.$activeLocale, 'id');

      /*if (isset(self::$nameList[$countryId])) {
          return self::$nameList[$countryId];
      }

      return self::$nameList[$countryId] = self::whereCountryId($countryId)->lists('name_th', 'id');*/
    }
    public static function formSelect($name, $selectedValue = null, $options = [])
    {
      return Form::select($name, self::getNameList(), $selectedValue, $options);
    }
    public static function getInfo($id)
    {
      return self::find($id);
    }
}
