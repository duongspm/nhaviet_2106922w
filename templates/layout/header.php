<div class="header">
    <div class="wrapper">
        <div class="headerr">
            <div class="header__item">
                <div class="header__icon">
                    <img src="assets/images/imgnew/Home.png" alt="<?=$setting['name'.$lang]?>">
                </div>

                <span>
                    Địa chỉ:
                    <div class="marquee">
                        <div>
                            <span>
                                <?=$optsetting['address']?>
                            </span>
                        </div>
                    </div>
                </span>
            </div>
            <div class="header__item">
                <div class="header__icon">
                    <img src="assets/images/imgnew/email.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>Email: <?=$optsetting['email']?></span>
            </div>
            <div class="header__item">
                <div class="header__icon">
                    <img src="assets/images/imgnew/link.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <span>MXH:</span>
                <?php if (!empty($social)){foreach($social as $v){?>
                <div class="social-item">
                    <a href="<?=$v['link']?>" title="<?=$setting['name'.$lang]?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '30x30x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
<div class="header__buttom">
    <div class="wrapper">
        <div class="header__buttomm">
            <?php if(!empty($logo)){?>
            <div class="header__logo">
                <a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition logo-menu" href=""
                    title="<?=trangchu?>">
                    <?=$func->getImage(['class' => '', 'sizes' => '250x74x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $logo['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <?php }?>
            <?php if(!empty($banner)){?>
            <div class="header__banner">
                <a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition logo-menu" href=""
                    title="<?=trangchu?>">
                    <?=$func->getImage(['class' => '', 'sizes' => '550x45x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $banner['photo'], 'alt' => $setting['name'.$lang]])?>
                </a>
            </div>
            <?php }?>
            <div class="header__hotline">
                <div class="header__hotline-icon">
                    <img src="assets/images/imgnew/user-headset.png" alt="<?=$setting['name'.$lang]?>">
                </div>
                <div class="header__hotline--content">
                    <span class="header__hotline-title">
                        Hotline 24/7:
                    </span>
                    <a class="header__hotline-hot"
                        href="tel:<?=$optsetting['hotline']?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
                </div>
            </div>
            <div class="header__search">
                <div class="search w-clear">
                    <input type="text" id="keyword" placeholder="..." onkeypress="doEnter(event,'keyword');" />
                    <p onclick="onSearch('keyword');"><i class="fas fa-search"></i></p>
                </div>
            </div>
        </div>
    </div>
</div>