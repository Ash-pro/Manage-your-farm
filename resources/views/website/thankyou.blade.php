@include('website.layout.header')

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>تم طلبك بنجاح</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide about_Carousel " data-ride="carousel">
                    <ol class="carousel-indicators">
{{--                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="1"></li>--}}
{{--                        <li data-target="#myCarousel" data-slide-to="2"></li>--}}
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="test_box">
                                                <i><img style="width: 300px;border-radius: 50%;" src="{{asset('assets')}}/images/1.jpg" alt="#"/></i>
                                                <h4 style="padding-top: 30px">لقد تلقينا طلبك بنجاج</h4>
                                                <div style="justify-content: center; padding: 80px 10px 10px 10px">
                                                <h1> شكراً لك لتواصلك معنا سيقوم فريق عمل الموقع بالتواصل مع في أقرب وقت لتأكيد طلبك والمباشرة في العمل عليه</h1>
                                                <h2> -  -  لكم منا خالص الحب والتقدير - - </h2>
                                                    <a style="margin: 30px" class=" d_none get_btn btn btn-dark" href="{{route('index')}}"> الرجوع للرئيسية </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@include('website.layout.footer')
