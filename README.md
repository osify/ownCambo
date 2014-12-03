ownCloud - Custom Theme (ownCambo)
##################################

Read how to create theme of ownCloud at: https://github.com/owncloud/themes

The template here is replacing the graphic.

Structure - ownCambo
##################################

````````````
+
+-design
+-owncloud/themes/
	ownCambo
		+---core
		¦   +---css
		¦   ¦   +---images
		¦   +---img
		¦       +---actions
		¦       +---filetypes
		¦       +---places
		¦       +---rating		
		+---settings
			+---templates 
````````````		

The folder: 
- "design" is about the resource that we need to change		
- Place the logos you change in folder: ownCambo/core/img  
- To convert your logo to format SVG, please use Adobe Illustrator


Settings file: config.php

````````
<?php
$CONFIG = array (
  'instanceid' => 'XXXX',
  'passwordsalt' => 'XXX',
  'trusted_domains' => 
  array (
    0 => 'owncloud.loc',
  ),
  'datadirectory' => '/home/owncloud',
  'dbtype' => 'mysql',
  'version' => '7.0.3.4',
  'dbname' => 'owndb',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'root',
  'dbpassword' => '',
  'installed' => true,
  'theme' => 'ownCambo',
  'maintenance' => false,
  'share_folder' => '/Shared',
);
````````

Change logs
##################################
ownCloud 2.0-beta
- ownCloud version 7.0.x
- Update background to green style

ownCloud 1.0
- ownCloud version 6.x