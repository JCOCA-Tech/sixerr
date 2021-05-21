<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserService;
use Illuminate\Support\Str;

class UserServicesController extends Controller
{
    public function index()
    {
        //$userServices = UserService::all();
        $userServices = UserService::orderBy('created_at','desc')->get();
        //$userServices = DB::select('select *from userServices;');
        return view('userServices.index')->with('userServices',$userServices);
    }
    public function create()
    {
        return view('userServices.create');
    }
    public function store(Request $request)
    {
        //TODO archive function @UserServicesController
    }
    public function show($id)
    {
        $userService = UserService::find($id);
        return view('userServices.show')->with('userService', $userService);
    }
    public function edit($id)
    {
        // TODO edit function @UserServicesController
    }
    public function update(Request $request, $id)
    {
        // TODO update function @UserServicesController
    }
    public function destroy($id)
    {
        // TODO delete function @UserServicesController
    }
    public function search(Request $request)
    {
        $key = Str::lower(trim($request->get('query')));

        $posts = UserService::query()
            ->where('title', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }
}
