<?php
// Display PHP version and configuration
echo "PHP Version: " . phpversion() . "<br>";

// Display server information
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Server Address: " . $_SERVER['SERVER_ADDR'] . "<br>";
echo "Server Port: " . $_SERVER['SERVER_PORT'] . "<br>";

// Display PHP configuration settings
echo "PHP Configuration:<br>";
echo "------------------<br>";
echo "Memory Limit: " . ini_get('memory_limit') . "<br>";
echo "Max Execution Time: " . ini_get('max_execution_time') . "<br>";
echo "Upload Max Filesize: " . ini_get('upload_max_filesize') . "<br>";
echo "Post Max Size: " . ini_get('post_max_size') . "<br>";

// Display information about loaded PHP extensions
echo "Loaded Extensions: " . implode(", ", get_loaded_extensions()) . "<br>";
?>
