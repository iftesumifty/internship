<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\choice;
use App\Models\layout;
use App\Models\message;
use App\Models\order;
use App\Models\product;
use App\Models\product1;
use App\Models\re;
use App\Models\re1;
use App\Models\subcategory;
use App\Models\sublayout;
use App\Models\suborder;
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BackendController extends Controller
{
    public function ADD_PUBLICATION()
    {

        $res = re::all();

        return view('two.layout.Add_publication', compact('res'));
    }
    //create publication

//delete publication
public function pub_delete( $id)
{
    $res = re::find($id)->delete();
    return redirect()->back();
}

    public function pubcreate(Request $request)
    {
        $filename ='';
     if($request->hasFile('image')){

        $file =$request->file('image');
        if($file->isValid()){
            $filename=date('ymdhms').rand(1,1000).'.'. $file->getClientOriginalExtension();
           $file->storeAs('profile',$filename);
        }
     }

        re::create([

            'Writer_Name' => $request->Writer_Name,
            'book_name' => $request->book_name,
            'quantity' => $request->quantity,
            'publication' => $request->publication,
            'image'=>$filename,
            'price' => $request->price,


        ]);
        return back();
    }
    //edit pub
    public function pubcreate_edit($id)
    {

        $re = re::find($id);
        return view('two.layout.pubcreate_edit', compact('re'));
    }
    //update
    public function pubcreate_update(Request $request, $id)
    {

        re::find($id)->update([

            'Writer_Name' => $request->Writer_Name,
            'book_name' => $request->book_name,
            'publication' => $request->publication,


        ]);

        return redirect()->route('ADD_PUBLICATION');
    }



    public function login(Request $request)
    {
        $user = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required' => 'the error',
                'email.email' => 'the email format!',
            ]
        );


        if (Auth::attempt($user))

            $roll_id = Auth::user()->roll_id;
        if ($roll_id == 1) {
        $product=product::all()->count();

$category=category::all()->count();
$re1 = re1::all()->count();
$order =order::all()->count();
$re=re::all()->count();

            return view('two.backend',compact('product','category','re1','order','re'));
        }

        if ($roll_id == 2) {
            $product1s = product1::all();
            return view('onefolder.product1view.view',compact('product1s'));
        } else {
            return redirect()->back();
        }
    }






    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
//user admin logout
public function logout1(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function backend()
    {
        $product=product::all()->count();
        // dd($layout);
        $category = category::all()->count();
        //dd($users);
        $re1 = re1::all()->count();
        $order =order::all()->count();
        $re=re::all()->count();
        return view('two.backend',compact('product','category','re1','order','re'));
    }

    //add book for self info
    public function ADD_BOOK()
    {
        $layouts = layout::all();
        // $users =User::all();
        return view('two.layout.ADD_BOOK', compact('layouts'));
    }

    public function book_edit($id)
    {

        $layout = layout::find($id);
        return view('two.layout.book_edit', compact('layout'));
    }
    public function update_book(Request $res, $id)
    {

        layout::find($id)->update([
            'Book_Name' => $res->Book_Name,
            'Writer_Name' => $res->Writer_Name,
            'Department_Name' => $res->Department_Name,
            'Available' => $res->Available,
        ]);

        return redirect()->route('ADD_BOOK');
    }

    public function ADD_BOOKdelete(Request $request, $id)
    { //dd($request);
         $layout = layout::find($id)->delete();
        return redirect()->route('views.two.layout.ADD_BOOK');
    }


    public function user_list_delete(Request $request, $id)
    {
        $sublayout = sublayout::find($id)->delete();
        return redirect()->route('views.two.layout.sublayout.ADD_BOOK');
    }


    public function another(Request $request)
    {
        layout::create([

            'name' => $request->name,
            'Writer_Name' => $request->Writer_Name,
            'Department_Name' => $request->Department_Name,
            'Available' => $request->Available,

        ]);
        return back();
    }


    public function BOOK_REPORT1()
    {
        $layouts = layout::all();
        $sublayouts = sublayout::all();
        return view('two.layout.sublayout.ADD_BOOK', compact('layouts', 'sublayouts'));
    }

    public function subanother(Request $request)
    {
        sublayout::create([

            'Book_Name' => $request->Book_Name,
            'name' => $request->name,
            'Writer_Name' => $request->Writer_Name,
            'Department_Name' => $request->Department_Name,
            'Available' => $request->Available,

        ]);
        return back();
    }


    public function book_edit1($id)
    {
$layout=layout::find($id);
        $sublayout = sublayout::find($id);
        return view('two.layout.book_edit1', compact('sublayout','layout'));
    }
    public function update_book1(Request $res, $id)
    {

        sublayout::find($id)->update([
            'Book_Name' => $res->Book_Name,
            'name' => $res->name,
            'Writer_Name' => $res->Writer_Name,
            'Department_Name' => $res->Department_Name,
            'Available' => $res->Available,
        ]);

        return redirect()->route('BOOK_REPORT1');
    }



    public function product_list()
    {
        $layouts = layout::all();
        $sublayouts = sublayout::all();
        $products = product::all();
        // dd( $layouts, $sublayouts,$products);
        return view('two.layout.product.list', compact('layouts', 'sublayouts', 'products'));
    }

    public function product_add(Request $request)
    {
        //dd($request->all());
        product::create([

            'Book_Naaame' => $request->Book_Naaame,
            'name' => $request->name,
            'Book_Name' => $request->Book_Name,
            'Writer_Name' => $request->Writer_Name,

            'Publisher_Name' => $request->Publisher_Name,
            'Available' => $request->Available,
            'price' => $request->price,

        ]);
        return back();
    }
    //product edit
    public function edit_pro($id)
    {

        $product = product::find($id);
        return view('two.layout.edit_pro', compact('product'));
    }

    public function update_pro(Request $res, $id)
    {

        product::find($id)->update([
            'Book_Naaame' => $res->Book_Naaame,
            'name' => $res->name,
            'Book_Name' => $res->Book_Name,
            'Writer_Name' => $res->Writer_Name,

            'Publisher_Name' => $res->Publisher_Name,
            'Available' => $res->Available,
            'price' => $res->price,


        ]);

        return redirect()->route('product_list');
    }
    public function pro_list_delete($id)
    {
        $product = product::find($id)->delete();
        //$product = product::find($id)->delete();
        return redirect()->back();
    }




    public function admin_login()
    {
        return view('two.admin_login');
    }
    public function  student()
    {

        $users = User::all();
        //dd($users);
        return view('two.layout.student', compact('users'));
    }

    public function student_edit($id)
    {

        $user = User::find($id);
        return view('two.layout.student_edit', compact('user'));
    }
    public function update_user(Request $res, $id)
    {

        user::find($id)->update([
            'name' => $res->name,
            'email' => $res->email,
            'phone' => $res->phone,
            'address' => $res->address,
        ]);

        return redirect()->route('student');
    }

    public function user_delete($id)
    {
        $user = User::find($id)->delete();
        //$product = product::find($id)->delete();
        return redirect()->back();
    }
 


    public function book_report()
    {
        return view('two.layout.book_report');
    }


    //categories as self info
    public function category_list()
    {
        $categories = category::all();
        //dd($users);

        return view('two.layout.category.list', compact('categories'));
    }

    public function cat_add(Request $request)
    {

        category::create([

            'self_no' => $request->self_no,
            'Book_Title' => $request->Book_Title,
            'Writer_Name' => $request->Writer_Name,


        ]);
        return back();
    }

    //here is category edit

    public function edit_cat($id)
    {

        $category = category::find($id);
        return view('two.layout.category.edit', compact('category'));
    }
    //here update subcat
    public function update_cat(Request $res, $id)
    {


        category::find($id)->update([
            'self_no' => $res->self_no,

            'Book_Title' => $res->Book_Title,
            'Writer_Name' => $res->Writer_Name,

        ]);

        return redirect()->route('category_list');
    }
    public function category_delete($id)
    {
        $category = category::find($id)->delete();
        return redirect()->back();

        // $product = product::find($id)->delete();
        //$product = product::find($id)->delete();
        // return redirect()->back();

    }





    //here is sub category means self info

    public function sub_category1_list()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        //dd($users);

        return view('two.layout.subcat.list', compact('categories', 'subcategories'));
    }

    public function sub_category1_add(Request $request)
    {

        subcategory::create([

            'self_no' => $request->self_no,
            'Course_Name' => $request->Course_Name,
            'Book_Title' => $request->Book_Title,
            'Writer_Name' => $request->Writer_Name,
            'SBIC' => $request->SBIC,


        ]);
        return back();
    }

    public function edit_subcat($id)
    {

        $subcategory = subcategory::find($id);
        return view('two.layout.subcat.edit', compact('subcategory'));
    }
    //here update subcat
    public function update_subcat(Request $res, $id)
    {


        subcategory::find($id)->update([
            'self_no' => $res->self_no,
            'Course_Name' => $res->Course_Name,
            'Book_Title' => $res->Book_Title,
            'Writer_Name' => $res->Writer_Name,
            'SBIC' => $res->SBIC,
        ]);

        return redirect()->route('sub_category1_list');
    }


    //here delete sub  library info
    public function subcat_list_delete($id)
    {
        $subcategory = subcategory::find($id)->delete();
        //$product = product::find($id)->delete();
        return redirect()->back();
    }


    //for book self

    public function product1()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        //dd($users);
        $product1s = product1::all();

        return view('two.layout.product1.list', compact('categories', 'subcategories', 'product1s'));
    }

    public function product1_add(Request $request)
    {

        product1::create([

            'self_no' => $request->self_no,
            'Book_Title' => $request->Book_Title,
            'Course_Name' => $request->Course_Name,
            'Edition' => $request->Edition,
            'Writer_Name' => $request->Writer_Name,



        ]);
        return back();
    }

    public function pro_delete( $id)
    {
        $product1 = product1::find($id)->delete();
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $query = $request->input('Book_Name');

        $products = Product::where('query');

        return view('two.layout.product.list', compact('products'));
    }
    //add product delete
    
    //for return
    public function return()
    {

        $re1s = re1::all();
        return view('two.layout.return', compact('re1s'));
    }
    public function re1(Request $request)
    {
     $filename ='';
     if($request->hasFile('image')){

        $file =$request->file('image');
        if($file->isValid()){
            $filename=date('ymdhms').rand(1,1000).'.'. $file->getClientOriginalExtension();
           $file->storeAs('profile',$filename);
        }
     }

        re1::create([

            
            'student_id' => $request->student_id,
            'Writer_Name' => $request->Writer_Name,
            'Book_Name' => $request->Book_Name,
            'image' =>$filename,
            
            
            'pages' => $request->pages,
            'Delivery' => $request->Delivery,
            'Return' => $request->Return,


        ]);
        return back();
    }

    public function edit_return($id)
    {

        $re1 = re1::find($id);
        return view('two.layout.edit.return', compact('re1'));
    }
    //here update return
    public function update_return(Request $res, $id)
    {

        $re1 = re1::find($id);
        $filename ='';
        if($res->hasFile('image')){
   
           $file =$res->file('image');
           if($file->isValid()){
               $filename=date('ymdhms').rand(1,1000).'.'. $file->getClientOriginalExtension();
              $file->storeAs('profile',$filename);
           }
        }
//dd($re1,$filename);
        re1::find($id)->update([

            

            'student_id' => $res->student_id,
            'Book_Name' => $res->Book_Name,
            'image' =>$filename,
            'pages' => $res->pages,
            'Delivery' => $res->Delivery,
            'Return' => $res->Return,
            
        ]);

        return redirect()->route('return');
    }
    public function return_delete( $id)
    {
        $re1 = re1::find($id)->delete();
        return redirect()->back();
    }



    public function order()
    {
        
        //$orders =order::all();
         $suborders =suborder::all();
        return view('two.layout.order.order', compact('suborders'));
    }
    public function order_delete( $id)
    {
        $order = order::find($id)->delete();
        return redirect()->back();
    }

    public function order1()
    {

         $orders =order::all();
        return view('two.layout.order.order1', compact('orders'));
    }
    public function suborder_delete( $id)
    {
        $suborder = suborder::find($id)->delete();
        return redirect()->back();
    }
    //for another backend
    public function dashboard()
    {

         
        return view('two.layout.another');
    }
    //for choice
    public function ch()
    {

         $choice =choice::all();
        return view('two.layout.choice',compact('choice'));
    }

    public function choicecat(Request $request)
    {
        $filename ='';
        if($request->hasFile('image')){
   
           $file =$request->file('image');
           if($file->isValid()){
               $filename=date('ymdhms').rand(1,1000).'.'. $file->getClientOriginalExtension();
              $file->storeAs('profile',$filename);
           }
        }


        choice::create([

            'name' => $request->name,
            'name1' => $request->name1,
            'image' => $filename,
            'price1' => $request->price1,
        ]);
        return back();
    }
    public function choice1( $id)
    {
        $choice = choice::find($id)->delete();
        return redirect()->back();
    }
    //for message
    public function message( )
    {
       return view('two.layout.message.list');
    }
    
    public function messagepass(Request $request )
    {

        message::create([

            'name' => $request->name,
            'email' => $request->email,
           
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        return back();
      
    }

   



}
