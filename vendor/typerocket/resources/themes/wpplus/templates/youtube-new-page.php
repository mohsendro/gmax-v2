<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly. ?>

<?php /* Template Name: قالب صفحه تبلیغ در یوتیوب (جدید) */ ?>

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

    $meta = get_post_meta( $queried_id, 'pageInfo', true );
?>

<main id="main" class="main youtube-new">
    <section id="youtube-hero" class="container-fluid youtube-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 column order-1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" height="64">
                        <style><![CDATA[.E{clip-path:url(#A)}]]></style>
                        <defs>
                            <clipPath id="A">
                                <use xlink:href="#B"/>
                            </clipPath>
                            <path id="B" d="M0 0h250.9v312.8H0z"/>
                        </defs>
                        <g transform="matrix(.257748 0 0 .257745 -.361416 2.515516)" class="E">
                            <path d="M85.9 28.6c2.4-6.3 5.7-12.1 10.6-16.8 19.6-19.1 52-14.3 65.3 9.7 10 18.2 20.6 36 30.9 54l51.6 89.8c14.3 25.1-1.2 56.8-29.6 61.1-17.4 2.6-33.7-5.4-42.7-21l-45.4-78.8c-.3-.6-.7-1.1-1.1-1.6-1.6-1.3-2.3-3.2-3.3-4.9L88.8 62.2c-3.9-6.8-5.7-14.2-5.5-22 .3-4 .8-8 2.6-11.6" fill="#3c8bd9"/>
                            <path d="M85.9 28.6c-.9 3.6-1.7 7.2-1.9 11-.3 8.4 1.8 16.2 6 23.5l32.9 56.9c1 1.7 1.8 3.4 2.8 5l-18.1 31.1-25.3 43.6c-.4 0-.5-.2-.6-.5-.1-.8.2-1.5.4-2.3 4.1-15 .7-28.3-9.6-39.7-6.3-6.9-14.3-10.8-23.5-12.1-12-1.7-22.6 1.4-32.1 8.9-1.7 1.3-2.8 3.2-4.8 4.2-.4 0-.6-.2-.7-.5l14.3-24.9L85.2 29.7c.2-.4.5-.7.7-1.1" fill="#fabc04"/>
                            <path d="M11.8 158l5.7-5.1c24.3-19.2 60.8-5.3 66.1 25.1 1.3 7.3.6 14.3-1.6 21.3-.1.6-.2 1.1-.4 1.7-.9 1.6-1.7 3.3-2.7 4.9-8.9 14.7-22 22-39.2 20.9C20 225.4 4.5 210.6 1.8 191c-1.3-9.5.6-18.4 5.5-26.6 1-1.8 2.2-3.4 3.3-5.2.5-.4.3-1.2 1.2-1.2" fill="#34a852"/>
                            <path d="M11.8 158c-.4.4-.4 1.1-1.1 1.2-.1-.7.3-1.1.7-1.6l.4.4" fill="#fabc04"/>
                            <path d="M81.6 201c-.4-.7 0-1.2.4-1.7l.4.4-.8 1.3" fill="#e1c025"/>
                        </g>
                    </svg>
                    <div class="caption">
                        <div class="title">به کمک یوتیوب ادز، برندینگ خود را قوی تر کنید</div>
                        <div class="desc">
                            به کمک تبلیغ در یوتیوب، می توانید در هنگامی که کاربران در حال دیدن ویدئو، جستجو، یا گشت و گذار هستند،
                            محصول یا خدمات خود را معرفی نمایید
                        </div>
                        <div class="btn">
                            <a href="#" type="button" class="btn btn-primary">شروع کنید</a>
                            <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 column order-2">
                    <img class="image" src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube1.webp" alt="YouTube Ads">
                </div>
            </div>
        </div>
    </section>

    <section id="youtubeads-hero" class="container-fluid youtubeads-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="heading-title">به کمک یوتیوب ادز رشد کنید</div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-10 mx-auto column">
                    <div class="tabs">
                        <div class="nav nav-pills" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-selected="true">در دید مخاطبین خود باشید</button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-selected="false">مخاطبین خود را پیدا کنید</button>
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-selected="false">نتایج را ببینید</button>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2 order-xl-1">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube4.webp" alt="در دید مخاطبین خود باشید" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1 order-xl-2">
                                        <div class="content">
                                            <div class="title">
                                                در دید مخاطبین و مشتریان بالقوه ی خود باشید و مشتریان جدیدی پیدا کنید 
                                            </div>
                                            <div class="desc">
                                                یوتیوب می تواند شما را در جلوی چشم مخاطبین و مشتر یان شما قرار دهد. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-two" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2 order-xl-1">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube2.webp" alt="مخاطبین خود را پیدا کنید" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1 order-xl-2">
                                        <div class="content">
                                            <div class="title">
                                                تنها هزینه ی تبلیغ موثر را پرداخت کنید 
                                            </div>
                                            <div class="desc">
                                                به وسیله ی تبلیغ در یوتیوب می توانید بینندگان یوتیوب را به مخاطبین خود تبدیل نمایید. الزم نیست بودجه ی
                                                زیادی را برای این مساله صرف نمایید! شما می توانید با بودجه ای مناسب، تنها در جلوی چشم مخاطبین
                                                خاص خود باشید 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-three" role="tabpanel" tabindex="0">
                                <div class="row">
                                    <div class="col-12 col-xl-6 order-2 order-xl-1">
                                        <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube3.webp" alt="نتایج را ببینید" class="image">
                                    </div>
                                    <div class="col-12 col-xl-6 order-1 order-xl-2">
                                        <div class="content">
                                            <div class="title">
                                                در دید مخاطبین و مشتریان بالقوه ی خود باشید و مشتریان جدیدی پیدا کنید 
                                            </div>
                                            <div class="desc">
                                                یوتیوب می تواند شما را در جلوی چشم مخاطبین و مشتر یان شما قرار دهد. 
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
    </section>

    <section id="youtubecta-hero" class="container-fluid youtubecta-hero">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-12 col-xl-5 content-column column order-1">
                    <div class="title">
                        با کارشناسان حرفه ای ما تماس بگیرید و اولین کمپین تبلیغ در گوگل خود را شروع کنید
                    </div>
                    <ul class="list">
                        <li>با استفاده از تجربه ی متخصصین ما، سریعتر از هر زمان دیگر در یوتیوب نمایش داشته باشید</li>
                        <li>کارشناسان جیمکس، بهترین کمپین تبلیغاتی ممکن را با توجه به بودجه و نوع کسب و کار شما خواهندساخت</li>
                        <li>با گزارشات منظم تیم متخصصین جیمکس، در جریان لحظه به لحظه ی کمپین تبلیغات در یوتیوب خود باشید</li>
                    </ul>
                    <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                </div>

                <div class="col-12 col-xl-5 img-column column order-2">
                    <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/team/youtube-cta.png" width="auto" height="auto">
                </div>
            </div>
        </div>
    </section>

    <section id="youtubestep-hero" class="container-fluid youtubestep-hero">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 mx-auto heading-column column">
                    <div class="heading-title">
                        چگونه در یوتیوب تبلیغ کنم؟ 
                    </div>
                    <p class="heading-desc">
                        ویدئو تبلیغاتی بسازید، لینک ویدئو را به ما بدهید، شروع کمپین تبلیغاتی خود را به ما بسپارید! ما در هر قدم
                        شما را از پیشرفت تبلیغ تان مطلع خواهیم کرد 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-10 mx-auto content-column column">
                    <div class="accordion" id="accordionYoutube">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne" onclick="accordionImage(0)">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    برای کسب و کار خود کانال بسازید 
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionYoutube">
                                <div class="accordion-body">
                                    با ساخت یک کانال یوتیوب، حضور کسب و کار خود را در ای ن شبکه اجتماعی آغاز کنید. ساخت کانال در این شبکه
                                    اجتماعی رایگان است! شما نه تنها می توانید با استفاده از ویدئو تبلیغاتی، کسب و کار خود را معرفی کنید، بلکه
                                    می توانید با فعالیت منظم در این رسانه، مخاطبین جدیدی را با برند خود آشنا سازید 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo" onclick="accordionImage(1)">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    با یک ویدئو داستان خود را بگویید 
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionYoutube">
                                <div class="accordion-body">
                                    شما می توانید با ساخت یک ویدئو تبلیغاتی، داستان برند خود را بگویید، محصول یا خدمات خود را معرفی کنید،
                                    یا جشنواره و طرح های ویژه ی خو د را به کاربرانی که به خدمات شما نیاز دارند معرفی نمایید. ما تا رسیدن شما به
                                    هدفتان، در تمامی مراحل این قدم در کنار شما هستیم.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree" onclick="accordionImage(2)">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    کمپین تبلیغاتی ویدئویی خود را شروع کنید 
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionYoutube">
                                <div class="accordion-body">
                                    شما می توانید به کمک جیمکس، کمپین تبلیغات در یوتیوب خود را به بهترین شکل شروع کنید. نگران بودجه ی
                                    خود نباشید. با جیمکس تماس بگیرید تا با توجه به بودجه ی شما، بهترین کمپین تبلیغاتی را برای شما شروع
                                    کنیم. کارشناسان و متخصصین جیمکس تا گرفتن بهترین نتیجه در کنار شما هستند. 
                                </div>
                            </div>
                        </div>
                        <a href="#" type="button" class="btn btn-outline-primary">تماس با ما</a>
                    </div>

                    <div class="pictures">
                        <picture class="picture pictureOne">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube5.webp" media="(min-width:1200px)">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube5.webp" media="(min-width:768px)">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube5.webp" alt="کمپین تبلیغاتی ویدئویی خود را شروع کنید" width="auto" height="auto">
                        </picture>
                        <picture class="picture pictureTwo" style="display: none;">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube6.webp" media="(min-width:1200px)">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube6.webp" media="(min-width:768px)">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube6.webp" alt="کمپین تبلیغاتی ویدئویی خود را شروع کنید" width="auto" height="auto">
                        </picture>
                        <picture class="picture pictureThree" style="display: none;">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube7.webp" media="(min-width:1200px)">
                            <source srcset="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube7.webp" media="(min-width:768px)">
                            <img src="<?php echo TYPEROCKET_DIR_URL; ?>resources/assets/img/youtube7.webp" alt="کمپین تبلیغاتی ویدئویی خود را شروع کنید" width="auto" height="auto">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>