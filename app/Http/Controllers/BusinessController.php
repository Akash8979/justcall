<?php

namespace App\Http\Controllers;

use App\Events\BusinessCreated;
use App\Repositories\Contracts\UserBusinessRepository;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    private $repository;
    public function __construct(UserBusinessRepository $repository)
    {
        $this->repository = $repository;
    }
    public function registerBusiness(Request $request)
    {

        // $request->validate([
        //     'userId' => ['required'],
        //     'logo' => ['required'],
        //     'title' => ['required'],
        //     'description' => ['required'],
        //     'image' => ['required'],
        // ]);

        $logo = $request->file('businessLogo')->getClientOriginalName();

        $request->file('businessLogo')->move('Db/image/', $logo);

        $image = $request->file('businessImage')->getClientOriginalName();

        $request->file('businessImage')->move('Db/image/', $image);


        $this->repository->createUser($request->all(), $logo, $image);

        event(new BusinessCreated($request->all()));


        return redirect('admin');
    }
    public function getAllBusiness()
    {
        $data = $this->repository->allBusiness();
        //dd($data);
        return view('master/home', ['data' => $data]);
    }
    public function userAllBusiness()
    {
        $data = $this->repository->userBusiness();

        return response()->json(['data' => $data, 'status' => 200,]);
    }
    public function getuserAllBusiness()
    {
        $data = $this->repository->userBusiness();


        return view('master/user_admin', ['data' => $data]);
    }
    public function oneBusiness(Request $request)
    {
        //dd($request->all());
        $data = $this->repository->business($request->id);

        return view('master/businessSingle', ['data' => $data]);
    }
    public function editBusiness(Request $request)
    {
        //dd($request->all());
        $data = $this->repository->business($request->data);

        return response()->json(['data' => $data, 'status' => 200,]);
    }

    public function edit(Request $request)
    {
        //dd($request->all());

        $logo = $request->file('businessLogo')->getClientOriginalName();

        $request->file('businessLogo')->move('Db/image/', $logo);

        $image = $request->file('businessImage')->getClientOriginalName();

        $request->file('businessImage')->move('Db/image/', $image);

        $data = $this->repository->edit($request->all(), $logo, $image);

        return redirect('admin');
        //return response()->json(['data' => $data, 'status' => 200,]);
    }

    public function searchBusiness(Request $request)
    {
        //dd($request->all());
        $data = $this->repository->listBusiness($request->search);

        return response()->json(['data' => $data, 'status' => 200,]);
    }

    public function destroy(Request $request)
    {
        //dd($request->all());
        $data = $this->repository->destroyBusiness($request->data);

        return response()->json(['data' => $data, 'status' => 200,]);
    }
    public function deactive(Request $request)
    {
        //dd($request->all());
        $data = $this->repository->deactiveBusiness($request->data);

        return response()->json(['data' => $data, 'status' => 200,]);
    }
}
