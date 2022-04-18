<?php

namespace Gomee\Ecommerce\Controllers\Admin;

use Gomee\Controllers\Modules\AdminController;

use Illuminate\Http\Request;
use Gomee\Helpers\Arr;

class TestController extends AdminController
{
    protected $module = 'tests';

    protected $moduleName = 'Test';

    protected $flashMode = true;

    protected $package = 'ecommerce';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->repository = $repository;
        
        $this->init();
    }

    public function getTestView(Request $request)
    {
        return $this->viewModule('demo', ['name' => $request->name]);
    }

}
