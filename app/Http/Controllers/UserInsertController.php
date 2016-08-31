<?php


namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserInsertController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function insertform()
    {
        return view('userCreate');
    }

    public function insert(Request $request)
    {
        $url = $this->userRepository->insertUser($request);
        return redirect($url);
    }
}
