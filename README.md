# Wordpress Deplyment Using deployer

# 1.Create a Project 
  mkdir deployer-project
  cd deployer-project and have set up test wordpress project
  
![image](https://user-images.githubusercontent.com/98171488/226970430-8d69e12c-866e-4399-8765-1621da015f07.png)


# Installing Deployer is done through composer.

  composer require deployer/deployer 
  

  
# Go to vendor/bin
   cd vendor/bin
![image](https://user-images.githubusercontent.com/98171488/226970221-9aebc08c-2744-4013-af34-90094b95c7a9.png)

   
  
# Run `dep init` and to walk us through the steps to set up our deployer project.

   a. Select recipe language [php]:
   b. Select project template [common]: Select wordpress
   c. Enter repository -  'git@github.com:anjaliinfo/deployer.git'
   d. Enter Project Name - Project name [www]:
   e. Enter Host - Hosts (comma separated) []:
   
   ![image](https://user-images.githubusercontent.com/98171488/226970100-072c0f27-0583-40ad-97b0-12937fb77146.png)

   
 # After Completing the above steps The Output we get -  that it created a deploy.php file.

"Successfully created deploy.php"  
   deployer.php looks like
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

     ?>
         

  # To Deploy the project run command - 'dep deploy'





   



