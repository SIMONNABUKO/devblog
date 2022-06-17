<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Image;

class SettingsController extends Controller
{
    public function uploadImage($image, $path, $width, $height)
    {
        $new_image_name = date('YmdHis').$image->getClientOriginalName();
        $resized_image = Image::make($image)->resize($width, $height);
        $resized_image->save($path.$new_image_name, 80);
        return $new_image_name;
    }
    public function index()
    {
        $settings = Setting::latest()->first();
        return view('dashboard.admin.settings.index', compact('settings'));
    }

    public function edit()
    {
        $settings = Setting::latest()->first();
        return view('dashboard.admin.settings.edit', compact('settings'));
    }

    public function update(Request $request)
    {
        $settings = Setting::latest()->first();
        $profile_image = null;

        if ($settings) {
            $profile_image = $settings->profile_image;

            if ($request->has('profile_image')) {
                //upload the image
                $path = 'storage/admin/profile/';
                $profile_image = $this->uploadImage($request->profile_image, $path, 200, 200);
            }
            $data = $request->all();
            $data['profile_image'] = $profile_image;
            $settings->update($data);
            toastr()->success('Settings updated successfully', 'Sucess');
            return back();
        }

        if ($request->has('profile_image')) {
            //upload the image
            $path = 'storage/admin/profile/';
            $profile_image = $this->uploadImage($request->profile_image, $path, 200, 200);
        }
        $data = $request->all();
        $data['profile_image'] = $profile_image;
        Setting::create($data);
        toastr()->success('Settings saved successfully', 'Sucess');
        return back();
    }
}
