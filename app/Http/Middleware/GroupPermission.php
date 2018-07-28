<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GroupPermission {

    public function handle($request, Closure $next) {
        $id = Auth::user()->group_id;
        $permissions = \App\Group::where("id", $id)->pluck("permissions")->first();
        $permissions_array = json_decode($permissions);
        $path = $request->path();
        $final_path = $this->filterPath($path);
        $compared_path = $this->checkNumber($final_path);
        if (!in_array($compared_path, $permissions_array)) {
            abort(500);
        }
        return $next($request);
    }

    public function checkNumber($path) {
        $paths = explode("/", $path);
        if (is_numeric(end($paths))) {
            array_pop($paths);
            $path = implode("/", $paths);
            $this->checkNumber($path);
        }
        return $path;
    }

    public function filterPath($path) { 
        $path4 = str_replace('admin/', "", $path);
        return $path4;
    }

}
