<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://github.com/damarsimple/academy-app.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

host('api.dslab.id')
    ->setHostname('47.241.128.75')
    ->setRemoteUser('root')
    ->set('deploy_path', '/var/www/academy-be');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

task('install:dependancy', function () {
    run('cd {{release_path}} && composer install');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');


before('artisan:migrate:fresh', 'install:dependancy');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate:fresh');

task('data:fake', function () {
    run('cd {{release_path}} && php artisan data:fake');
});

after('artisan:migrate:fresh', 'data:fake');

task('key:generate', function () {
    run('cd {{release_path}} && php artisan config:clear && php artisan key:generate');
});

after('artisan:migrate:fresh', 'data:fake');
