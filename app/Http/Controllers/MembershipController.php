<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function show()
    {
        return Membership::all();
    }

    public function createmember(Request $request)
    {
        return Membership::create([

        'full_name'=>$request->full_name,
        'email'=> $request->email,
        'password'=> $request->password,
        'membership'=>$request->membership

        ]);
    }

    public function pick($id)
    {
        return Membership::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        return Membership::find($id)->update([

        'full_name'=>$request->full_name,
        'email'=> $request->email,
        'password'=> $request->password,
        'membership'=>$request->membership

        ]);
    }

    public function delete($id)
    {
        return Membership::find($id)->delete();
    }
}
