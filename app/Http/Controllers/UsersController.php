<?php

namespace App\Http\Controllers;
use App\Exports\UsersExport;
use App\User;
use App\Role;
use Hash;
use DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UsersController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Users = User::all();
        $Roles = Role::all();
        return view('page.users.users', compact('Users', 'Roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
        //     DB::beginTransaction();
        //     $userCreate = User::create([
        //         'lastname' => $request->lastname,
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => Hash::make($request->password),
        //         'phone_number' => $request->phone_number,

        //     ]);

        //     $userCreate->roles()->attach($request->roles);

        //     DB::commit();
        //     // return redirect()->route(user.index);
        // }catch(Exception $exception){
        //     DB::rollBack();
        // }
        //
        $Users = new User;
        $Users->lastname = $request->input('lastname');
        $Users->name = $request->input('name');
        $Users->password = Hash::make($request->input('password'));
        $Users->email = $request->input('email');
        $Users->phone_number = $request->input('phone_number');
        $Users->role_id = $request->input('role_id');
        $Users->save();



        // $roles = $request->roles;
        // foreach($roles as $roleId){
        //     DB::table('roles_users')->insert([
        //         'user_id' => $userCreate->id,
        //         'role_id' => $roleId
        //     ]);
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $Users = User::find($id);
        $Users->lastname = $request->input('lastname');
        $Users->name = $request->input('name');
        $Users->password = Hash::make($request->input('password'));
        $Users->email = $request->input('email');
        $Users->phone_number = $request->input('phone_number');
        $Users->role_id = $request->input('role_id');
        $Users->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Users = User::find($id);
        $Users->delete();
        return redirect('users');
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'User.xlsx');
    }
}
