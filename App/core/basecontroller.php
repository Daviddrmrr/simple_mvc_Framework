<?php
namespace Core;
use Core\Interfaces\controller;

class basecontroller implements controller
{
public function view($model_dirname,$controller_dirnameview,$view_action,$data_params = [])
{
require_once "../App/$model_dirname/views/$controller_dirnameview/$view_action".".php";
}
}