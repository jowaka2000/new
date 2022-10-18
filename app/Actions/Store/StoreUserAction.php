<?php

namespace App\Actions\Store;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class StoreUserAction
{
    public function execute(CreateUserRequest $request){

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'password'=>Hash::make($request->password),
        ]);

        $search_id = now()->diffInMicroseconds().'dkd'.$user->id.'dads'.now()->diffInMicroseconds().now()->diffInMinutes();

        $search_id=Crypt::encrypt($search_id);

        $user->update(['search_id'=>$search_id]);

    
        return $user;
    }
}
