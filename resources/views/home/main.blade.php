
@section('main')
    <section class="home-banner-area relative">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12">
                    <h1 class="wow fadeIn" data-wow-duration="4s">Мы создадим будущий  <br>вместе с вами.</h1>
                    <p class="text-white">
                        Это плаформа предназначена для улучщения прогресс обучения в ВУЗ-ах чтобы  каждый из нас стал настоящим профессиональным кадром.
                    </p>

                    <div class="input-wrap">
                        <form action="" class="form-box d-flex justify-content-between">
                            <input type="text" placeholder="Ищите курсы" class="form-control" name="username">
                            <button type="submit" class="btn search-btn">Поиск</button>
                        </form>
                    </div>
                    <h4 class="text-white">Топ курсы</h4>

                    <div class="courses pt-20">
                        <a href="#" data-wow-duration="1s" data-wow-delay=".3s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Ruby
                            on Rails</a>
                        <a href="#" data-wow-duration="1s" data-wow-delay=".6s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Python</a>
                        <a href="#" data-wow-duration="1s" data-wow-delay=".9s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">SEO</a>
                        <a href="#" data-wow-duration="1s" data-wow-delay="1.2s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">UI/UX
                            Дизайн
                        </a>
                        <a href="#" data-wow-duration="1s" data-wow-delay="1.5s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Android разработка</a>
                        <a href="#" data-wow-duration="1s" data-wow-delay="1.8s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Data
                            Science
                        </a>
                        <a href="#" data-wow-duration="1s" data-wow-delay="2.1s" class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Cryptocurrency</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rocket-img">
            <img src="img/rocket.png" alt="">
        </div>
    </section>
    @endsection