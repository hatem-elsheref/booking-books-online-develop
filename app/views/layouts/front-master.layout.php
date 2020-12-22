<?php

require_once APP_TEMPLATE_PATH.DS.$defaultFolder.DS.'header.template.php';
require_once APP_TEMPLATE_PATH.DS.$defaultFolder.DS.'navbar.template.php';
if (file_exists($view)) require_once $view;
require_once APP_TEMPLATE_PATH.DS.$defaultFolder.DS.'footer.template.php';


