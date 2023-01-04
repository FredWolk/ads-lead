<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Cookie;

class ViewService
{
    public function View($data, $name)
    {
        $views = Cookie::get($name);
        if (empty($views)){
            $views[] = $data->id;
            $data->update([
                'views' => $data->views + 1
            ]);
        } else {
            $views = json_decode($views, 1);
            if (!in_array($data->id, $views)){
                $views[] = $data->id;
                $data->update([
                    'views' => $data->views + 1
                ]);
            }
        }
        return Cookie::forever($name, json_encode($views));
    }
}
