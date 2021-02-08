<?php 


namespace Core;
use Core\Router;



class Helpers {
 public static function dnd($data, $dndTitle = ""){
    echo "<pre>";
    echo ($dndTitle ?"- ". $dndTitle . "\n" : "");
     var_dump($data);
    echo "</pre>";
    echo "<br>";
  }
  
  public static function currentPage() {
    $currentPage = $_SERVER['REQUEST_URI'];
    if ($currentPage == PROJECT_ROOT || $currentPage == PROJECT_ROOT . 'home/index') {
      $currentPage = PROJECT_ROOT . 'home';
    }
    return $currentPage;
  }

  public static function getObjectProperties($object) {
    return get_object_vars($object);
  }

  public static function truncate($string, $num) {
    if (strlen($string) >= $num) {
      return join(array_slice(str_split($string), 0, $num)) . " ...";
    } else {
      return $string;
    }

  }

}

 ?>
