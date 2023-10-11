<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه کسب درآمد از یوتیوب (جدید) */ ?>

<?php get_header(); ?>

<?php
    $queried_id = get_queried_object_id();

    $option = new \App\Models\Option;
    $where_option = [
        [
            'column'   => 'option_name',
            'operator' => '=',
            'value'    => 'posts_per_page'
        ]
    ];
    $option = $option->findAll()->where($where_option)->select('option_value')->get()->toArray();
    $option = $option[0]['option_value'];
?>

<main id="main" class="main monetization-new">
    <section id="monetization-new-hero" class="container-fluid monetization-new-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="content">
                        <div class="title">
                            <span>کسب درآمد از <span class="stroke" data-aos="fade-up" data-aos-duration="500" data-aos-delay="300" data-aos-easing="ease-in-sine">یوتیوب</span></span>
                            <span>نقد کردن درآمد <span class="stroke" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600" data-aos-easing="ease-in-sine">یوتیوب</span> با بهترین نرخ، در کمترین زمان</span>
                        </div>
                        <div class="desc">
                            جیمکس پکیج کاملی از خدمات و سرویس های کسب درآمد از یوتیوب را به شما ارائه می دهد از خدمات سئو یوتیوب، تا استودیو، ادیت و نقد کردن درآمد شما در جیمکس فراهم شده است
                        </div>
                        <div class="btn-links">
                            <a href="https://panel.gmaxads.com/index.php?rp=/login" target="_blank" type="button" class="btn btn-primary">ثبت نام</a>
                            <a href="tel:02191095659" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="shape-group">
                <div class="shape-right">
                    <div class="shape">
                        <div class="shape">
                            <div class="shape">
                                <div class="shape">
                                    <div class="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-left">
                    <div class="shape">
                        <div class="shape">
                            <div class="shape">
                                <div class="shape">
                                    <div class="shape">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shape-circle"></div>
            </div>
        </div>
    </section>

    <section id="monetization-new-image" class="container-fluid monetization-new-image">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="image">
                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube7.webp" alt="کسب درآمد از یوتیوب" width="100%" height="auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="monetization-new-discover" class="container-fluid monetization-new-discover">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 column">
                    <!-- Swiper -->
                    <div class="swiper discoverSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box-discover">
                                    <div class="heading line-clamp-2">
                                        سئو و بهینه سازی موتورهای جستجوگر
                                    </div>
                                    <div class="image">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/slider8-800px.webp" alt="" width="auto" height="auto">
                                    </div>
                                    <div class="content">
                                        <div class="title">
                                            علی صالحی <span>مدیر سئو</span>
                                        </div>
                                        <div class="desc">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                        </div>
                                        <div class="details">
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                            <span>
                                                <div class="sup">لورم ایپسوم</div>
                                                <div class="sub">05:45:47</div>
                                            </span>
                                        </div>
                                        <a href="#" class="more">نمایش بیشتر <i class="las la-long-arrow-alt-left"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="discoverswiper-button-next swiper-button-next"></div>
                        <div class="discoverswiper-button-prev swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="monetization-customers" class="container-fluid monetization-customers">
        <div class="container">
            <div class="row">
                <div class="col-12 column">
                    <div class="head">
                        <span>بیش از</span>
                        <strong>500+</strong>
                        <span>یوتیوبر به ما اعتماد کرده اند</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer1.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="200" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer2.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="400" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer3.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="600" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer4.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="800" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer5.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="1000" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer6.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="1200" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer7.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="1400" data-aos-easing="ease-in-sine">
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/customer8.jpg" alt="cutomer" data-aos="fade-down" data-aos-duration="200" data-aos-delay="1600" data-aos-easing="ease-in-sine">
                </div>
            </div>
        </div>
    </section>

    <section id="monetization-product" class="container-fluid monetization-product">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="heading-title">گوگل ادز، به شما کمک می کند تا در بهترین جای ممکن دیده شوید</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="tabs">
                        <div class="nav nav-pills" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-selected="true">کسب درآمد از یوتیوب
                                <svg viewBox="0 0 24 24" aria-hidden="true" role="presentation" class="glue-icon facet-icon" whidth="24px" height="24px">
                                    <path d="M20.49 19l-5.73-5.73C15.53 12.2 16 10.91 16 9.5A6.5 6.5 0 1 0 9.5 16c1.41 0 2.7-.47 3.77-1.24L19 20.49 20.49 19zM5 9.5C5 7.01 7.01 5 9.5 5S14 7.01 14 9.5 11.99 14 9.5 14 5 11.99 5 9.5z"></path>
                                </svg>
                            </button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-selected="false">استودیو جیمکس
                                <svg viewBox="0 0 24 24" aria-hidden="true" role="presentation" class="glue-icon facet-icon" whidth="24px" height="24px">
                                    <path d="M18.997 2h-5.87c-.8 0-1.56.32-2.12.88l-8.13 8.13a3 3 0 0 0 0 4.24l5.87 5.87c.59.59 1.36.88 2.12.88s1.54-.29 2.12-.88l8.13-8.12c.56-.56.88-1.33.88-2.12V5c0-1.66-1.34-3-3-3Zm1 8.88c0 .27-.1.52-.29.71l-8.13 8.12a.96.96 0 0 1-.71.29c-.16 0-.45-.04-.71-.29l-5.87-5.87a1.017 1.017 0 0 1 0-1.42l8.13-8.13c.19-.19.45-.29.71-.29h5.87c.55 0 1 .45 1 1v5.88Z"></path>
                                    <path d="M16.497 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z"></path>
                                </svg>
                            </button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-selected="false">ادیت ویدئو
                                <svg viewBox="0 0 24 24" aria-hidden="true" role="presentation" class="glue-icon facet-icon" whidth="24px" height="24px">
                                    <path d="M21.58 7.19c-.23-.86-.91-1.54-1.77-1.77C18.25 5 12 5 12 5s-6.25 0-7.81.42c-.86.23-1.54.91-1.77 1.77C2 8.75 2 12 2 12s0 3.25.42 4.81c.23.86.91 1.54 1.77 1.77C5.75 19 12 19 12 19s6.25 0 7.81-.42c.86-.23 1.54-.91 1.77-1.77C22 15.25 22 12 22 12s0-3.25-.42-4.81zM10 15V9l5.2 3z"></path>
                                </svg>
                            </button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-four" type="button" role="tab" aria-selected="false">سئو یوتیوب
                                <svg viewBox="-4 -4 24 24" aria-hidden="true" role="presentation" class="glue-icon facet-icon" whidth="24px" height="24px">
                                    <path d="M2 4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm6 12c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm-4-2c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm-2-4c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm8-2c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm2-6c0 1.1.9 2 2 2s2-.9 2-2-.9-2-2-2-2 .9-2 2Zm-2 0c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Zm4 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2Zm2 4c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2Z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 d-flex flex-column justify-content-center order-2">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube11.webp" alt="کسب درآمد از یوتیوب" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1">
                                        <div class="content">
                                            <ul class="list">
                                                <li>
                                                    جیمکس به شما تعهد میدهد که درآمد شما را در کمترین زمان و با بهترین نرخ برای شما واریز نماید. همکاری جیمکس با بهترین یوتیوبرهای ایران گواه این مساله است
                                                </li>
                                                <li>
                                                    امنیت حساب ادسنس و کانال یوتیوب شما بالاترین اهمیت را برای ما دارد. جیمکس تمامی جوانب محافظت از کانال یوتیوب شما را در نظر گرفته است
                                                </li>
                                                <li>
                                                    تیم متخصص جیمکس در کنار شما هستند. ما تنها یک ارائه دهنده سرویس نقد کردن درآمد یوتیوب نیستیم. به کمک تیم آنالیز جیمکس می توانید رشد کانال خود را به حداکثر برسانید
                                                </li>
                                                <li>
                                                    محافظت از محتوای شما از دیگر خدماتی است که جیمکس ارائه می کند. دیگر لازم نیست نگران سو استفاده از محتوای شما توسط دیگران باشید. جیمکس این مساله را برای شما انجام میدهد
                                                </li>
                                            </ul>
                                            <a href="tel:02191095659" class="btn btn-primary link">تماس با ما</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-two" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube11.webp" alt="استودیو جیمکس" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1">
                                        <div class="content">
                                            <ul class="list">
                                                <li>اگر برای تولید محتوای خود مشکل فضا و تجهیزات دارید، جیمکس در کنار شماست. استودیو جیمکس می تواند کیفیت محتوای شما را چندین برابر کند</li>
                                                <li>استودیو جیمکس با به روز ترین تجهیزات صوتی و تصویری موجود و با استفاده از بهترین اپراتورهای استودیو کیفیت نهایی محتوای شما را تضمین می کند</li>
                                                <li>قیمت های مناسب استودیو جیمکس برای استفاده ی یوتیوبرهای مجموعه می تواند راه حلی برای رشد کانال شما و موفقیت بیشتر شما باشد</li>
                                            </ul>
                                            <a href="tel:02191095659" class="btn btn-primary link">تماس با ما</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube11.webp" alt="ادیت ویدئو" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1">
                                        <div class="content">
                                            <ul class="list">
                                                <li>تیم جیمکس برای راحتی کار شما، و افزایش تولید محتوای شما تیمی حرفه ای از ادیتورها را در کنار خود قرار داده است</li>
                                                <li>تیم ادیت جیمکس تنها برای بهترین کانال های یوتیوب مجموعه خدمات خود را ارائه میدهد. در صورتی که نیاز به خدمات ادیت دارید، با ما تماس بگیرید</li>
                                                <li>به وسیله سرویس ادیت جیمکس، کیفیت محتوای خود را بالاتر ببرید. بسیاری از یوتیوبرهای موفق جیمکس، مسیر موفقیت خود را در کنار ادیتورهای حرفه ای جیمکس طی کرده اند</li>
                                            </ul>
                                            <a href="tel:02191095659" class="btn btn-primary link">تماس با ما</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-four" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube11.webp" alt="سئو یوتیوب" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1">
                                        <div class="content">
                                            <ul class="list">
                                                <li>سئو یوتیوب یکی از مهم ترین المان های موفقیت کانال یوتیوب شماست. تیم متخصص سئو یوتیوب جیمکس می تواند درآمد شما را در بازه زمانی کوتاهی بالاتر برده و درآمد کلی شما را بیشتر نماید</li>
                                                <li>اگر محتوای شما کم دیده می شود، یا RPM محتوای شما پایین است، استفاده از خدمات سئو یوتیوب جیمکس را به شما پیشنهاد می کنیم</li>
                                                <li>تیم آنالیز جیمکس می تواند برای موفقیت بیشتر کانال یوتیوب شما، مسیرهای محتوایی راحت تری را به شما پیشنهاد بدهد</li>
                                            </ul>
                                            <a href="tel:02191095659" class="btn btn-primary link">تماس با ما</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>