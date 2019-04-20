<?php

namespace FTW\Http\Controllers\API;

use FTW\Http\Controllers\Controller;
use FTW\Http\Requests\EditBlogRequest;
use FTW\Http\Requests\StoreBlogRequest;
use FTW\Http\Resources\Blog as BlogResource;
use FTW\Repositories\Blogs\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller {
	/**
	 * BlogController constructor.
	 * @param BlogRepository $blog
	 */
	public function __construct(BlogRepository $blog) {
		$this->model = $blog;
	}

	public function getImage() {
		return $this->image ? asset($this->imgPath . '/' . $this->image) : 'http://via.placeholder.com/1024x500';
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$this->authorize('blog.view');
		return BlogResource::collection($this->model->getByQuery($request->all()));
	}
	/**
	 * display listing blog in page home
	 */

	public function blogHome(Request $request) {
		return BlogResource::collection($this->model->getForHome());
	}
	public function getBlogHot(Request $request) {
		return BlogResource::collection($this->model->PostHot());
	}

	/**
	 * Display a  resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show(Request $request, $id) {
		$model = $this->model->getById($id);
		$this->authorize('blog.view', $model);
		return new BlogResource($model);
	}

	public function showBySlug(Request $request, $id) {
		$model = $this->model->getBySlug($id);
		$this->authorize('blog.view', $model);
		return new BlogResource($model);
	}
	public function blogSearch(Request $request, $value) {
		return BlogResource::collection($this->model->search($value));
	}

	public function getByCategory(Request $request, $cid) {
		$model = $this->model->getByCategory($cid);
		$this->authorize('blog.view', $model);
		return response()->json(['values' => $model]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \FTW\Http\Requests\StoreBlogRequest $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreBlogRequest $request) {
		$this->authorize('blog.create');
		$request->validated();
		return new BlogResource($this->model->store($request->all()));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \FTW\Http\Requests\EditBlogRequest $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(EditBlogRequest $request, $id) {
		$this->authorize('blog.update', $this->model->getById($id));
		$request->validated();
		return new BlogResource($this->model->update($id, $request->all()));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$this->authorize('blog.delete', $this->model->getById($id));
		$this->model->delete($id);
		return response()->json([], is_null($rs) ? 422 : 200);
	}

	public function uploadImage(Request $request) {
		try {
			$this->validate($request, [
				'files.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
				'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
			], [
				'files.*.image' => 'File upload không đúng định dạng',
				'files.*.mimes' => 'File upload phải là 1 trong các định dạng: :values',
				'files.*.max' => 'File upload không thể vượt quá :max KB',
				'file.image' => 'File upload không đúng định dạng',
				'file.mimes' => 'File upload phải là 1 trong các định dạng: :values',
				'file.max' => 'File upload không thể vượt quá :max KB',
			]);
			if ($request->file('file')) {
				$image = $request->file('file');
			} else {
				$image = $request->file('files')[0];
			}
			if ($request->input('resize')) {
				return $this->model->upload($image);
			}
			return $this->model->upload($image, false);
		} catch (\Illuminate\Validation\ValidationException $validationException) {
			return response(['data' => [
				'errors' => $validationException->validator->errors(),
				'exception' => $validationException->getMessage(),
			]])->json($data, 422);
		}
	}
}