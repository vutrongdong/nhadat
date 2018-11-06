<?php

namespace FTW\Http\Controllers\Frontend\V3;
use FTW\Repositories\Blogs\BlogRepository;

class HomeController extends FrontendController {

	protected $data;

	public function __construct(BlogRepository $blog) {
		$this->data = $blog;
	}

	public function frontend() {
		return view("unexpected.master");
	}
}
