<?php

namespace UniSharp\LaravelFilemanager\Events;

use Intervention\Image\Facades\Image;

class ImageWasUploaded
{
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
        $this->resizeAfterUploaded();
    }
    public function resizeAfterUploaded() {
      $original_image = Image::make($this->path);
      $original_width = $original_image->width();
      $original_height = $original_image->height();

      // FIXME size should be configurable
      if ($original_width > 1200) {
          $ratio = 1200 / $original_width;
          $width = $original_width * $ratio;
          $height = $original_height * $ratio;
      } else {
          $width = $original_width;
          $height = $original_height;
      }

      if ($height > 900) {
          $ratio = 900 / $original_height;
          $width = $original_width * $ratio;
          $height = $original_height * $ratio;
      }
      Image::make($this->path)->resize($width, $height)->save();
    }
    /**
     * @return string
     */
    public function path()
    {

        return $this->path;
    }
}
