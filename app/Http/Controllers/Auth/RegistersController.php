<?php

namespace App\Http\Controllers\Auth;

use App\Actions\Store\StoreUserAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index(){

       return view('auth.register.text-index');
    }

    public function store(CreateUserRequest $request,StoreUserAction $storeUserAction){

        $user = $storeUserAction->execute($request);

        //send email
        return to_route('login');
    }
}
