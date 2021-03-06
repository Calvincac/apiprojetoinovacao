<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {
     /**
     ** The URIs that should be excluded from CSRF verification.
     * @var array
     **/

    protected $except = [
        'cadastro',
        'altera/*',
        'remove/*'
    ];


	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
     */
    	public function handle($request, Closure $next)
	{
		foreach ($this->except as $except) {
            if ($request->is($except)) {
                return $next($request);
            }
        }
		return parent::handle($request, $next);
	}

}
