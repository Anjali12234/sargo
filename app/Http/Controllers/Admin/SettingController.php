<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\StoreSettingRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
    $setting = setting();
        return view('admin.setting.index',compact('setting'));
    }


    public function store(StoreSettingRequest $request)
    {
        if ($setting = Setting::latest()->first()) {
            if ($request->hasFile('image') && $image = $setting->getRawOriginal('image')) {
                $this->deleteFile($image);
            }

            $setting->update($request->validated());
        } else {
            Setting::create($request->validated());
        }
        Alert::success('Setting added successfully');
        Cache::forget('setting');
        return back();
    }
}
