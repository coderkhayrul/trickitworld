<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = User::where('status', 1)->where('id', Auth::id())->first();
        return view('admin.profile.view', compact('profile'));
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
        $profile = User::where('status', 1)->where('id', Auth::id())->first();
        return view('admin.profile.edit', compact('profile'));
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
        $id = $request->id;

        $profile = User::findOrFail($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->gender = $request->gender;
        $profile->profession = $request->profession;
        $profile->address = $request->address;

        $profile->update();

        $notification =  array(
            'message' => 'Admin Profile Update Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('profile.index')->with($notification);
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

    public function profileImageUpdate(Request $request)
    {
        $this->validate($request, [
            'profile_image' => 'required',
        ]);

        $id = $request->id;
        $old_image = $request->old_image;



        if ($request->profile_image) {
            // Profile Image
            $profile_image = $request->file('profile_image');
            $make_name = hexdec(uniqid()) . '.' . $profile_image->getClientOriginalExtension();
            if ($old_image != NULL) {
                unlink($old_image);
            }
        }

        Image::make($profile_image)->resize(600, 600)->save('upload/profile/' . $make_name);
        $profile_image = 'upload/profile/' . $make_name;

        $profile = User::findOrFail($id);
        $profile->profile_image = $profile_image;
        $profile->update();

        $notification =  array(
            'message' => 'Admin Profile Image Updated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }
}
