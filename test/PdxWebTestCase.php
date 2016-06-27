<?php

namespace Islandora\Pdx;

use Silex\WebTestCase;
use Islandora\Chullo\Uuid\UuidGenerator;

class PdxWebTestCase extends WebTestCase
{
  public function __construct()
  {
    
  }

  public function createApplication()
  {
    return (require __DIR__.'/../src/app.php');
  }


}
