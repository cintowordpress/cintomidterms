<?php
 namespace MailPoetVendor\Doctrine\ORM; if (!defined('ABSPATH')) exit; class Version { const VERSION = '2.7.1-DEV'; public static function compare($version) { $currentVersion = \str_replace(' ', '', \strtolower(self::VERSION)); $version = \str_replace(' ', '', $version); return \version_compare($version, $currentVersion); } } 