# Wordpress Deplyment Using deployer

#1.Create a Project 
  mkdir deployer-project
  cd deployer-project and have set up test wordpress project

#2.#Installing Deployer is done through composer.

  composer require deployer/deployer 
  
#3. #Go to vendor/bin
   cd vendor/bin
   
  
#4. #Run `dep init` and to walk us through the steps to set up our deployer project.

   a. Select recipe language [php]:
   b. Select project template [common]: Select wordpress
   c. Enter repository -  'git@github.com:anjaliinfo/deployer.git'
   d. Enter Project Name - Project name [www]:
   e. Enter Host - Hosts (comma separated) []:
   
 #After Completing the above steps The Output we get -  that it created a deploy.php file.

"Successfully created deploy.php"  

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

     <?
         

#5. To Deploy the project run command - 'dep deploy'





   



