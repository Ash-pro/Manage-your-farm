@include('website.layout.header')

<div class="row" style="background: #4b545c; padding: 10px" dir="rtl">
    <div class="col-md-12" >
        <div class="titlepage">
            <h2 style="align-content: center; padding-top: 30px; ">استشير خبير</h2>
        </div>
    </div>
    <div class="col-md-12" dir="rtl">>
        <form id="request" method="post" action="{{route('Consult_expert_store')}}" class="main_form">
            @csrf
            @method('post')
            <div class="row">
                <div class="col-md-9 ">
                    <input class="contactus" required placeholder="أدخل اسمك" type="type" name="name">
                </div>
                <div class="col-md-9">
                    <input class="contactus" required placeholder="أدخل رقم جوالك" type="text" name="phone">
                </div>
                <div class="col-md-9">
                    <input class="contactus" required placeholder="أدخل عنوان السكن" type="type" name="adress">
                </div>
                <div class="col-md-9">
                    <input class="contactus" required placeholder="أدخل رقم الهوية" type="type" name="id_number">
                </div>

                <div class="col-md-9">
                    <textarea class="contactus1" name="your_problem" placeholder="أكتب مشكلتك" type="type" ></textarea>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <button class="send_btn">أرسل</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('website.layout.footer')
