<?php

return [
    'DB_DRIVER'   => 'pgsql',
    'DB_HOST'     => getenv('POSTGRESQL_ADDON_HOST'),
    'DB_DATABASE' => getenv('POSTGRESQL_ADDON_DB'),
    'DB_USERNAME' => getenv('POSTGRESQL_ADDON_USER'),
    'DB_PASSWORD' => getenv('POSTGRESQL_ADDON_PASSWORD'),
];
