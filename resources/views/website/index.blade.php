@include('website.layout.header')

<!-- end header -->
<!-- banner -->
<section class="banner_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="text-bg">
                    <h1>مزرعتنا تقدم لكم كافة الخدمات الزراعية</h1>
                    <p><b>
                        يمكنكم الاطلاع على خدماتنا جميعها والتسجيل في اي خدمة تريدونها بسهولة عبر تقديم طلب من احدى خدمات الموقع
                        </b>
                    </p>
                    <a href="{{route('contact')}}">تواصل معنا</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- three_box -->
<div class="three_box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box_text">
                    <figure><img src="{{asset('assets')}}/images/product4.jpg" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <figure><img src="{{asset('assets')}}/images/img2.jpg" alt="#"/></figure>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box_text">
                    <figure><img src="{{asset('assets')}}/images/img3.jpg" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- three_box -->
<!-- hottest -->
<div  class="hottest" >
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-5">
                <div class="titlepage">
                    <h2>ماذا تريد أن تعرف عنا</h2>
                </div>
            </div>
            <div class="col-md-7" >
                <div class="hottest_box justify-content-center">
                    <h2>
                        <b>
                        نحن فريق عمل متكامل متخصصون في مجال تحليل و بناء الأنظمة ،نقدم لكم هذا الموقع في سبيل تيسير تقديم الخدمات الزراعية على صعيد المزارع و المواطن بهدف التوسيع من القطاع الزراعي و زيادة إنتاجيته بطريقة ناجحة حيث تم تصميم شاشات الموقع بشكل سلسل متجاوب مع احتياجات المستخدم بشكل فعال
                        </b>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- end hottest -->
<!-- choose  section -->
<div class="choose " dir="rtl">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="titlepage">
                    <h2 dir="rtl">لماذا تختارنا؟</h2>
{{--                    <p dir="rtl">--}}
{{--                        يوفر لك الموقع الخاص بنا الكثير من الميزات التي تجعلك تختارنا عن غير من المواقع--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row d_flex">
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                <div class="padding_with">
                    <div class="row">
                        <div class="col-md-6 padding_bottom">
                            <div class="choose_box">
                                <i><img src="{{asset('assets')}}/images/icon1.png" alt="#"/></i>
                                <div class="choose_text">
                                    <h3>خدمة ممتازة</h3>
                                    <p>نعطي لك جدوة في الأداء عالية جداً تعطي محصولك قوة عالية في الانتاج</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding_bottom">
                            <div class="choose_box">
                                <i><img src="{{asset('assets')}}/images/icon2.png" alt="#"/></i>
                                <div class="choose_text">
                                    <h3>العمل النظيف</h3>
                                    <p>نحافظ على جمال العمل بشكل ابداعي واخراجه بأفضل شكل ممكن</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding_bottom2">
                            <div class="choose_box">
                                <i><img src="{{asset('assets')}}/images/icon3.png" alt="#"/></i>
                                <div class="choose_text">
                                    <h3>الجودة والموثوقية</h3>
                                    <p>تتميز منتجاتنا بجودة عالية منافسة في السوق الفلسطيني بشكل قوي جداً</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="choose_box">
                                <i><img src="{{asset('assets')}}/images/icon4.png" alt="#"/></i>
                                <div class="choose_text">
                                    <h3>مزارعين خبراء</h3>
                                    <p>لدينا نخبة مميزة من المختصين في النباتات والمزارع وأصحاب الخبرة العالية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="choose_img">
                    <figure><img src="{{asset('assets')}}/images/food.jpg" alt="#"/></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a class="read_more" href="{{route('contact')}}">تواصل معنا</a>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end choose  section -->
<!-- product  section -->
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="titlepage">
                    <h2>منتجاتنا</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                <div class="product_box">
                    <figure><img src="{{asset('assets')}}/images/product1.jpg" alt="#"/></figure>
                    <h3 class="black">خضروات</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                <div class="product_box">
                    <figure><img src="{{asset('assets')}}/images/product2.jpg" alt="#"/></figure>
                    <h3 >حبوب</h3>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 padding_right0">
                <div class="product_box">
                    <figure><img src="{{asset('assets')}}/images/product3.jpg" alt="#"/></figure>
                    <h3>فواكه</h3>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 padding_left0">
                <div class="product_box">
                    <figure><img src="{{asset('assets')}}/images/product4.jpg" alt="#"/></figure>
                    <h3 class="black">فراولة</h3>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 padding_right0">
                <div class="product_box">
                    <figure><img src="{{asset('assets')}}/images/product5.jpg" alt="#"/></figure>
                    <h3 >أسمدة</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product  section -->

@include('website.layout.footer')
