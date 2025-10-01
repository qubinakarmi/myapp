<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\Test;
use App\Models\Seller;
use App\Models\Product;


class UserController extends Controller
{
function add(Request $request){

    $users= new Register();
    $users->name=$request->name;
    $users->email=$request->email;
    $users->city=$request->city;
       if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $users->image_path = 'images/' . $imageName;
    }

 

     if( $users->save())
        {

         return redirect('user-list');
     }
     else{
         return 'user regsiter unsuccessfull';
     }
}

function list()
{
    
    $users=Register::paginate(4);
    return view('user-list',['users'=>$users]);
}

function delete($id)
{
    $users=Register::destroy($id);

    if($users){

 return redirect('user-list');
    }
    else{

        return 'user was not deleted';
    }
   
}

function edit($id)
{
$users=Register::find($id);
 return view('edit',['users'=>$users]);
}



function editlist(Request $request ,$id)

{
$users=Register::find($id);
$users->name=$request->name;
$users->email=$request->email;
$users->city=$request->city;

 if ($request->hasFile('image')) {
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        $users->image_path = 'images/' . $imageName;
    }

if($users->save()){

    return redirect('user-list');
}

else
{
    return "user edit was unsuccessful";
}
}


function search(Request $request)
{
 $SearchData=Register::where('name','like',"%$request->search%")->paginate(4);
 return view('user-list',['users'=>$SearchData,'search'=>$request->search]);


}


function deleteMultiple(Request $request)
{
 $users=Register::destroy($request->ids);
    return redirect('user-list');
}



function testlist()
{

    $user=Register::all();
    return $user;
}




function seller()

{
 return Seller::find(1)->productData;
    
}

function sellerMany()

{
 return Seller::find(1)->productMany;
    
}

function ManyTofunction()
{
$data=Product::find(1)->with('sellerData')->get();
return $data;
}



function bind(Register $key)

{
return Register::all();
}



}


