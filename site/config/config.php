<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),
  array(
    'code'    => 'cn',
    'name'    => 'Chinese (simplified)',
    'locale'  => 'zh_CN',
    'url'     => '/cn',
  ),
  array(
    'code'    => 'es',
    'name'    => 'Spanish',
    'locale'  => 'es_ES',
    'url'     => '/es',
  ),
  array(
    'code'    => 'fr',
    'name'    => 'French',
    'locale'  => 'fr_FR',
    'url'     => '/fr',
  ),
  array(
    'code'    => 'jp',
    'name'    => 'Japanese',
    'locale'  => 'jp_JP',
    'url'     => '/jp',
  ),
  array(
    'code'    => 'pl',
    'name'    => 'Polish',
    'locale'  => 'pl_PL',
    'url'     => '/pl',
  ),
  array(
    'code'    => 'ru',
    'name'    => 'Russian',
    'locale'  => 'ru_RU',
    'url'     => '/ru',
  ),
  array(
    'code'    => 'kr',
    'name'    => 'Korean',
    'locale'  => 'kr_KR',
    'url'     => '/kr',
  ),
  array(
    'code'    => 'cz',
    'name'    => 'Czech',
    'locale'  => 'cz_CZ',
    'url'     => '/cz',
  ),
));
