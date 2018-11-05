<?php

namespace FTW\Http\Controllers\Frontend\V3;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use View;

class HomeController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $viewPath = 'v3';

    public function __construct()
    {
        View::share('categories', \App::make(\FTW\Repositories\Categories\CategoryRepository::class)->getFisrtLevel());
        View::share('postnew',\App::make(\FTW\Repositories\Blogs\BlogRepository::class)->Postnew());
        View::share('besthot',\App::make(\FTW\Repositories\Blogs\BlogRepository::class)->PostHot());
    }

    /**
     * render view
     * @author KingDarkness <nguyentranhoan13@gmail.com>
     * @date   2018-07-06
     * @param  [string]     $template [description]
     * @return [View]               [description]
     */
    protected function render($template = null)
    {
        return view($this->viewPath . '.' . $template);
    }
}
