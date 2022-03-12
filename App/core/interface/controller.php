<?php
namespace Core\Interfaces;

interface controller
{

public function view($model_dirname,$controller_dirnameview,$view_action,$data_params = []);

}