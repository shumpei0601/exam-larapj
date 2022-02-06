<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Carbon\Carbon;


class ManagementController extends Controller
{
    public function management(Request $request)
    {
        $items = Contact::all();
        //$items = Contact::paginate(2);
        $param = [
            'fullname' => '',
            'gender' =>'',
            'created_at' => '',
            'email' => ''
        ];
        return view('management', compact('items', 'param'));
    }

    public function search(Request $request)
    {
        
        //$lastname = $request->lastname;
        $fullname = $request->fullname;
        $gender = $request->gender;
        $created_at = $request->created_at;
        $email = $request->email;
        $items = Contact::where('fullname', $fullname)->orWhere('gender', $gender)->orwhereDate('created_at', $created_at)->orWhere('email', $email)->get();
        return view('management', compact('fullname', 'gender', 'created_at', 'email', 'items'));
        //ページネーション
        //$items = Contact::paginate(2);
        
            //ページネーション
            //$items = $query->pagenate(2);
    }
    public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/management');
    }

}
