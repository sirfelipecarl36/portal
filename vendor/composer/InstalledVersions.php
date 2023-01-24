<?php

/*
 * This file is part of Composer.
 *
 * (c) Nils Adermann <naderman@naderman.de>
 *     Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;

/**
 * This class is copied in every Composer installed project and available to all
 *
 * To require it's presence, you can require `composer-runtime-api ^2.0`
 */
class InstalledVersions
{
    private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => 'd80c90020447a8966feb7ef108c5c2d12a25be7a',
    'name' => 'drupal/recommended-project',
  ),
  'versions' => 
  array (
    'asm89/stack-cors' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b9c31def6a83f84b4d4a40d35996d375755f0e08',
    ),
    'composer/installers' => 
    array (
      'pretty_version' => 'v1.12.0',
      'version' => '1.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
    ),
    'composer/semver' => 
    array (
      'pretty_version' => '3.3.2',
      'version' => '3.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3953f23262f2bff1919fc82183ad9acb13ff62c9',
    ),
    'doctrine/annotations' => 
    array (
      'pretty_version' => '1.13.3',
      'version' => '1.13.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '648b0343343565c4a056bfc8392201385e8d89f0',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c268e882d4dbdd85e36e4ad69e02dc284f89d229',
    ),
    'doctrine/reflection' => 
    array (
      'pretty_version' => '1.2.3',
      'version' => '1.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '1034e5e71f89978b80f9c1570e7226f6c3b9b6fb',
    ),
    'drupal/bank_zymphonies_theme' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2.0.2',
    ),
    'drupal/core' => 
    array (
      'pretty_version' => '9.5.2',
      'version' => '9.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2ce2d9dbc3d248d7fd6bf9c9a50cce7e8dc799a6',
    ),
    'drupal/core-annotation' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-assertion' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-bridge' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-class-finder' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-composer-scaffold' => 
    array (
      'pretty_version' => '9.5.2',
      'version' => '9.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'df1f779d3f94500f6cc791427aa729e0ba4b2464',
    ),
    'drupal/core-datetime' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-dependency-injection' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-diff' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-discovery' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-event-dispatcher' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-file-cache' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-file-security' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-filesystem' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-front-matter' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-gettext' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-graph' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-http-foundation' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-php-storage' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-plugin' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-project-message' => 
    array (
      'pretty_version' => '9.5.2',
      'version' => '9.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5dfa0b75a057caf6542be67f61e7531c737db48c',
    ),
    'drupal/core-proxy-builder' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-recommended' => 
    array (
      'pretty_version' => '9.5.2',
      'version' => '9.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eab84e96280017f11e0dfba7f9995facaa803d13',
    ),
    'drupal/core-render' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-serialization' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-transliteration' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-utility' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-uuid' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/core-version' => 
    array (
      'replaced' => 
      array (
        0 => '9.5.2',
      ),
    ),
    'drupal/exclude_node_title' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8.x-1.4',
    ),
    'drupal/markdown' => 
    array (
      'pretty_version' => '3.0.0-rc2',
      'version' => '3.0.0.0-RC2',
      'aliases' => 
      array (
      ),
      'reference' => '3.0.0-rc2',
    ),
    'drupal/recommended-project' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => 'd80c90020447a8966feb7ef108c5c2d12a25be7a',
    ),
    'drupal/tara' => 
    array (
      'pretty_version' => '10.0.4',
      'version' => '10.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '10.0.4',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.5',
      'version' => '3.2.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b531a2311709443320c786feb4519cfaf94af796',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '6.5.8',
      'version' => '6.5.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a52f0440530b54fa079ce76e8c5d196a42cad981',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '1.5.2',
      'version' => '1.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b94b2807d85443f9719887892882d0329d1e2598',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '2.14.0',
      'version' => '2.14.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6cb35f61913f06b2c91075db00f67cfd78869e28',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.9.0',
      'version' => '2.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '891ad70986729e20ed2e86355fcf93c9dc238a5f',
    ),
    'laminas/laminas-feed' => 
    array (
      'pretty_version' => '2.17.0',
      'version' => '2.17.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1ccb024ea615606ed1d676ba0fa3f22a398f3ac0',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.11.0',
      'version' => '3.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aad7d2b11ba0069ba0d9b40f6dde3c2fa664b57f',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '1.6.7',
      'version' => '1.6.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '2b8185c13bc9578367a5bf901881d1c1b5bbd09b',
    ),
    'masterminds/html5' => 
    array (
      'pretty_version' => '2.7.6',
      'version' => '2.7.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '897eb517a343a2281f11bc5556d6548db7d93947',
    ),
    'pear/archive_tar' => 
    array (
      'pretty_version' => '1.4.14',
      'version' => '1.4.14.0',
      'aliases' => 
      array (
      ),
      'reference' => '4d761c5334c790e45ef3245f0864b8955c562caa',
    ),
    'pear/console_getopt' => 
    array (
      'pretty_version' => 'v1.4.3',
      'version' => '1.4.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a41f8d3e668987609178c7c4a9fe48fecac53fa0',
    ),
    'pear/pear-core-minimal' => 
    array (
      'pretty_version' => 'v1.10.11',
      'version' => '1.10.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '68d0d32ada737153b7e93b8d3c710ebe70ac867d',
    ),
    'pear/pear_exception' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b14fbe2ddb0b9f94f5b24cf08783d599f776fff0',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.4',
      'version' => '1.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd49695b909c3b7628b6289db5479a1c204601f11',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'roundcube/plugin-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'rsky/pear-core-min' => 
    array (
      'replaced' => 
      array (
        0 => 'v1.10.11',
      ),
    ),
    'shama/baton' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'stack/builder' => 
    array (
      'pretty_version' => 'v1.0.6',
      'version' => '1.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a4faaa6f532c6086bc66c29e1bc6c29593e1ca7c',
    ),
    'symfony-cmf/routing' => 
    array (
      'pretty_version' => '2.3.4',
      'version' => '2.3.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbcdf2f6301d740454ba9ebb8adaefd436c36a6b',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '33fa45ffc81fdcc1ca368d4946da859c8cdb58d9',
    ),
    'symfony/debug' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a692492190773c5310bc7877cb590c04c2f05be',
    ),
    'symfony/dependency-injection' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '9065fe97dbd38a897e95ea254eb5ddfe1310f734',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => 'be731658121ef2d8be88f3a1ec938148a9237291',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e866e9e5c1b22168e0ce5f0b467f19bba61266a',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v1.1.13',
      'version' => '1.1.13.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d5cd762abaa6b2a4169d3e77610193a7157129e',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1',
      ),
    ),
    'symfony/http-client-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ba6a9f0e8f3edd190520ee3b9a958596b6ca2e70',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '191413c7b832c015bb38eae963f2e57498c3c173',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v4.4.49',
      'version' => '4.4.49.0',
      'aliases' => 
      array (
      ),
      'reference' => '4e36db8103062c62b3882b1bd297b02de6b021c4',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v5.4.13',
      'version' => '5.4.13.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bb2ccf759e2b967dcd11bdee5bdf30dddd2290bd',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-iconv' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '927013f3aac555983a5059aada98e1907d842695',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php73' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cee9cdc4f7805e2699d9fd66991a0e6df8252a2',
    ),
    'symfony/psr-http-message-bridge' => 
    array (
      'pretty_version' => 'v2.1.4',
      'version' => '2.1.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a125b93ef378c492e274f217874906fb9babdebb',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v4.4.44',
      'version' => '4.4.44.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f7751fd8b60a07f3f349947a309b5bdfce22d6ae',
    ),
    'symfony/serializer' => 
    array (
      'pretty_version' => 'v4.4.47',
      'version' => '4.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '6e01d63c55657930a6de03d6e36aae50af98888d',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
    ),
    'symfony/service-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v4.4.47',
      'version' => '4.4.47.0',
      'aliases' => 
      array (
      ),
      'reference' => '45036b1d53accc48fe9bab71ccd86d57eba0dd94',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v2.5.2',
      'version' => '2.5.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0',
      ),
    ),
    'symfony/validator' => 
    array (
      'pretty_version' => 'v4.4.48',
      'version' => '4.4.48.0',
      'aliases' => 
      array (
      ),
      'reference' => '54781a4c41efbd283b779110bf8ae7f263737775',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.4.17',
      'version' => '5.4.17.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad74890513d07060255df2575703daf971de92c7',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v4.4.45',
      'version' => '4.4.45.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aeccc4dc52a9e634f1d1eebeb21eacfdcff1053d',
    ),
    'twig/twig' => 
    array (
      'pretty_version' => 'v2.15.4',
      'version' => '2.15.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3e059001d6d597dd50ea7c74dd2464b4adea48d3',
    ),
    'typo3/phar-stream-wrapper' => 
    array (
      'pretty_version' => 'v3.1.7',
      'version' => '3.1.7.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cc2f04a4e2f5c7e9cc02a3bdf80fae0f3e11a8c',
    ),
  ),
);
    private static $canGetVendors;
    private static $installedByVendor = array();

    /**
     * Returns a list of all package names which are present, either by being installed, replaced or provided
     *
     * @return string[]
     * @psalm-return list<string>
     */
    public static function getInstalledPackages()
    {
        $packages = array();
        foreach (self::getInstalled() as $installed) {
            $packages[] = array_keys($installed['versions']);
        }


        if (1 === \count($packages)) {
            return $packages[0];
        }

        return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
    }

    /**
     * Checks whether the given package is installed
     *
     * This also returns true if the package name is provided or replaced by another package
     *
     * @param  string $packageName
     * @return bool
     */
    public static function isInstalled($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (isset($installed['versions'][$packageName])) {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks whether the given package satisfies a version constraint
     *
     * e.g. If you want to know whether version 2.3+ of package foo/bar is installed, you would call:
     *
     *   Composer\InstalledVersions::satisfies(new VersionParser, 'foo/bar', '^2.3')
     *
     * @param VersionParser $parser      Install composer/semver to have access to this class and functionality
     * @param string        $packageName
     * @param string|null   $constraint  A version constraint to check for, if you pass one you have to make sure composer/semver is required by your package
     *
     * @return bool
     */
    public static function satisfies(VersionParser $parser, $packageName, $constraint)
    {
        $constraint = $parser->parseConstraints($constraint);
        $provided = $parser->parseConstraints(self::getVersionRanges($packageName));

        return $provided->matches($constraint);
    }

    /**
     * Returns a version constraint representing all the range(s) which are installed for a given package
     *
     * It is easier to use this via isInstalled() with the $constraint argument if you need to check
     * whether a given version of a package is installed, and not just whether it exists
     *
     * @param  string $packageName
     * @return string Version constraint usable with composer/semver
     */
    public static function getVersionRanges($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            $ranges = array();
            if (isset($installed['versions'][$packageName]['pretty_version'])) {
                $ranges[] = $installed['versions'][$packageName]['pretty_version'];
            }
            if (array_key_exists('aliases', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
            }
            if (array_key_exists('replaced', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
            }
            if (array_key_exists('provided', $installed['versions'][$packageName])) {
                $ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
            }

            return implode(' || ', $ranges);
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as version, use satisfies or getVersionRanges if you need to know if a given version is present
     */
    public static function getPrettyVersion($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['pretty_version'])) {
                return null;
            }

            return $installed['versions'][$packageName]['pretty_version'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @param  string      $packageName
     * @return string|null If the package is being replaced or provided but is not really installed, null will be returned as reference
     */
    public static function getReference($packageName)
    {
        foreach (self::getInstalled() as $installed) {
            if (!isset($installed['versions'][$packageName])) {
                continue;
            }

            if (!isset($installed['versions'][$packageName]['reference'])) {
                return null;
            }

            return $installed['versions'][$packageName]['reference'];
        }

        throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
    }

    /**
     * @return array
     * @psalm-return array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}
     */
    public static function getRootPackage()
    {
        $installed = self::getInstalled();

        return $installed[0]['root'];
    }

    /**
     * Returns the raw installed.php data for custom implementations
     *
     * @return array[]
     * @psalm-return array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>}
     */
    public static function getRawData()
    {
        return self::$installed;
    }

    /**
     * Lets you reload the static array from another file
     *
     * This is only useful for complex integrations in which a project needs to use
     * this class but then also needs to execute another project's autoloader in process,
     * and wants to ensure both projects have access to their version of installed.php.
     *
     * A typical case would be PHPUnit, where it would need to make sure it reads all
     * the data it needs from this class, then call reload() with
     * `require $CWD/vendor/composer/installed.php` (or similar) as input to make sure
     * the project in which it runs can then also use this class safely, without
     * interference between PHPUnit's dependencies and the project's dependencies.
     *
     * @param  array[] $data A vendor/composer/installed.php data set
     * @return void
     *
     * @psalm-param array{root: array{name: string, version: string, reference: string, pretty_version: string, aliases: string[]}, versions: list<string, array{pretty_version: ?string, version: ?string, aliases: ?string[], reference: ?string, replaced: ?string[], provided: ?string[]}>} $data
     */
    public static function reload($data)
    {
        self::$installed = $data;
        self::$installedByVendor = array();
    }

    /**
     * @return array[]
     */
    private static function getInstalled()
    {
        if (null === self::$canGetVendors) {
            self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
        }

        $installed = array();

        if (self::$canGetVendors) {
            // @phpstan-ignore-next-line
            foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
                if (isset(self::$installedByVendor[$vendorDir])) {
                    $installed[] = self::$installedByVendor[$vendorDir];
                } elseif (is_file($vendorDir.'/composer/installed.php')) {
                    $installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
                }
            }
        }

        $installed[] = self::$installed;

        return $installed;
    }
}
