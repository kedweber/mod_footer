<div class="footer">
    <div class="row <?= $params->newsletter ? "margin-bottom" : null; ?>">
        <? if ($params->contact): ?>
        <div class="col-md-2 col-sm-12">
            <header>
                <h1><?= $params->contact_header; ?></h1>
            </header>
            <?= $params->contact_description; ?>
        </div>
        <? endif; ?>
        <? if ($params->visiting): ?>
        <div class="col-md-2 col-sm-12">
            <header>
                <h1><?= $params->visiting_header; ?></h1>
            </header>
            <?= $params->visiting_description; ?>
        </div>
        <? endif; ?>
        <? if ($params->follow): ?>
        <div class="col-md-4 col-sm-12">
            <header>
                <h1><?= $params->follow_header; ?></h1>
            </header>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_facebook)) ?>"><i class="circle facebook"><i class="icon-facebook"></i></i><?= @text('FOOTER_FOLLOW_FACEBOOK'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_twitter)) ?>"><i class="circle twitter"><i class="icon-twitter"></i></i><?= @text('FOOTER_FOLLOW_TWITTER'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_linkedin)) ?>"><i class="circle linkedin"><i class="icon-linkedin"></i></i><?= @text('FOOTER_FOLLOW_LINKEDIN'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_delicious)) ?>"><i class="circle"><img class="social-icon" src="templates/web2fordev/images/delicious.png" width="22" height="22"></i><?= @text('FOOTER_FOLLOW_DELICIOUS'); ?></a>
                    </p>
                </div>
                <div class="col-md-6 col-sm-12">
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_dgroups)) ?>"><i class="circle"><img class="social-icon" src="templates/web2fordev/images/dgroups-footer.png"></i><?= @text('FOOTER_FOLLOW_DGROUPS'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_rss)) ?>"><i class="circle feed"><i class="icon-feed"></i></i><?= @text('FOOTER_FOLLOW_RSS'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_vimeo)) ?>"><i class="circle vimeo"><i class="icon-vimeo"></i></i><?= @text('FOOTER_FOLLOW_VIMEO'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" href="<?= @helper('mod://site/bottom.template.helper.parser.link', array('url' => $params->follow_slideshare)) ?>"><i class="circle slideshare"><img class="social-icon" src="templates/web2fordev/images/slideshare.png" width="18" height="18"></i><?= @text('FOOTER_FOLLOW_SLIDESHARE'); ?></a>
                    </p>
                </div>
            </div>
        </div>
        <? endif; ?>
        <? if ($params->newsletter): ?>
        <div class="col-md-4 col-sm-12">
            <header>
                <h1><?= $params->newsletter_header; ?></h1>
            </header>
            <p><?= $params->newsletter_signup; ?></p>
            <div class="input-group">
                <input type="text" class="form-control input-newsletter" placeholder="<?= $params->newsletter_placeholder; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default input-newsletter btn-newsletter" type="button"><?= $params->newsletter_signup_button; ?></button>
                </span>
            </div>
            <p><?= $params->newsletter_signup_description; ?></p>
        </div>
        <? endif; ?>
    </div>
    <div class="row margin-bottom">
        <? if($params->btn_up): ?>
            <div class="col-xs-1 pull-right" style="padding-right: 50px; margin-top: 45px;">
                <a href="#">
                    <img src="templates/web2fordev/images/up.png" />
                </a>
            </div>
        <? endif; ?>
        <? if($params->logo): ?>
        <div class="col-xs-3 footer-logo" style="margin-top: 10px;">
            <img src="templates/web2fordev/images/web2fordev-footer.png" />
        </div>
        <? endif; ?>

        <? if($params->copyright): ?>
            <div class="col-md-8 col-xs-12 pull-right">
                <ul class="copyright">
                    <? if($params->copyright_text) : ?>
                        <li><span class="copyright"><?= $params->copyright_text; ?></span></li>
                    <? endif; ?>
                    <? if($copyright_menu) : ?>
                        <? foreach($copyright_menu as $menu_item): ?>
                            <li><a href="<?= @route($menu_item->link); ?>"><?= $menu_item->title; ?></a></li>
                        <? endforeach; ?>
                    <? endif; ?>
                </ul>
            </div>
        <? endif; ?>
    </div>
</div>