<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller fro the saluation message
 */

class HelloWorldController extends ControllerBase{
    /**
     * Hello World drupal
     * return array
     */

    public function helloWorld(){
      return [
        '#markup'=> $this.t('Hello World Drupal 9'),
      ];
    }
}
