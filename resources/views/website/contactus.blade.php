@include('website.layout.header')
<div class="row" style="background: #4b545c; padding: 10px">
<div class="col-md-12" >
    <div class="titlepage" >
        <h2 >تواصل معنا</h2>
    </div>
</div>
<div class="col-md-12" dir="rtl">
    <form id="request" method="post" action="{{route('contact_store')}}" class="main_form">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-md-3 ">
                <input class="contactus" placeholder="أدخل أسمك ثلاثي" type="type" name="name">
            </div>
            <div class="col-md-3">
                <input class="contactus" placeholder="الإيميل الخاص بك" type="type" name="email">
            </div>
            <div class="col-md-3">
                <input class="contactus" placeholder="رقم الجوال" type="type" name="phone">
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <ul class="social_icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-8">
                <textarea class="contactus1" name="message" placeholder="اكتب رسالتك لنا هنا" type="type" ></textarea>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <button class="send_btn">أرسل</button>
            </div>
        </div>
    </form>
</div>
</div>
@include('website.layout.footer')
