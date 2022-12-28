<div class="menu">
    <div class="wrap-content">
        <ul class="menu__list">
            <li><a class="<?php if($com=='' || $com=='index') echo 'active'; ?> transition menu-item" href=""
                    title="<?=trangchu?>">Trang chủ</a></li>

            <li><a class="<?php if($com=='gioi-thieu') echo 'active'; ?> transition menu-item" href="gioi-thieu"
                    title="<?=gioithieu?>"><?=gioithieu?></a></li>

            <li>
                <a class="<?php if($com=='san-pham') echo 'active'; ?> transition menu-item" href="san-pham"
                    title="<?=sanpham?>">Sản phẩm</a>
                <?php if(count($splist)) { ?>
                <ul>
                    <?php foreach($splist as $klist => $vlist) {
                            $spcat = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_cat where id_list = ? and find_in_set('hienthi',status) order by numb,id desc",array($vlist['id'])); ?>
                    <li>
                        <a class="has-child transition" title="<?=$vlist['name'.$lang]?>"
                            href="<?=$vlist[$sluglang]?>"><?=$vlist['name'.$lang]?></a>
                    </li>
                    <?php } ?>
                </ul>
                <?php } ?>
            </li>
            <li>
                <a class="has-child <?php if($com=='du-an') echo 'active'; ?> transition menu-item" href="du-an"
                    title="Dự án">Dự án</a>
            </li>
            <li>
                <a class="has-child <?php if($com=='tin-tuc') echo 'active'; ?> transition menu-item" href="tin-tuc"
                    title="<?=tintuc?>"><?=tintuc?></a>
            </li>

            <li><a class="<?php if($com=='lien-he') echo 'active'; ?> transition menu-item" href="lien-he"
                    title="<?=lienhe?>"><?=lienhe?></a></li>
        </ul>
    </div>
</div>