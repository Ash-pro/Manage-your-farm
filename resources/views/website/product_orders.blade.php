@include('website.layout.header')

<div class="row" style="background: #4b545c; padding: 10px" dir="rtl">
    <div class="col-md-12" >
        <div class="titlepage">
            <h2 style="align-content: center; padding-top: 30px; ">أطلب المنتج</h2>
        </div>
    </div>
    <div class="col-md-12" dir="rtl">>
        <form id="request" method="post" action="{{route('product_orders_store')}}" class="main_form">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-9 ">
                    <input class="contactus" required placeholder="أدخل اسمك" type="type" name="client_name">
                </div>
                <div class="col-md-9 ">
                    <input class="contactus" required placeholder="أدخل رقم الهاتف" type="number" name="client_phone">
                </div>
                <div class="col-md-9">
                    <input class="contactus" required placeholder="أدخل عنوانك " type="text" name="client_address">
                </div>
                <div class="col-md-9">
                    <input class="contactus" required placeholder="أدخل عدد المنتجات" type="number" name="product_count">
                </div>
                <div class="col-md-9">
                    <select name="product_id" required id="" class="contactus">
                        <option value="1">اختر المنتج</option>
                        @foreach($products as $product)
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                </div>

{{--                <div class="col-md-9">--}}
{{--                    <textarea class="contactus1" name="message" placeholder="Message" type="type" ></textarea>--}}
{{--                </div>--}}
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <button class="send_btn">أرسل</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('website.layout.footer')
