<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dg eloquent model
        $data = [
            'nama' => 'Pelanggan pertama',
        ];

        UserModel::where('username', 'customer-1')->update($data);//update data user

        //coba akses model usrmodel
        $user = UserModel::all();//ambil semua data dr table m_user
        return view('user', ['data' => $user]);
    }
}
