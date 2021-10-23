<?php

namespace App\Http\Controllers;
use App\Account;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index() {

        $acc = Account::orderBy('acct_name')->get();

        return view('pages.account', ['accounts'=>$acc]);
    }
}
