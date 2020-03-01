<?php

/**
 * 
 */
trait fileLogger
{
  
  public function logmessage($message){
    echo $message;
  }

}

class fileStorage
{
  use fileLogger;
}


$a = new fileStorage;
$a->logmessage('hello world');