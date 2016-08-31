<?php

namespace App\Repositories;

use App\User;
//use Doctrine\Common\Collections\Collection;
use Illuminate\Http\Request;
use DB;

class UserRepository
{

    public function insertUser(Request $request)
    {
        $challenge = (string)$request->input('challenge');
        $uamip = (string)$request->input('uamip');
        $uamport = (string)$request->input('uamport');
        $url = "http://{$uamip}:{$uamport}/login?userurl=http://google.com&challenge={$challenge}";
        $branchTmp = explode('-', $request->input('branch'));

        $user = new User;
        $user->userName = $request->input('userName');
        $user->userAccount = $request->input('userAccount');
        $user->branch = $branchTmp[0];
        $user->branchCode = $branchTmp[1];
        $user->loginTime = (string)date('r', strtotime('+8 hours'));

        $user->save();
        return $url;
    }
}

