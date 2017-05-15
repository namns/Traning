<?php

namespace App\Http\Middleware;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Application $app, Redirector $redirector, Request $request)
    {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    public function handle($request, Closure $next)
    {
        $locales = config('app.locales');
        $locale = $request->get('_locale');
        if(!is_null($locale) && is_array($locales) && array_key_exists($locale, $locales)){
            app()->setLocale($locale);
            session(['_locale'=>$locale]);
        }elseif(!is_null(session('_locale'))){
            app()->setLocale(session('_locale'));
        }
        return $next($request);
//        $locale = $request->segment(1);
//
//        if ( ! array_key_exists($locale, $this->app->config->get('app.locales'))) {
//            $segments = $request->segments();
//            $segments[0] = $this->app->config->get('app.fallback_locale');
//
//            return $this->redirector->to(implode('/', $segments));
//        }
//
//        $this->app->setLocale($locale);
//
//        return $next($request);
    }
}
