<?php

namespace Src\Infra\Routes;

use Src\App\Auth\Controllers\AuthController;

class ApiRoutes {

  private $route;
  private $method;

  public function __construct($pathname = null) {
    $this->route = $pathname;
    $this->method = $_SERVER["REQUEST_METHOD"];

    $this->handler();
  }

  private function handler() {

    try {
      
      if($this->route == 'auth' && $this->method == 'POST') {
        $auth = new AuthController();
        $auth->generate();
      }

      
      throw new \Exception('HTTP/1.1 501 Not Implemented');

    } catch (\Exception $e) {
      header($e->getMessage());
      exit();
    }

  }

}
