<?php

use Illuminate\Support\Facades\Auth;

test('admin logged in', function () 
{
    $admin = App\Models\Admin::first();

    $credentials = ['username' => $admin->username, 'password' => 'casey'];

    $test = Auth::guard('adminKaba')->attempt($credentials);

    expect($test)->toBeTrue();
});