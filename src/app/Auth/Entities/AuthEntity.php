<?php  

namespace Src\App\Auth\Entities;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class AuthEntity {

  public function generateToken($key, $payload) {
    return JWT::encode($payload, $key, 'HS256');
  }

  public function decodeToken($jwt, $key) {
    return JWT::decode($jwt, new Key($key, 'HS256'));
  }

}
