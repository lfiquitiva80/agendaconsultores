<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\User;

class UsersExport implements FromView
{
    public function view(): View
    {

    	//dd(User::all());
        return view('excel.users', [
            'users' => User::all()
        ]);
    }
}