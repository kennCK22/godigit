<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuSettings;
use DB;

class MenuSettingsController extends APIController
{
  function __construct(){
    $this->model = new MenuSettings();
  }
}
