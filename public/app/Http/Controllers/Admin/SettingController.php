<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    public function update(Request $request)
    {
       if($request->type == 'quotes') {

           $by_q = Setting::where('key', 'by_quotes')->first();
           $by_q->update([
               'value' => $request->by_quotes
           ]);

           $q_h = Setting::where('key', 'qoutes_header')->first();
           $q_h->update([
               'value' => $request->qoutes_header
           ]);

           return back();
       }elseif($request->type == 'faq'){

        $by_q = Setting::where('key', 'faq')->first();

        $data = [];

        foreach ($request->title as $key => $value) {
            $data[$key]['title'] = $value;
            $data[$key]['description'] = $request['description'][$key];
        }

        $by_q->update([
            'value' => json_encode($data)
        ]);

        return back();
       }else{
           $setting = Setting::where('key', $request->key)->first();
           if ($setting) {
               $setting->update([
                   'value' => $request->value
               ]);

               return true;
           } else {
               return false;
           }
       }
    }
}
