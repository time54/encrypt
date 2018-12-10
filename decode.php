<?php
  /**rsa解密 *//
  function rsa_decode(aeskey){
      //读取私钥文件
      $private_key = file_get_contents('rsa_private_key.pem');
      openssl_private_decrypt(
        base64_decode(aeskey),
        $decode_result,
        $private_key  
      );
      return $decode_result;
  }
  echo rsa_decode($_POST['aeskey']);