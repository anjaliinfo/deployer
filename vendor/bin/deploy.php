<?php
namespace Deployer;

require 'recipe/wordpress.php';

// Config

set('repository', 'git@github.com:anjaliinfo/deployer.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('167.99.81.98')
    ->set('remote_user', 'anjaliinfo')
    ->set('deploy_path', '~/public_html');

// Hooks

after('deploy:failed', 'deploy:unlock');
