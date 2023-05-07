<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\book;
use App\Models\category;
use App\Models\choice;
use App\Models\fine;
use App\Models\order;
use App\Models\order11;
use App\Models\product;
use App\Models\product1;
use App\Models\re;
use App\Models\re1;
use App\Models\subcategory;
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

    //frontend fine
    public function fine()
    {
        $fines=fine::all();
        return view('onefolder.layouts.fine',compact('fines'));
    }


    //frontend view
    public function view()
    {
        
        return view('onefolder.product1view.view');
    }



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

    
    
    

    public function book()

    {
        // $res=re::all();
        $books = book::all();
$categories=category::all();
$subcategories=subcategory::all();
$product1s=product1::all();
        return view('onefolder.twofolder.book', compact('categories','subcategories','product1s'));
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

   

    //for placeorder
    public function placeorder(Request $request)

    { // dd($request);
        $Carts = Cart::content();
       // $subtotal =Cart::subtotal();
       $total =Cart::total();
       
       $order11 =order11::create([

           // 'user_id'=> $request->id,
            'name' =>  $request->name,
           
            'email' =>  $request->email,
           
            
            'phone' =>  $request->phone,
            'address' =>  $request->address,
            'total' =>$total,
            
        ]);

        foreach($Carts as $key => $data){
           
            suborder::create([
             'order_id'=>$order11->id,
             'pid'=>$data->id ,
             'name'=>$data->name ,
             'price'=> $data->price,
             'quantity'=>$data->qty ,
             'subtotal'=>$data->qty*$data->price 
            ]);
            
            $choice = choice::where('id',$data->id)->first();
                $choice_quantity = $choice->available -  $data->qty;
                $choice->update([
                    'available'=>$choice_quantity
                ]);
        }
        Cart::destroy();
        return redirect()->route('view')->with('message'," Order Successful");
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
         $choice=choice::find($id);
        
        return view('onefolder.userchoice.detail',compact('choice'));
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
          'price' =>$choice-> price, 
         'weight' => 1, 
         'options' => ['size' => 'large']]);

         return redirect()->back();

    }
    public function checkout1()

    {
        $Carts = Cart::content();
         return view('onefolder.userchoice.invoice',compact('Carts'));
       
    }

   

}
