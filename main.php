<?php
if (!defined('DOKU_INC'))
    die();
require_once 'template.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang'] ?>"
      lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php tpl_pagetitle() ?>
            [<?php echo strip_tags($conf['title']) ?>]
        </title>

        <?php tpl_metaheaders() ?>
        <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <?php amdy_tpl_link_as_li(wl($ID, 'do=backlink'), tpl_pagetitle($ID, true), 'title="' . $lang['btn_backlink'] . '"') ?>
                            <?php amdy_tpl_link_as_li(wl(), $conf['title'], 'name="dokuwiki__top" id="dokuwiki__top" accesskey="h" title="[H]"') ?>
                        </ul>
                        <p class="navbar-text pull-right"><?php amdy_tpl_searchform() ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Page</li>
                            <li><a href="">Href 1</a></li>
                            <li><a href="">Href 2</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span10">
                    <div class="row-fluid">
                        <div class="span1">
                            <?php tpl_button('edit') ?>
                        </div>
                        <div class="span6">
                            <?php tpl_button('recent') ?>
                        </div>
                    </div>
                    <?php html_msgarea() ?>
                    <div class="row-fluid">
                        <div class="span10">
                            <?php html_msgarea() ?>
                        </div>
                    </div>
                    <?php if ($conf['breadcrumbs']) { ?>
                        <div class="row-fluid">
                            <div class="span10">
                                <?php amdy_tpl_breadcrumbs() ?>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($conf['youarehere']) { ?>
                        <div class="row-fluid">
                            <div class="span10">
                                <?php tpl_youarehere() ?>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="row-fluid">
                        <div class="span10">
                            <div class="hero-unit">
                                <!-- wikipage start -->
                                <?php tpl_content() ?>
                                <!-- wikipage stop -->
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span5">
                            <span class="badge badge-info"><?php tpl_userinfo() ?></span>
                        </div>
                        <div class="span5">
                            <span class="badge badge-info"><?php tpl_pageinfo() ?></span>
                        </div>
                    </div>
                </div><!--/span-->

            </div>
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li><?php tpl_button('edit') ?></li>
                                <li><?php tpl_button('history') ?></li>
                                <li><?php tpl_button('revert') ?></li>
                            </ul>
                            <ul class="nav pull-right">
                                <li><?php tpl_button('subscribe') ?></li>
                                <li><?php tpl_button('media') ?></li>
                                <li><?php tpl_button('admin') ?></li>
                                <li><?php tpl_button('profile') ?></li>
                                <li><?php tpl_button('login') ?></li>
                                <li><?php tpl_button('index') ?></li>
                                <li><?php tpl_button('top') ?></li>
                            </ul>
                        </div><!-- /.nav-collapse -->
                    </div>
                    <p><?php tpl_license(false); ?></p>
                </div><!-- /navbar-inner -->
            </div>
        </div>
        <div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug() ?></div>
    </body>
</html>
