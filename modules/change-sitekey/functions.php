<?php

/**
 * @Project SITEKEY_CHANGER 4.x
 * @Author KENNY NGUYEN (nguyentiendat713@gmail.com) 
 * @Copyright (C) 2015 tradacongnghe.com. All rights reserved
 * @Based on NukeViet CMS 
 * @License GNU/GPL version 2 or any later version
 * @Createdate  Fri, 18 Sep 2015 11:52:59 GMT
 */

if ( ! defined( 'NV_SYSTEM' ) ) die( 'Stop!!!' );

define( 'NV_IS_MOD_SYSTEM_KEY_CHANGER', true );
define( 'TABLE_PHOTO_NAME', NV_PREFIXLANG . '_' . $module_data ); 
 
require_once NV_ROOTDIR . '/modules/' . $module_file . '/global.functions.php';
