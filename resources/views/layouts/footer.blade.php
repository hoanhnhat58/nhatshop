<div id="footer" class="color-div">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Thông tin liên hệ</h4>
                    <div>
                        <ul>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Hotline:0936 022 029</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> website:Nhatshop.itd</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Hồ Anh Nhật</a></li>
                            <li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Email:hoanhnhat.58@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Địa chỉ</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p> 387/21/A2 Đường Bình Thành,Phường Bình Hưng Hòa B, Quận Bình Tân,TP. Hồ Chí Minh.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Hỗ trợ khách hàng</h4>
                    <div>
                        <ul>
                            <li><a href=""><i class="fa fa-chevron-right"></i> Chính sách bảo mật </a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i> Vận chuyển giao nhận</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i> Hướng dẫn giao nhận</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i> Tư vấn kỹ thuật</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Newsletter Subscribe</h4>
                    <form action="#" method="post">
                        <input type="email" name="your_email">
                        <button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                    </form>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
<div class="copyright">
    <div class="container">
        <p class="pull-left">©  Tất cả bản quyền thuộc về NhatShop</p>
        <p class="pull-right pay-options">
            <a href="#"><img src="{{ asset('assets/dest/images/pay/facebook.png')}}" alt="" /></a>
            <a href="#"><img src="{{ asset('assets/dest/images/pay/payal.png')}}" alt="" /></a>
            <a href="#"><img src="{{ asset('assets/dest/images/pay/zalo.png')}}" alt="" /></a>
            <a href="#"><img src="{{ asset('assets/dest/images/pay/paypal.jpg')}}" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->
<!-- include js files -->
<script src="{{ asset('assets/dest/js/jquery.js')}}"></script>
<script src="{{ asset('assets/dest/js/scroll.js')}}"></script>
<script src="{{ asset('assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js')}}"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/dest/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
<script src="{{ asset('assets/dest/vendors/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{ asset('assets/dest/vendors/animo/Animo.js')}}"></script>
<script src="{{ asset('assets/dest/vendors/dug/dug.js')}}"></script>
<script src="{{ asset('assets/dest/js/scripts.min.js')}}"></script>
<script src="{{ asset('assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('assets/dest/js/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/dest/js/wow.min.js')}}"></script>
<!--customjs-->
<script src="{{ asset('assets/dest/js/custom2.js')}}"></script>
<script>
    $(document).ready(function($) {
        $(window).scroll(function(){
            if($(this).scrollTop()>150){
                $(".header-bottom").addClass('fixNav')
            }else{
                $(".header-bottom").removeClass('fixNav')
            }}
        )
    })
</script>
