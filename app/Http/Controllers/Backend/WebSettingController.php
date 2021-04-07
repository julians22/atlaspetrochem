<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\WebSetting;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.setting.index', ['settings' => WebSetting::all()]);
    }

    public function update_bulk(Request $request)
    {
        $data = $request->except('_token', '_method');

        foreach ($data as $setting => $value) {
            WebSetting::find($setting)->update([
                'value' => $value
            ]);
        }

        return redirect()->route('admin.setting.index')->withFlashSuccess('Website Setting success updated');
    }
}
