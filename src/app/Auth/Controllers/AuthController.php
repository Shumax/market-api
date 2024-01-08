<?php

namespace Src\App\Auth\Controllers;

use Src\App\Auth\Entities\AuthEntity;

class AuthController extends AuthEntity {

  public function generate() {
    try {
      $body = (array) json_decode(file_get_contents('php://input'), TRUE);

      if ($body === null || !isset($body['key']) || !isset($body['payload'])) {
        throw new \Exception('Invalid JSON format or missing keys in the request body.');
      }

      $res = $this->generateToken($body['key'], $body['payload']);

      echo json_encode($res);

    } catch (\Exception $e) {
      header('HTTP/1.1 400 Bad Request');
      echo json_encode(['error' => $e->getMessage()]);
      exit();
    }
  }

  public function verify() {
    try {
      $body = (array) json_decode(file_get_contents('php://input'), TRUE);

      if ($body === null || !isset($body['key']) || !isset($body['token'])) {
        throw new \Exception('Invalid JSON format or missing keys in the request body.');
      }

      $res = $this->decodeToken($body['key'], $body['token']);

      echo json_encode($res);

    } catch (\Exception $e) {
      header('HTTP/1.1 401 Bad Request');
      echo json_encode(['error' => $e->getMessage()]);
      exit();
    }
  }

}
