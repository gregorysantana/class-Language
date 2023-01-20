<?php
session_start();

class Language {
  private $default_lang = "en_US";
  private $supported_languages = array("en_US", "es_ES");
  private $lang;
  private $translations;

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
    include "translations.php";
    $this->translations = $translations;
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
    return $this->translations[$this->lang][$string];
  }
}

$language = new Language();
