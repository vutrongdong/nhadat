<?php

namespace FTW\Http\Controllers\Frontend\V3;

use Illuminate\Http\Request;
// use FTW\Http\Controllers\Controller;
use FTW\Repositories\Categories\CategoryRepository;
use FTW\Repositories\Blogs\BlogRepository;

class FronendController extends HomeController
{
      public function __construct(CategoryRepository $cate , BlogRepository $blog)
    {
        $this->cate = $cate;
        $this->blog = $blog;

        parent::__construct();
    }


    public function index(){
            $data = $this->blog->getForHome();
             return view('v3.home',compact('data'));
    }
    public function detail($id){
            $lateststori = $this->blog->LatestStories();
           $data = $this->blog->getById($id);
           return view('v3.detail',compact('data','lateststori'));
    }

    public function sreach(Request $request){
            $name = $request->input('keyword');
            $result = str_replace(' ','%',$name);
            $sreach = $this->blog->sreach($result);
            return view('v3.sreach',compact('sreach','name'));

    }

    public function category($id,$slug){
          $category_post = $this->blog->category($id);
          return view('v3.category',compact('category_post','slug'));
    }
}
