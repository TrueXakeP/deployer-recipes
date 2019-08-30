<?php

namespace Deployer;

require_once __DIR__ . '/drupal.php';

// Shared directories and files.
add('shared_files', [
  '.env',
]);

add('rsync', [
  'include' => [
    'web/core',
    'web/libraries',
    'web/modules/contrib',
    'web/profiles/contrib',
    'web/themes/contrib',
    'drush/Commands',
  ],
]);

