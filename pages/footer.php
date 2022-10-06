<footer class="footer">
    <div class="footer__wrapper">
        <div class="container">
            <div class="footer__container">
                <div class="footer__branch">
                    <div class="footer__group" data-aos="fade-left" data-aos-duration='1000'>
                        <img src="../images/footerGr.png" alt="" class="footer__group-image">
                        <p class="footer__text">
                            MyAd là Growth Marketing Agency – chuyên tư vấn và trực tiếp triển khai các chiến dịch
                            digital marketing với Google là trọng tâm. Chúng tôi cung cấp dịch vụ Google Ads, SEO,
                            Facebook Ads, Website và triển khai chiến dịch Digital tổng thể.
                        </p>
                        <div class="footer__social">
                            <img src="../images/facebook.png" alt="#fb" class="footer__social-image">
                            <img src="../images/gmail.png" alt="#gm" class="footer__social-image">
                            <img src="../images/youtube.png" alt="yt" class="footer__social-image">
                        </div>
                    </div>
                    <ul class="footer__overview-lists" data-aos="fade-down" data-aos-duration='1000'>
                        <h3 class="footer__branch-title">

                        </h3>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Giới thiệu</span>
                            </a>
                        </li>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Dịch vụ</span>
                            </a>
                        </li>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Đào tạo</span>
                            </a>
                        </li>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Kiến thức</span>
                            </a>
                        </li>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Dự án đã triển khai</span>
                            </a>
                        </li>
                        <li class="footer__overview-item">
                            <a href="" class="footer__overview-item-link">
                                <i class="footer__overview-icon fa-solid fa-chevron-down"></i>
                                <span>Tin tức</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer__branch-lists" data-aos="fade-right" data-aos-duration='1000'>
                        <h3 class="footer__branch-title">
                            Các chi nhánh của MyAd
                        </h3>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon ti-location-pin"></i>
                                <span>Hà Nội Head Office</span>
                            </a>
                        </li>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon ti-location-pin"></i>
                                <span>Đà Nẵng Brand</span>
                            </a>
                        </li>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon ti-location-pin"></i>
                                <span>Hồ Chí Minh Brand</span>
                            </a>
                        </li>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon ti-location-pin"></i>
                                <span>Hưng Yên</span>
                            </a>
                        </li>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon ti-location-pin"></i>
                                <span>Quảng Ninh</span>
                            </a>
                        </li>
                        <li class="footer__branch-item">
                            <a href="" class="footer__branch-item-link">
                                <i class="footer__branch-icon fa-solid fa-phone"></i>
                                <span>077.518.0000</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="text text__bottom">Bản quyền thuộc về Công ty Cổ phần truyền thông MyAd</p>
    </div>

</footer>
<script src="../scripts/menu.js"></script>
<script src="../scripts/app.js"></script>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function() {
    $('.image-slider').slick({
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true,
        autoplaySpeed: 1000,
        prevArrow: "<button type='button' class='slick-prev pull-left slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
        responsive: [

            {
                breakpoint: 1025,
                settings: {
                    centerMode: false,
                    centerPadding: '0px',
                    dots: false,
                    arrows: false,

                }
            },

            {
                breakpoint: 480,
                settings: {
                    centerMode: false,
                    centerPadding: '0px',
                    arrows: false,
                    dots: false,
                    infinite: false,
                    autoplay: false,
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});
</script>

</html>