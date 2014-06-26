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
  'version' => '6.0.3.1',
  'dbname' => 'owndb',
  'dbhost' => 'localhost',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'root',
  'dbpassword' => '',
  'installed' => true,
  'maxZipInputSize' => 838860800,
  'allowZipDownload' => true,
  "theme" => "ownCambo",
);
````````