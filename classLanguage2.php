<?php
session_start();
require_once 'meekrodb.2.3.class.php';

DB::$user = 'usuario';
DB::$password = 'password';
DB::$dbName = 'nombre_basededatos';

class Language {
  private $default_lang = "en_US";
  private $supported_languages = array("en_US", "es_ES");
  private $lang;

  public function __construct() {
    if (isset($_SESSION['lang'])) {
      if (in_array($_SESSION['lang'], $this->supported_languages)) {
        $this->lang = $_SESSION['lang'];
      } else {
        $this->lang = $this->default_lang;
      }
    } else {
      $this->lang = $this->default_lang;
    }
  }

  public function setLanguage($lang) {
    if (in_array($lang, $this->supported_languages)) {
      $_SESSION['lang'] = $lang;
      $this->lang = $lang;
    }
  }

  public function getLanguage() {
    return $this->lang;
  }

  public function translate($string) {
    $results = DB::queryFirstRow("SELECT translation FROM translations WHERE lang=%s and key_name=%s", $this->lang, $string);
    return $results['translation'];
  }
}

$language = new Language();
