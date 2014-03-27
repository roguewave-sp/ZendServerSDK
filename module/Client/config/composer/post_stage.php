<?php
// Start: AutoGenerated from @ZendServerClient

// Map back all composer env variables.
foreach ($_ENV as $key=> $value) {
    if (0 === ($pos = strpos($key, 'ZS_COMPOSER_'))) {
        putenv(substr($key, $pos),$value);
    }
}

###libLines###

copy(__DIR__ . '/composer.json', getenv('ZS_APPLICATION_BASE_DIR') . '/composer.json');
$cwd = getcwd();
chdir(__DIR__);

$phpBin = "/usr/local/zend/bin/php";
if (defined('PHP_BINARY')) {
    $phpBin = PHP_BINARY;
}

$command = 'post-install-cmd';
if (getenv('ZS_PREVIOUS_APP_VERSION')) {
    $command = 'post-update-cmd';
}

shell_exec("$phpBin composer.phar run-script $command -n -d " . getenv('ZS_APPLICATION_BASE_DIR'));
unlink(getenv('ZS_APPLICATION_BASE_DIR') . '/composer.json ');
chdir($cwd);
// End: AutoGenerated from @ZendServerClient
