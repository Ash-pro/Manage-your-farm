<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgriculturalProjectRequest;
use App\Http\Requests\StoreAskConsultationRequest;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\StoreRequestAServiceRequest;
use App\Models\AgriculturalProject;
use App\Models\AskConsultation;
use App\Models\CommonDisease;
use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\OdersProtect;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\RequestAService;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('website.index');

    }
    public function contact(){
        return view('website.contactus');

    }
    public function contact_store(Request $request){
        $contactUs = ContactUs::create($request->all());
        return view('website.thankyou');

    }
    public function thankyou(){
        return view('website.thankyou');

    }
    public function farming_project(){
        return view('website.farming_project');

    }
    public function farming_project_store(Request $request){
        $agriculturalProject = AgriculturalProject::create($request->all());
        return view('website.thankyou');

    }
    public function products(){
        $products = Product::with(['categories', 'tags', 'media'])->get();

        $product_categories = ProductCategory::get();

        $product_tags = ProductTag::get();
        return view('website.products', compact('product_categories', 'product_tags', 'products'));

    }
    public function product_orders(){
        $products = Product::with(['categories', 'tags', 'media'])->get();
        return view('website.product_orders',compact('products'));

    }
    public function product_orders_store(Request $request){
        $requestAService = OdersProtect::create($request->all());
        return view('website.pay');

    }
    public function garden(){
        $galleries = Gallery::with(['media'])->get();

        return view('website.garden', compact('galleries'));

    }
    public function request_garden(){

        return view('website.request_garden');

    }
    public function request_garden_store(Request $request){
        $requestAService = RequestAService::create($request->all());
        return view('website.pay');

    }
    public function common_diseases(){
        $commonDiseases = CommonDisease::with(['media'])->get();
        return view('website.common_diseases', compact('commonDiseases'));

    }

    public function Consult_expert(){

        return view('website.Consult_expert');

    }
    public function Consult_expert_store(Request $request){
        $askConsultation = AskConsultation::create($request->all());
        return view('website.thankyou');

    }



}
