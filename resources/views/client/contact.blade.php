@extends('client.master')
@section('noidung')
<section class="contact-section" style="padding: 20px 0px;">
            <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.721699139741!2d108.2314044146515!3d16.079925188874288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142182134b37ab9%3A0x9aa3971a7891dddd!2zNzc2IE5nLiBRdXnhu4FuLCBBbiBI4bqjaSBC4bqvYywgU8ahbiBUcsOgLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1659262209078!5m2!1svi!2s" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <script>
        function initMap() {
            var uluru = {
                lat: -25.363,
                lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                },
                {
                    lightness: 50
                }
                ]
            },
            {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#ccdee9'
                }]
            }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -31.197,
                    lng: 150.744
                },
                zoom: 9,
                styles: grayStyles,
                scrollwheel: false
            });
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
        </script>

</div>
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Liên lạc với chúng tôi</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tin nhắn'" placeholder=" Nhập tin nhắn"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tên của bạn'" placeholder="Nhập tên của bạn">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập địa chỉ Email'" placeholder="Địa chỉ Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập chủ đề'" placeholder="Nhập nội dung">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Gửi</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>776 Ngô Quyền, An Hải Bắc</h3>
                                <p> Sơn Trà, Đà Nẵng, 55000</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+84 829 460 225</h3>
                                <p>Giờ hành chính Thứ 2 - Thứ 6</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>hotro@hotnews.com</h3>
                                <p>Gửi cho chúng tôi câu hỏi của bạn bất cứ lúc nào!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection('noidung')