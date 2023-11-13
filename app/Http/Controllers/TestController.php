<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use Illuminate\Support\Facades\DB;

use App\Models\Accounts;

class TestController extends Controller
{
    public function test():View
    {
        $accounts = DB::select("select * from accounts");
        
        //Todo Log-Ausgabe
        //var_dump($accounts);
        //die();
                
        foreach ($accounts as $key => $value) {
            echo $value->id."<br>";
        }

        $account = DB::select("select * from accounts where id=:id", ['id'=>3]);
        
        foreach($account as $acc)
        {
            echo $acc->email;
        }

        //Insert
        $sql = 'insert into accounts (id, firstname, surename, email, girokonto_id, sparbuch_id) values (?,?,?,?,?,?)';
        $insert = DB::insert($sql, ['', 'Ivan', 'Gartsev', 'ivan@gartsev.de', '','']);
        //Update
        $sql = 'update accounts set email = test@test.de where id=?';
        $update = DB::update($sql,[2]);
        //Delete
        $sql = 'delete from users where id=?';
        $delete = DB::delete($sql, [2]);
        
        return view('test-db');
    }

    public function getAccounts():View
    {

        $accounts = Accounts::where('id',2)->take(10)->get();

        //foreach($accounts as $account)
        foreach(Accounts::all() as $account)
        {
            echo $account->email."<br>";
        }


        //Insert
        $acc = new Accounts();
        $acc->firstname = 'Ivan';
        $acc->email = 'test@test.de';
        //$acc->
        //$acc->
        $acc->save();
        //Update
        $acc = new Accounts::find(2);
        $acc->firstname = 'Email';
        $acc->email ='test@test.de';
        $acc->save();
        //Delete
        $acc = new Accounts::find(2);
        $acc->delete();

    }
}
