<?php

namespace App\Exports;
use App\Role;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user= User::all();
        foreach ($user as $key => $Pro){
            $Role = Role::find($user[$key]->role_id);
            $user[$key]->role_id = $Role->name;
    }
        return $user;
    }
    public function headings():array
    {
        return [
            'id',
            'name',
            'email',
            'lastname',
            'phone_number',
            'vai tro',
            'created at',
            'updated at'
        ];
    }
}
