<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 */

return [
    // ------------------------------------------
    // 'driver'   => 'mysql',
    'server'   => getenv('CRAFT_ENV_DB_HOST'),
    'user'     => getenv('CRAFT_ENV_DB_USER'),
    'password' => getenv('CRAFT_ENV_DB_PASS'),
    'database' => getenv('CRAFT_ENV_DB_NAME'),
    // 'schema' => getenv('CRAFT_ENV_DB_SCHEMA'),
    // 'tablePrefix' => getenv('CRAFT_ENV_DB_TABLE_PREFIX'),
    // ------------------------------------------
];
