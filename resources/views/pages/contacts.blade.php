@extends('layouts.appuser')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Liên hệ</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="home">Trang chủ</a> / <span>Liên Hệ</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="beta-map">

        <div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.4878891446233!2d108.23547091485811!3d16.040152588898934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421760002ae79f%3A0x23856e7c86300ad6!2zMSBN4bu5IEFuIDE1LCBC4bqvYyBN4bu5IEFuLCBOZ8WpIEjDoG5oIFPGoW4sIMSQw6AgTuG6tW5nIDU1MDAwMA!5e0!3m2!1svi!2s!4v1614776858344!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">

            <div class="space50">&nbsp;</div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>Liên hệ</h2>
                    <div class="space20">&nbsp;</div>
                    <p></p>
                    <div class="space20">&nbsp;</div>
                    <form action="#" method="post" class="contact-form">
                        <div class="form-block">
                            <input name="your-name" type="text" placeholder="Họ tên (Bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-email" type="email" placeholder="Email (Bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Chủ đề">
                        </div>
                        <div class="form-block">
                            <textarea name="your-message" placeholder="..........."></textarea>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="beta-btn primary">Gửi <i class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Thông tin liên hệ</h2>
                    <div class="space20">&nbsp;</div>

                    <h6 class="contact-title">Địa chỉ</h6>
                    <p>
                        Số 1 Mỹ An 15,Bắc Mỹ An, Ngũ Hành Sơn <br>
                        Đà Nẵng
                    </p>
                    <div class="space20">&nbsp;</div>
{{--                    <h6 class="contact-title">Business Enquiries</h6>--}}
{{--                    <p>--}}
{{--                        Doloremque laudantium, totam rem aperiam, <br>--}}
{{--                        inventore veritatio beatae. <br>--}}
{{--                        <a href="mailto:biz@betadesign.com">biz@betadesign.com</a>--}}
{{--                    </p>--}}
{{--                    <div class="space20">&nbsp;</div>--}}
{{--                    <h6 class="contact-title">Employment</h6>--}}
{{--                    <p>--}}
{{--                        We’re always looking for talented persons to <br>--}}
{{--                        join our team. <br>--}}
{{--                        <a href="hr@betadesign.com">hr@betadesign.com</a>--}}
{{--                    </p>--}}
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
