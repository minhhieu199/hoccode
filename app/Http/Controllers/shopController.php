<?php

namespace App\Http\Controllers;
use App\Product;
use App\Setting;
use App\Contact;
use App\Category;
use App\Article;
use Illuminate\Http\Request;

class shopController extends Controller
{
    public function __construct()
    {
        $settings = Setting::first();
        // Chia sẻ dữ qua tất các layout
        $categories = Category::where(['is_active' => 1])->get();
        view()->share([
            'settings' => $settings,
            'categories'=> $categories
        ]);
    }

    //trang chủ
    public function index()
    {
        $data['category'] = Product::where('category_id',1)->take(14)->get();
        $data['categories'] = Category::orderBy('id','desc')->get();

    	return view('shop.index',$data);
    }


    //danh-muc-san-pham
    public function listproduct($id)
    {
        $data['cate'] = Category::Find($id);
        $data['items'] = Product::where('category_id',$id)->orderBy('id','desc')->paginate(3);
    	return view('shop.listproduct',$data);
    }
    //chi-tiết-sản-phẩm
    public function productdetail($id)
    {
        $data['item'] =Product::find($id);
    	return view('shop.product_detail' ,$data);
    }


    //trang liên hệ
    public function contact()
    {
        return view('shop.contact');
    }


    public function postContact(Request $request)
    {
       // validate
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email'
        ]);

        //luu vào csdl
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();

        // chuyển về trang chủ
        return redirect('/');
    }
    public function Article(){
        $articles = Article::where(['is_active'=>1])->get();

        return view('shop.article',[
            'articles' => $articles
        ]);
    }
}
