<?php

// Keep database credentials in a separate file
// 1. Easy to exclude this file from source code managers
// 2. Unique credentials on dev and prod servers
// 3. Unique credentials if working with multiple developers

define( "DB_SERVER", "localhost" );
define( "DB_USER", "root" );
define( "DB_PASS", "Winston321" );
define( "DB_NAME", "chain_gang" );

?>