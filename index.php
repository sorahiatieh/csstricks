<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Css Tricks</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-icon.css">
    <!--<link rel="stylesheet" href="assets/css/style.min.css">-->
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="site">
    <header class="site-header">
        <div class="brand-bar container">
                <a class="logo" href="#">
                    <img src="assets/img/logo.jpg" alt="logo">
                </a>
                <div class="site-info">
                    <h1 class="site-title"><a href="https://css-tricks.ir">طراحی وب</a></h1>
                    <p class="site-description">آموزش تخصصی SVG | CSS | HTML و دیگر تکنولوژی‌های Front-end</p>
                </div>

            <a href="" class="search-button">
                <svg class="icon icon-search" width="1em" height="1em"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://css-tricks.ir/wp-content/themes/css-tricks-ir-1396/symbol-defs.svg#icon-search"></use></svg>
            </a>
                <form action="https://css-tricks.ir/" method="get" class="search-form">
                    <label class="label">
                        <span class="screen-reader-text">جستجو برای:</span>
                        <input type="search" class="search-field" placeholder="مثال: فلکس باکس" value="" name="s">
                    </label>
                    <input type="submit" value="جستجو" class="serach-submit"></input>
                </form>
        </div>
        <div class="nav-bar">
            <nav class="site-nav container">
                <ul class="menu">
                    <li><i class="fi fi-home"></i><a href="#">صفحه اصلی</a></li>
                    <li><i class="fi fi-library"></i><a href="#">دوره تصویری</a></li>
                    <li><i class="fi fi-list"></i><a href="#">لیست آموزشی</a></li>
                    <li><i class="fi fi-book"></i><a href="#">مرجع</a></li>
                    <li><i class="fi fi-feather"></i><a href="#">آموزشی</a></li>
                    <li><i class="fi fi-wrench"></i><a href="#">ابزار</a></li>
                    <li><i class="fi fi-magic"></i><a href="#">ترفند</a></li>
                    <li><i class="fi fi-tv"></i><a href="#">دمو</a></li>
                    <li><i class="fi fi-news"></i><a href="#">مجله</a></li>
                </ul>
            </nav>
        </div>
    </header>
     
    <div class="site-content">
        <main class="home-page">
            <section class="hero">
                <h3 class="hero-title">آموزش گام به گام طراحی وب</h3>
                <p class="hero-text">یادگیری رو با <a href="#">HTML</a> شروع کن و با <a href="#">CSS</a> ادامه بده و از
                    <a href="#">دوره های آموزشی</a> برای یادگیری پروژه محور
                استفاده کن، در ضمن اگر دنبال یک ویژگی با عنصر خاص هستی
                قسمت <a href="#">مرجع</a> می تونه مفید باشه</p>
                <div class="hero-btns">
                    <a href="#" class="links">نقشه یادگیری</a>
                    <a href="#" class="links">دوره های آموزشی</a>
                    <a href="#" class="links">پرسش و پاسخ</a>
                    <a href="#" class="links">کانال تلگرام</a>
                </div>
            </section>
            <section class="recent-posts">
                <div class="container">
                    <h3 class="session-title">مطالب اخیر
                        <a href="#" class="buttons">همه مطالب</a>
                    </h3>
                    <ul class="post-list">
                        <li class="post-list-item">
                            <article class="post-card">
                                <header class="post-card-header">
                                    <img src="assets/img/post/1.jpg" alt="">
                                    <time class="post-card-date">3 اسفند 99</time>
                                    <h3 class="post-card-title">
                                        <a href="#">لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum)</a>
                                    </h3>
                                </header>
                                <p class="post-card-text">در این مطلب با سه روش خطی، داخلی و خارجی در استفاده از SVG برای آیکون‌ها در صفحات وب و وبلورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </p>
                                <div class="post-card-tags">
                                    <a class="hashtag" href="#">#icon</a>
                                    <a class="hashtag" href="#">#svg</a>
                                    <a class="hashtag" href="#">#video</a>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-item">
                            <article class="post-card">
                                <header class="post-card-header">
                                    <img src="assets/img/post/2.jpg" alt="">
                                    <time class="post-card-date">3 اسفند 99</time>
                                    <h3 class="post-card-title">
                                        <a href="#">لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum)</a>
                                    </h3>
                                </header>
                                <p class="post-card-text">در این مطلب با سه روش خطی، داخلی و خارجی در استفاده از SVG برای آیکون‌ها در صفحات وب و وبلورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </p>
                                <div class="post-card-tags">
                                    <a class="hashtag" href="#">#icon</a>
                                    <a class="hashtag" href="#">#svg</a>
                                    <a class="hashtag" href="#">#video</a>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-item">
                            <article class="post-card">
                                <header class="post-card-header">
                                    <img src="assets/img/post/0.jpg" alt="">
                                    <time class="post-card-date">3 اسفند 99</time>
                                    <h3 class="post-card-title">
                                        <a href="#">لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum)</a>
                                    </h3>
                                </header>
                                <p class="post-card-text">در این مطلب با سه روش خطی، داخلی و خارجی در استفاده از SVG برای آیکون‌ها در صفحات وب و وبلورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </p>
                                <div class="post-card-tags">
                                    <a class="hashtag" href="#">#icon</a>
                                    <a class="hashtag" href="#">#svg</a>
                                    <a class="hashtag" href="#">#video</a>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-item">
                            <article class="post-card">
                                <header class="post-card-header">
                                    <img src="assets/img/post/4.jpg" alt="">
                                    <time class="post-card-date">3 اسفند 99</time>
                                    <h3 class="post-card-title">
                                        <a href="#">لورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum)</a>
                                    </h3>
                                </header>
                                <p class="post-card-text">در این مطلب با سه روش خطی، داخلی و خارجی در استفاده از SVG برای آیکون‌ها در صفحات وب و وبلورم ایپسوم یا طرح‌نما (به انگلیسی: Lorem ipsum) به متنی آزمایشی و بی‌معنی در صنعت چاپ، صفحه‌آرایی و طراحی گرافیک گفته می‌شود. </p>
                                <div class="post-card-tags">
                                    <a class="hashtag" href="#">#icon</a>
                                    <a class="hashtag" href="#">#svg</a>
                                    <a class="hashtag" href="#">#video</a>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="road-map">
                <div class="container">
                    <h2 class="section-title">مسیر یادگیری</h2>
                    <div class="road-map-content">
                        <div class="rm-desc">
                            <p class="rmd-text">اگر تازه وارد دنیای طراحی وب شدید به این قسمت مراجعه کنید و مباحث رو بصورت گام به گام یاد بگیرید</p>
                            <p class="rmd-text">اگر دنبال یک موضوع خاص برای یادگیری هستید این بخش اون موضوع رو به ترتیب ارائه می کنه</p>
                            <a href="#" class="buttons">شروع کن</a>
                        </div>
                        <div class="rm-img">
                            <img src="assets/img/mind_map.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="cp-products">
                <div class="container">
                    <h2 class="section-title">دوره های آموزشی</h2>
                    <ul class="product-content">
                        <li class="item">
                            <div class="item-img">
                                <img src="assets/img/product/1.jpg" alt="">
                            </div>
                            <div class="item-title"><a href="#">دوره مقدماتی طراحی صفحات وب</a></div>
                            <p class="item-text">این دوره مواردی که در اولین قدم باید یاد بگیرید را بصورت پروژه محور پوشش می دهد.</p>
                            <a class="btn btn-card" value="خرید بسته">خرید بسته</a>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="assets/img/product/2.jpg" alt="">
                            </div>
                            <div class="item-title"><a href="#">کارگاه صفحه آرایی واکنشگرا</a></div>
                            <p class="item-text">یک بسته آموزشی کاملا پروژه محور از هر آنچه که باید در مورد چیدمان و صفحه آرایی بدانید را در بر دارد.</p>
                            <a class="btn btn-card" value="خرید بسته">خرید بسته</a>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="assets/img/product/3.jpg" alt="">
                            </div>
                            <div class="item-title"><a href="#">دوره آموزش فلکس باکس</a></div>
                            <p class="item-text">بعد از دوره صفحه آرایی باید ماژول فلکس باکس را فرا بگیرید که این بسته بصورت کامل این مبحث را ارائه می دهد.</p>
                            <a class="btn btn-card" value="خرید بسته">خرید بسته</a>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="assets/img/product/4.jpg" alt="">
                            </div>
                            <div class="item-title"><a href="#">دوره آموزشی Sass</a></div>
                            <p class="item-text">این دوره با آموزش عمیق مفاهیم Sass به دنبال آماده سازی شما برای پروژه های سطح متوسط و بزرگ می باشد.</p>
                            <a class="btn btn-card" value="خرید بسته">خرید بسته</a>
                        </li>
                        <li class="item">
                            <div class="item-img">
                                <img src="assets/img/product/5.jpg" alt="">
                            </div>
                            <div class="item-title"><a href="#">دوره خودکارسازی جریان کاری</a></div>
                            <p class="item-text">در این دوره با استفاده از npm خودکار سازی جریان کاری در توسعه یک وب سایت را فرا خواهید گرفت</p>
                            <a class="btn btn-card" value="خرید بسته">خرید بسته</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="packages">
                <div class="container">
                    <div class="table-wrapper">
                        <ul class="items">
                            <li class="item">
                                <img src="assets/img/package/1.svg" alt="">
                                <h3 class="package-title">بسته صفحه آرایی</h3>
                                <p class="item-title">صفحه آرایی مقدماتی تا پیشرفته</p>
                                <span class="price">72,000 ت</span>
                                <span class="real-price">94 تومات قیمت واقعی</span>
                                <span class="profit-price">22 تومان سود شما</span>
                                <ul class="about-package">
                                    <li class="list-package"><i class="fi fi-cancel"></i><a href="#">کارگاه صفحه‌آرایی واکنشگرا</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">دوره جامع فلکس باکس</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">آموزش جامع sass</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">خودکار سازی جریان کاری با NPM</a></li>
                                </ul>
                                <a href="#" class="select-btn btn">انتخاب</a>
                            </li>
                            <li class="item">
                                <img src="assets/img/package/2.svg" alt="">
                                <h3 class="package-title">بسته کامل</h3>
                                <p class="item-title">تمام دوره های سایت بصورت یکجا</p>
                                <span class="price">133,000 ت</span>
                                <span class="real-price">182 تومات قیمت واقعی</span>
                                <span class="profit-price">49 تومان سود شما</span>
                                <ul class="about-package">
                                    <li class="list-package"><i class="fi fi-cancel"></i><a href="#">کارگاه صفحه‌آرایی واکنشگرا</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">دوره جامع فلکس باکس</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">آموزش جامع sass</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">خودکار سازی جریان کاری با NPM</a></li>
                                </ul>
                                <a href="#" class="select-btn btn">انتخاب</a>
                            </li>
                            <li class="item">
                                <img src="assets/img/package/3.svg" alt="">
                                <h3 class="package-title">بسته پیشرفته</h3>
                                <p class="item-title">نزدیک شدن به دنیای واقعی</p>
                                <span class="price">88,000 ت</span>
                                <span class="real-price">133 تومات قیمت واقعی</span>
                                <span class="profit-price">45 تومان سود شما</span>
                                <ul class="about-package">
                                    <li class="list-package"><i class="fi fi-cancel"></i><a href="#">کارگاه صفحه‌آرایی واکنشگرا</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">دوره جامع فلکس باکس</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">آموزش جامع sass</a></li>
                                    <li class="list-package"><i class="fi fi-dot"></i><a href="#">خودکار سازی جریان کاری با NPM</a></li>
                                </ul>
                                <a href="#" class="select-btn btn">انتخاب</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="hot-topics">
                <div class="container">
                    <h2 class="section-title">موضوعات داغ</h2>
                    <ul class="hot-topics-list">
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tag/flexbox/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-foursquare"></i></span>
                                <span class="hot-topics-text">Flexbox</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tag/grid/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-grid"></i></span>
                                <span class="hot-topics-text">Grid</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/reading-list/%d8%a7%d9%86%db%8c%d9%85%db%8c%d8%b4%d9%86-%d9%87%d8%a7/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-emo-grin"></i></span>
                                <span class="hot-topics-text">Animation</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tag/devtools/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-wrench"></i></span>
                                <span class="hot-topics-text">Devtools</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/reading-list/svg/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-snowflake-o"></i></span>
                                <span class="hot-topics-text">SVG</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tutorial/%d8%b1%d8%a7%d9%87%d9%86%d9%85%d8%a7%db%8c-%da%a9%d8%a7%d9%85%d9%84-em-%d9%88-rem/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-text-height"></i></span>
                                <span class="hot-topics-text">REM/EM</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tag/css-secrets/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-magic"></i></span>
                                <span class="hot-topics-text">CSS Secrets</span>
                            </a>
                        </li>
                        <li class="hot-topics-item">
                            <a href="https://css-tricks.ir/tag/css-filters/" class="hot-topics-link">
                                <span class="hot-topics-icon"><i class="fi fi-droplet"></i></span>
                                <span class="hot-topics-text">Filters</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="videos-section">
                <div class="container">
                    <h2 class="section-title">ویدئو ها</h2>
                    <ul class="video-list">
                        <li class="video-item">
                            <iframe class="video-frame" src="https://www.aparat.com/video/video/embed/videohash/NqyR9/vt/frame" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </li>
                        <li class="video-item">
                            <iframe class="video-frame" src="https://www.aparat.com/video/video/embed/videohash/fgxqT/vt/frame" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </li>
                        <li class="video-item">
                            <iframe class="video-frame" src="https://www.aparat.com/video/video/embed/videohash/IzNgv/vt/frame" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </li>
                        <li class="video-item">
                            <iframe class="video-frame" src="https://www.aparat.com/video/video/embed/videohash/ah3Pz/vt/frame" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </li>
                        <li class="video-item">
                            <iframe class="video-frame" src="https://www.aparat.com/video/video/embed/videohash/chpuo/vt/frame" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="reference-section">
                <div class="container">
                    <h2 class="section-title">مرجع</h2>
                    <div class="rs-list">
                        <a href="https://css-tricks.ir/reference#backgrounds_and_borders" class="buttons">Backgrounds and Borders</a>
                        <a href="https://css-tricks.ir/reference#multi-column_layout" class="buttons">Multi-column Layout</a>
                        <a href="https://css-tricks.ir/reference#fonts" class="buttons">Fonts</a>
                        <a href="https://css-tricks.ir/reference#image_values_and_replaced_content" class="buttons">Image Values</a>
                        <a href="https://css-tricks.ir/reference#flexible_box_layout" class="buttons">Flexible Box Layout</a>
                        <a href="https://css-tricks.ir/reference#grid_layout" class="buttons">Grid Layout</a>
                        <a href="https://css-tricks.ir/reference#writing_modes" class="buttons">Writing Modes</a>
                        <a href="https://css-tricks.ir/reference#shapes" class="buttons">Shapes</a>
                        <a href="https://css-tricks.ir/reference#masking" class="buttons">Masking</a>
                        <a href="https://css-tricks.ir/reference#compositing_and_blending" class="buttons">Compositing and Blending</a>
                        <a href="https://css-tricks.ir/reference#text" class="buttons">Text</a>
                        <a href="https://css-tricks.ir/reference#text_decoration" class="buttons">Text Decoration</a>
                        <a href="https://css-tricks.ir/reference#transforms" class="buttons">Transforms</a>
                        <a href="https://css-tricks.ir/reference#transitions" class="buttons">Transitions</a>
                        <a href="https://css-tricks.ir/reference#animations" class="buttons">Animations</a>
                        <a href="https://css-tricks.ir/reference#timing_functions" class="buttons">Timing Functions</a>
                        <a href="https://css-tricks.ir/reference#display" class="buttons">Display</a>
                        <a href="https://css-tricks.ir/reference#will_change" class="buttons">Will Change</a>
                        <a href="https://css-tricks.ir/reference#color" class="buttons">Color</a>
                        <a href="https://css-tricks.ir/reference#selectors" class="buttons">Selectors</a>
                        <a href="https://css-tricks.ir/reference#overflow" class="buttons">Overflow</a>
                        <a href="https://css-tricks.ir/reference#basic_box_model" class="buttons">Basic Box Model</a>
                        <a href="https://css-tricks.ir/reference#positioned_layout" class="buttons">Positioned Layout</a>
                        <a href="https://css-tricks.ir/reference#filter_effects" class="buttons">Filter Effects</a>
                        <a href="https://css-tricks.ir/reference#media_queries" class="buttons">Media Queries</a>
                        <a href="https://css-tricks.ir/reference#values_and_units" class="buttons">Values and Units</a>
                        <a href="https://css-tricks.ir/reference#custom_properties_for_cascading_variables" class="buttons">Custom Properties</a>
                        <a href="https://css-tricks.ir/reference#counter_styles" class="buttons">Counter Styles</a>
                        <a href="https://css-tricks.ir/reference#table" class="buttons">Table</a>
                        <a href="https://css-tricks.ir/reference#conditional_rules" class="buttons">Conditional Rules</a>
                        <a href="https://css-tricks.ir/reference#fragmentation" class="buttons">Fragmentation</a>
                        <a href="https://css-tricks.ir/reference#basic_user_interface_" class="buttons">Basic User Interface </a>
                        <a href="https://css-tricks.ir/reference#inline_layout" class="buttons">Inline Layout</a>
                        <a href="https://css-tricks.ir/reference#cascading_and_inheritance" class="buttons">Cascading and Inheritance</a>
                    </div>
                </div>
            </section>
            <section class="discuss-section">
                <div class="container">
                    <h2 class="section-title">پرسش و پاسخ</h2>
                    <ul class="ds-list">
                        <li class="ds-item">
                            <a href="#" class="ds-link">
                                <h3 class="ds-question">طراحی فرم تماس</h3>
                                <p class="ds-text">سلام. من میخوام فرم تماسی رو طراحی کنم که labelهر فیلد مثل عکس زیر روی فیلد قرار بگیرد.چطور باید این کارو انجام بدم</p>
                            </a>
                        </li>
                        <li class="ds-item">
                            <a href="#" class="ds-link">
                                <h3 class="ds-question">تاثیر تکست روی باکس ها</h3>
                                <p class="ds-text">سلام دوستان عزیز من سه تا باکس با تگ div درست کردم.تا وقتی که تسکتی داخل باکس ها قرار ندم بدون هیچ مشکلی ارتفاعشون در راستای هم میمونه،ولی وقتی تکست بنویسم داخل هر کدومشون،ارتفاع اون تگی که تکست نوشتم بهم...</p>
                            </a>
                        </li>
                        <li class="ds-item">
                            <a href="#" class="ds-link">
                                <h3 class="ds-question">مشکل در اعمال شدن کلاس clear</h3>
                                <p class="ds-text">سلام استاد من هر کاری میکنم کلاس clear واسه اون باکس قرمز رنگ نمیدونم چرا اعمال نمیشه.باکس زرد رنگ همچنان سمت چپ باکس قرمز قرار داره.با سرچ کردن هم به جواب نرسیدم. اگه امکانش هست بنده رو راهنمایی بفرمایید.با تشکر</p>
                            </a>
                        </li>
                        <li class="ds-item">
                            <a href="#" class="ds-link">
                                <h3 class="ds-question">چرا سایتم ایندکس نمیشه؟</h3>
                                <p class="ds-text">سلام من یه سایت پزشکی دارم به اسم کلینیک عابدیان الان حدود یک ماهی میشه که سایتم ایندکس نشده. در ظاهر همه چیز درسته و سایت در حال سئو شدنه می تونید کمکم کنید؟</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </div>

    <footer class="site-footer">
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer--sections">
                    <section class="site-footer-section">
                        <h3 class="site-footer-title">همراه با ما</h3>
                        <div class="site-footer-content">
                            <ul class="social-links">
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-telegram"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-youtube-play"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-linkedin"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-twitter"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-github-circled-alt2"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-codeopen"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-mail-alt"></i></a>
                                </li>
                                <li class="social-links-item">
                                    <a href="#"><i class="fi fi-rss"></i></a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="site-footer-title">همراه با ما</h3>

                    </section>
                    <section class="site-footer-section">
                        <h3 class="site-footer-title">خبرنامه</h3>
                        <div class="site-footer-content">
                            <form action="" id="frmRegister">
                                <label class="register"></label>
                                <input type="text" placeholder="آدرس ایمیل">
                                <button class="register">ثبت نام</button>
                            </form>
                        </div>
                        <h3 class="site-footer-title">خبرنامه</h3>
                    </section>
                    <section class="site-footer-section">
                        <h3 class="site-footer-title">نوشتن مقاله</h3>
                        <div class="site-footer-content">
                            <p class="footer-text">صفحه <a href="http://css-tricks.ir/tale">انتشار مقاله</a> را مطالعه کنید</p>
                        </div>
                        <h3 class="site-footer-title">نوشتن مقاله</h3>
                    </section>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <p class="site-footer__text">استفاده از مطالب این سایت با ذکر منبع بلامانع است</p>
            <p class="site-footer__text site-footer__text--small">This website is not an official version of css-tricks.com</p>
        </div>
    </footer>
</div>
</body>
</html>