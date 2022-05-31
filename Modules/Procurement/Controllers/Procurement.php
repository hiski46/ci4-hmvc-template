<?php

namespace Modules\Procurement\Controllers;

use App\Controllers\BaseController;

class Procurement extends BaseController
{
    public function index()
    {
        echo view('Modules\Procurement\Views\template\head');
        echo view('Modules\Procurement\Views\procurement');
        echo view('Modules\Procurement\Views\template\foot');
    }
}
