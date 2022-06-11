@include('website.layout.header')
<style>
    div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 180px;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.desc {
        padding: 15px;
        text-align: center;
    }
    .mr{
        margin: 30px;
    }
</style>



<div class="row">
    <div class="col-md-12 colmar mr"  >

        @foreach($commonDiseases as $key => $commonDisease)

        <div class="gallery" >
            @if($commonDisease->image)
                <a target="_blank" href="{{ $commonDisease->image->getUrl() }}">
                    <img src="{{ $commonDisease->image->getUrl() }}" alt="Cinque Terre" width="600" height="400">
                </a>
                <div class="desc"> name: {{ $commonDisease->name ?? '' }}</div>
                <div class="desc">
                   Description: {!! $commonDisease->description !!}
                </div>
            @endif
        </div>
        @endforeach





{{--        <div class="gallery">--}}
{{--            <a target="_blank" href="{{asset('assets')}}/images/img2.jpg">--}}
{{--                <img src="{{asset('assets')}}/images/img2.jpg" alt="Forest" width="600" height="400">--}}
{{--            </a>--}}
{{--            <div class="desc">Add a description of the image here</div>--}}
{{--        </div>--}}

{{--        <div class="gallery">--}}
{{--            <a target="_blank" href="{{asset('assets')}}/images/img3.jpg">--}}
{{--                <img src="{{asset('assets')}}/images/img3.jpg" alt="Northern Lights" width="600" height="400">--}}
{{--            </a>--}}
{{--            <div class="desc">Add a description of the image here</div>--}}
{{--        </div>--}}

{{--        <div class="gallery">--}}
{{--            <a target="_blank" href="{{asset('assets')}}/images/img3.jpg">--}}
{{--                <img src="{{asset('assets')}}/images/img3.jpg" alt="Mountains" width="600" height="400">--}}
{{--            </a>--}}
{{--            <div class="desc">Add a description of the image here</div>--}}
{{--        </div>--}}
{{--    </div>--}}


</div>
    <a style="margin: 30px 30px 30px 550px; justify-content: center;" class=" d_none get_btn btn btn-dark" href="{{route('Consult_expert')}}"> استشير خبير </a>


@include('website.layout.footer')
