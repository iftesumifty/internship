<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\choice;
use App\Models\order;
use App\Models\product;
use App\Models\product1;
use App\Models\re;
use App\Models\re1;
use App\Models\suborder;
use App\Models\User;
use Cart;
// use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;
// use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
// use Gloudemans\Shoppingcart\Facades\Cart as FacadesCart;
//use App\Models\User as ModelsUser;
//use Glou\Models\User;


use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class FrontendController extends Controller


{


    public function logout(Request $request)
{
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
}
    public function index()

    {

        return view('onefolder.layouts.index');
    }

    public function  registration()
    {
        return view('onefolder.registration');
    }

    public function  create_user(Request $request)
    {
        //dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password' => Hash::make($request->password)



        ]);
        return redirect()->back();
    }

    //for cart
    public function for($id)

    {
      $re = re::find($id);
        return view('onefolder.forcart.add',compact('re'));
    }

    public function cart_list()

    {
      $Carts = Cart::content();
        return view('onefolder.forcart.check',compact('Carts'));
    }
    //for add cart
    public function cart_add($id)

    {
        $re=re::find($id);
       $cart_add=Cart::add([

        'id' => $re ->id,
        'name' => $re ->book_name ,
         'qty' => 1,
          'price' =>$re-> price, 
         'weight' => 1, 
         'options' => ['size' => 'large']]);

         return redirect()->back();

    }
    
    

    public function book()

    {$res=re::all();
        $books = book::all();
        return view('onefolder.twofolder.book', compact('res'));
    }
    public function flor()

    {

        return view('onefolder.forcart.add');
    }

    //for sreturn
    public function s_returninfo()

    {

        $re1s=re1::all();
        return view('sreturninfo.s_returninfo',compact('re1s'));
    }

    public function checkout()

    {
        $Carts = Cart::content();
        return view('onefolder.forcart.invoice',compact('Carts'));
    }

    //for placeorder
    public function placeorder(Request $request)

    { // dd($request);
        $Carts = Cart::content();
       // $subtotal =Cart::subtotal();
       $total =Cart::total();
       
       $order =order::create([

           // 'user_id'=> $request->id,
            'name' =>  $request->name,
            'Book name' => $request->name1,
            'email' =>  $request->email,
           
            
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'total' =>$total,
            
        ]);

        foreach($Carts as $key => $data){
           
            suborder::create([
             'order_id'=>$order->id,
             'pid'=>$data->id ,
             'name'=>$data->name ,
             'price'=> $data->price,
             'quantity'=>$data->qty ,
             'subtotal'=>$data->qty*$data->price 
            ]);
            
        }
        Cart::destroy();
        return redirect()->route('index');
    }
    public function thnk()

    { 
        return view('onefolder.forcart.thnk');
    }
    //for frontend user
    public function userchoice()

    { 
         $choices=choice::all();
        return view('onefolder.userchoice.list',compact('choices'));
    }
    //for choice details
    public function details1($id)

    { 
        // $re = re::find($id);
         $choices=choice::find($id);
        
        return view('onefolder.userchoice.detail',compact('choices'));
    }

 public function buy()

    { $Carts = Cart::content();
        // $re = re::find($id);
        //  $choices=choice::all();
        
        return view('onefolder.userchoice.buy',compact('Carts'));
    }
    

    public function cart_list1()

    {
        $Carts = Cart::content();
        return view('onefolder.userchoice.buy',compact('Carts'));
    }

    public function cart_add1($id)

    {
        $choice=choice::find($id);
       $cart_add1=Cart::add([

        'id' => $choice ->id,
        'name' => $choice ->name ,
         'qty' => 1,
          'price1' =>$choice-> price1, 
         'weight' => 1, 
         'options' => ['size' => 'large']]);

         return redirect()->back();

    }
    

}
