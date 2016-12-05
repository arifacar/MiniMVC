<?php

/**
 * SITE_URL
 * 
 * URL to your MiniMVC root. Typically this will be your base URL,
 * 
 * http://example.com/
 * 
 * You should always configure this explicitly and never rely on auto-guessing, 
 * especially in production environments.
 */
define("SITE_URL", "http://localhost/minimvc");

/**
 * ADMIN_URL
 * 
 * URL to your project admin. Maybe you can change to security.
 * 
 */
define("ADMIN_URL", "http://localhost/minimvc/tr/admin");
define("PANEL_URL", "http://localhost/minimvc/tr/panel");
define("PUBLIC_URL", "http://localhost/minimvc/public");
define("ADMIN_PUBLIC_URL", "http://localhost/minimvc/public/admin");

define("DBNAME", "minimvc");
define("DBUSER", "root");
define("DBPASS", "root");

define("tr", 1);
define("en", 2);


define("MAIL_ADDRESS", "noreply@arifacar.com");
define("MAIL_ADDRESS_PASS", "test");
define("MAIL_ADDRESS_NAME", "No Reply Mail");
define("MAIL_HOST", "smtp.yandex.com");
define("MAIL_PORT", "587");
define("MAIL_CHARSET", "UTF-8");

define("SCHOOL_PAGE_SIZE", "5");
?>
