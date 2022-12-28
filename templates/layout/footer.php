<div class="footer pd">
    <div class="footer-article">
        <div class="wrapper">
            <div class="heading__top">
                <span class="heading__title">Contact Us</span>
                <span class="heading__name"><?=$setting['name'.$lang]?></span>
            </div>
            <div class="footerr">
                <div class="footer__item">
                    <span class="footer__item-title">Địa chỉ liên hệ</span>
                    <div class="footer__item--content">
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/imgnew/icon-f.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Địa Chỉ: <?=$optsetting['address']?>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/imgnew/icon-f-02.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Điện Thoại: <a
                                    href="tel:<?=$optsetting['hotline']?>"><?=$func->formatPhone($optsetting['hotline'])?></a>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/imgnew/icon-f-03.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Email: <?=$optsetting['email']?>
                            </span>
                        </div>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/imgnew/icon-f-04.png" alt="<?=$setting['name'.$lang]?>">
                            </div>
                            <span>
                                Website: <?=$optsetting['website']?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="footer__item">
                    <span class="footer__item-title">Chính sách</span>
                    <?php if(!empty($policy)){?>
                    <div class="footer__item--content">
                        <?php foreach($policy as $v){?>
                        <div class="footer__item-info">
                            <div class="footer__item-icon">
                                <img src="assets/images/tag.png" alt="<?=$v['name'.$lang]?>">
                            </div>
                            <a href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>

                <div class="footer__map">
                    <?= htmlspecialchars_decode($optsetting['coords_iframe']) ?>
                </div>

            </div>
            <div class="social-footer">
                <?php if(!empty($social)){
                            foreach($social as $v){?>
                <div class="social-item">
                    <a href="<?=$v['link']?>">
                        <?=$func->getImage(['class' => '', 'sizes' => '46x46x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                    </a>
                </div>
                <?php }}?>
            </div>
        </div>
    </div>

    <?= $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<div class="footer-copyright">
    <span>
        All Rights Reserved. Designed by Nina.vn
    </span>
</div>

<a class="btn-phone btn-frame text-decoration-none"
    href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png.webp', 'alt' => 'Hotline']) ?></i>
</a>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank"
    href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png.webp', 'alt' => 'Zalo']) ?></i>
</a>