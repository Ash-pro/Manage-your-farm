@include('website.layout.header')
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
    }
    .mar{
        justify-content: center;
        margin: 20px 10px ;
        padding: 10px;

    }
    .colmar{
        margin-top: 20px;
        justify-content: center;

    }
</style>
<div class="row mar" >
    @foreach($products as $key => $product)
    <div class="col-md-4 colmar" >
        <h1 style="margin-left: 100px">{{$product->name ?? '' }}</h1>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    @foreach($product->photo as $key => $media)
                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                        @foreach($product->photo as $key => $media)
                            <img src="{{ $media->getUrl() }}" alt="Avatar" style="width:300px;height:300px;">
                        @endforeach
                    </a>
                    @endforeach
                </div>
                <div class="flip-card-back" style="padding: 15px">
                    <h1 style="color: yellow">{{ $product->price ?? '' }}</h1>
                    <p>{{ $product->description ?? '' }}</p>
                    @foreach($product->categories as $key => $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
                    @foreach($product->tags as $key => $item)
                        <p>{{ $item->name }}</p>
                    @endforeach
                    <p><a style="margin: 30px 30px 30px 30px; justify-content: center;" class=" d_none get_btn btn btn-dark" href="{{route('product_orders')}}">اطلب المنتج </a></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach



{{--    <div class="col-md-4 colmar">--}}
{{--        <h1>Card Flip with Text</h1>--}}

{{--        <div class="flip-card ">--}}
{{--            <div class="flip-card-inner">--}}
{{--                <div class="flip-card-front">--}}
{{--                    <img src="{{asset('assets')}}/images/img1.jpg" alt="Avatar" style="width:300px;height:300px;">--}}
{{--                </div>--}}
{{--                <div class="flip-card-back">--}}
{{--                    <h1>John Doe</h1>--}}
{{--                    <p>Architect & Engineer</p>--}}
{{--                    <p>We love that guy</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--    <div class="col-md-4 colmar">--}}
{{--        <h1>Card Flip with Text</h1>--}}

{{--        <div class="flip-card">--}}
{{--            <div class="flip-card-inner">--}}
{{--                <div class="flip-card-front">--}}
{{--                    <img src="{{asset('assets')}}/images/img1.jpg" alt="Avatar" style="width:300px;height:300px;">--}}
{{--                </div>--}}
{{--                <div class="flip-card-back">--}}
{{--                    <h1>John Doe</h1>--}}
{{--                    <p>Architect & Engineer</p>--}}
{{--                    <p>We love that guy</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--    </div>--}}
{{--    <div class="col-md-4 colmar">--}}
{{--        <h1>Card Flip with Text</h1>--}}

{{--        <div class="flip-card">--}}
{{--            <div class="flip-card-inner">--}}
{{--                <div class="flip-card-front">--}}
{{--                    <img src="{{asset('assets')}}/images/img1.jpg" alt="Avatar" style="width:300px;height:300px;">--}}
{{--                </div>--}}
{{--                <div class="flip-card-back">--}}
{{--                    <h1>John Doe</h1>--}}
{{--                    <p>Architect & Engineer</p>--}}
{{--                    <p>We love that guy</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


    </div>
    <a style="margin: 30px 30px 30px 550px; justify-content: center;" class=" d_none get_btn btn btn-dark" href="{{route('contact')}}"> تواصل معنا لطلب منتجاتنا </a>

</div>
@include('website.layout.footer')
