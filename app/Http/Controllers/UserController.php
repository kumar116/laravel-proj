<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Yaml;

use App\Http\Controllers\Controller;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list() {

        $yamlContents = Yaml::parse(file_get_contents(base_path() . ‘/forms/user.yaml’));

        dd($yamlContents);

        return 'Soumya';
    }


}
