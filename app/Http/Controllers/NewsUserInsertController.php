<?php
/**
 * Created by PhpStorm.
 * User: Misha
 * Date: 7/11/2019
 * Time: 4:50 AM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use Illuminate\Support\Facades\Hash;

class NewsUserInsertController extends Controller
{
    public function insertform(){
        return view('user_create');
    }
    public function insert(Request $request){
        $email = $request->input('email');
        $username = $request->input('email');
        $password = Hash::make($request->input('password'));
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $middle_name = $request->input('middle_name');
        $birth_date = $request->input('birth_date');
        $photo = $request->input('photo');
        $data = array('email'=>$email,'username'=>$username,
            'password'=>$password,'first_name'=>$first_name,
            'last_name'=>$last_name,
            'middle_name'=>$middle_name,
            'birth_date'=>$birth_date,
            'photo'=>$photo
            );
        DB::table('news_users')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert_user">Click Here</a> to go back.';
    }
}