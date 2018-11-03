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
        $new_path = "";
        foreach($paths as $path) {
            if(!is_numeric($path)) {
                $new_path .= $path . "/"; 
            }
        }
        return trim($new_path, "/");        
    }

    public function filterPath($path) { 
        $path4 = str_replace('admin/', "", $path);
        return $path4;
    }

}
