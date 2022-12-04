<?php
class Usage {
  public static function use(\Latest $ext) : void {
    var_dump($ext->version);
  }
}
