<?php

namespace FTW\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
	/**
	 * This namespace is applied to your controller routes.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'FTW\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @return void
	 */
	public function boot() {
		//

		parent::boot();
	}

	/**
	 * Define the routes for the application.
	 *
	 * @return void
	 */
	public function map() {
		$this->mapApiRoutes();

		$this->mapWebRoutes();

		// $this->mapFrontendV1Routes();
		$this->mapFrontendV3Routes();
	}

	/**
	 * Define the "web" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapWebRoutes() {
		Route::middleware('web')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
	}

	/**
	 * Define the "api" routes for the application.
	 *
	 * These routes are typically stateless.
	 *
	 * @return void
	 */
	protected function mapApiRoutes() {
		Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace . '\API')
			->group(base_path('routes/api.php'));
	}

	/**
	 * Define the "frontend v1" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	// protected function mapFrontendV1Routes()
	// {
	//     Route::middleware('web')
	//          ->namespace($this->namespace . '\Frontend\V1')
	//          ->group(base_path('routes/frontend_v1.php'));
	// }
	/**
	 * Define the "frontend v1" routes for the application.
	 *
	 * These routes all receive session state, CSRF protection, etc.
	 *
	 * @return void
	 */
	protected function mapFrontendV3Routes() {
		Route::middleware('web')
			->namespace($this->namespace . '\Frontend\V3')
			->group(base_path('routes/frontend_v3.php'));
	}
}
