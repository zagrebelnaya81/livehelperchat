<?php if (erLhcoreClassUser::instance()->hasAccessTo('lhchat','take_screenshot')) : ?>
<li role="presentation"><a href="#main-user-info-screenshot-<?php echo $chat->id?>" aria-controls="main-user-info-screenshot-<?php echo $chat->id?>" role="tab" data-toggle="tab"><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/screenshot','Screenshot')?></a></a></li>
<?php endif;?>