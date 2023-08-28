<?php
/**
 * Dokuwiki's Main Configuration File - Local Settings
 * Auto-generated by install script
 * Date: Fri, 25 Aug 2023 14:22:05 +0000
 */
$conf['title'] = 'Templum';
$conf['template'] = 'bootstrap3';
$conf['license'] = 'publicdomain';
$conf['savedir'] = '/app/www/public/data';
$conf['useacl'] = 1;
$conf['superuser'] = '@admin';
$conf['plugin']['authldap']['attributes'] = array();
$conf['plugin']['gitbacked']['pushAfterCommit'] = 1;
$conf['plugin']['gitbacked']['periodicPull'] = 1;
$conf['plugin']['gitbacked']['repoPath'] = '/app/www/public/data/gitrepo';
$conf['plugin']['gitbacked']['repoWorkDir'] = '/app/www/public/data/gitrepo';
$conf['plugin']['openlayersmap']['enableStamen'] = 0;
$conf['plugin']['openlayersmap']['enableGoogle'] = 1;
$conf['plugin']['publish']['hide_approved_banner'] = 1;
$conf['tpl']['bootstrap3']['bootswatchTheme'] = 'journal';
$conf['tpl']['bootstrap3']['useAvatar'] = 'gravatar';
$conf['tpl']['bootstrap3']['socialShareProviders'] = 'facebook,linkedin,microsoft-teams,pinterest,whatsapp,reddit,twitter,telegram,yammer,google-plus';
$conf['datadir'] = '/app/www/public/data/gitrepo/wiki/pages';
$conf['mediadir'] = '/app/www/public/data/gitrepo/wiki/media';