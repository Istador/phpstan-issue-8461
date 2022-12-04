<?php
class Usage {
  public static function use(\Deprecated $ext) : void {
    var_dump($ext->version);
  }
}
