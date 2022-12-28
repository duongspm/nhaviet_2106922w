<?php if(!empty($about)){?>
<div class="about">
    <div class="wrapper">
        <div class="aboutt">
            <div class="about__left">

                <div class="scale-img about__left-img hover_xam">
                    <?=$func->getImage(['class' => 'w-100', 'sizes' => '580x440x1', 'upload' => UPLOAD_NEWS_L, 'image' => $about['photo'], 'alt' => $about['name'.$lang]])?>
                </div>
            </div>
            <div class="about__right">
                <div class="about__title">
                    <span>
                        Welcome To!
                    </span>
                </div>
                <div class="about__name">
                    <span>
                        <?=$about['name'.$lang]?>
                    </span>
                </div>
                <div class="about__desc">
                    <?=htmlspecialchars_decode($about['desc'.$lang])?>
                </div>
                <div class="about__btn">
                    <a href="gioi-thieu" class="button button--greip"><span><span>Xem thêm</span></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!-- -->
<div class="producnb pd mr-top">
    <div class="wrapper">
        <div class="productnbb">
            <div class="heading__top">
                <span class="heading__title">Product</span>
                <span class="heading__name">sản phẩm</span>
            </div>

            <div class="productnb__list">
                <div class="paging-product"></div>
            </div>
        </div>
    </div>
</div>

<div class="dangky pd">
    <div class="wrapper">
        <div class="dangkyy">
            <div class="heading__top">
                <span class="heading__title heading__title--black">Sign up for</span>
                <span class="heading__name heading__name--black">Đăng ký nhận tin</span>
            </div>
            <div class="dangky__buttom">
                <div class="dangky__left">
                    <?php if(!empty($dkimg)){?>
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:30" data-sm-items="1:30"
                        data-md-items="1:30" data-lg-items="1:30" data-xlg-items="1:30" data-rewind="1"
                        data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php foreach($dkimg as $k => $v) { ?>
                        <div class="dangky__img scale-img effect10">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '590x390x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
                <div class="dangky__right">
                    <form class="validation-newsletter" novalidate method="post" action=""
                        enctype="multipart/form-data">
                        <div class="newsletter-input">
                            <input type="text" class="form-controld text-sm" id="fullname-newsletter"
                                name="dataNewsletter[fullname]" placeholder="Họ Và Tên: " required />
                            <div class="invalid-tooltip">Vui lòng nhập Họ và Tên</div>
                        </div>
                        <div class="newsletter-input">
                            <input type="number" class="form-controld text-sm" id="phone-newsletter"
                                name="dataNewsletter[phone]" placeholder="Số Điện Thoại: " required />
                            <div class="invalid-tooltip">Vui lòng nhập Số Điện Thoại</div>
                        </div>
                        <div class="newsletter-input">
                            <input type="email" class="form-controld text-sm" id="email-newsletter"
                                name="dataNewsletter[email]" placeholder="Email: " required />
                            <div class="invalid-tooltip"><?= vuilongnhapdiachiemail ?></div>
                        </div>
                        <div class="newsletter-input">
                            <input type="text" class="form-controld text-sm" id="content-newsletter"
                                name="dataNewsletter[content]" placeholder="Nội Dung: " required />
                            <div class="invalid-tooltip">Vui lòng nhập Nội dung</div>
                        </div>
                        <div class="newsletter-button">
                            <input type="submit" class="dangky-btn" name="submit-newsletter" value="ĐĂNG KÝ NHẬN TIN"
                                disabled>
                            <input type="hidden" class="btn btn-sm btn-danger w-100"
                                name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog pd">
    <div class="wrapper">
        <div class="blogg">
            <div class="heading__top">
                <span class="heading__title">Blog</span>
                <span class="heading__name">tin tức và sự kiện</span>
            </div>
        </div>
        <?php if(!empty($newsnb)){?>
        <div class="blog__list">
            <div class="slider-for">
                <?php foreach($newsnb as $v){?>
                <div>
                    <div class="blog__item">
                        <div class="blog__item--img">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '590x433x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="blog__item--name">
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                <?=$v['name'.$lang]?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="slider-nav">
                <?php foreach($newsnb as $v){?>
                <div>
                    <div class="blog__content">
                        <div class="blog__content--img">
                            <?= $func->getImage(['class' => 'w-100', 'sizes' => '95x101x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                        </div>
                        <div class="blog-content">
                            <a class="blog__content--name" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                <?=$v['name'.$lang]?>
                            </a>
                            <span class="blog__content--content">
                                <?=$v['desc'.$lang]?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
        <?php } else { ?>
        <div class="alert alert-warning" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
        <?php } ?>
    </div>
</div>
<div class="video-fb pd">
    <div class="wrapper">
        <div class="heading__top">
            <span class="heading__title heading__title--black">Social Network</span>
            <span class="heading__name heading__name--black">fanpage - videos</span>
        </div>
        <div class="video-fb">
            <div class="video__fb--left">
                <div class="fb-page" data-href="<?=$optsetting['fanpage']?>" data-tabs="timeline" data-width="590"
                    data-height="433" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <div class="fb-xfbml-parse-ignore">
                        <blockquote cite="<?=$optsetting['fanpage']?>">
                            <a href="<?=$optsetting['fanpage']?>">Facebook</a>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="video__fb--right">
                <div class="videod-list">
                    <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:30" data-sm-items="1:30"
                        data-md-items="1:30" data-lg-items="1:30" data-xlg-items="1:30" data-rewind="1"
                        data-autoplay="1" data-loop="1" data-lazyload="0" data-mousedrag="1" data-touchdrag="1"
                        data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1"
                        data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                        data-navcontainer=".control-brand">
                        <?php if(!empty($videoclip)) { foreach($videoclip as $k => $v) { ?>
                        <div class="video-frame">
                            <div class="video" data-fancybox="video" data-src="<?=$v['link_video']?>">
                                <div class="video-image scale-img">
                                    <?= $func->getImage(['class' => '', 'sizes' => '590x433x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]]) ?>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>