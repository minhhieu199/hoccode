<?php

namespace App\Http\Controllers;
use App\setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Setting::first();

        return view('admin.setting.index', [
            'setting' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate
        $request->validate([
            'company' => 'required|max:255',
        ]);

        $setting = Setting::findorFail($id); // object
        $setting->company = $request->input('company');
        $setting->phone = $request->input('phone');
        $setting->hotline = $request->input('hotline');
        $setting->address = $request->input('address');
        $setting->address2 = $request->input('address2');
        $setting->tax = $request->input('tax');
        $setting->facebook = $request->input('facebook');
        $setting->email = $request->input('email');
        $setting->introduce = $request->input('introduce');
        $setting->summary = $request->input('summary');
        if ($request->hasFile('new_image')) {
            // x??a file c??
            @unlink(public_path($setting->image));
            // get file m???i
            $file = $request->file('new_image');
            // get t??n
            $filename = time().'_'.$file->getClientOriginalName();
            // duong dan upload
            $path_upload = 'uploads/setting/';
            // upload file
            $request->file('new_image')->move($path_upload,$filename);

            $setting->image = $path_upload.$filename;
        }

        $setting->save();

        // chuyen dieu huong trang
        return redirect()->route('admin.setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
