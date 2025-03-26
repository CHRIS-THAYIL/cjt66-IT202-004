<?php
ini_set('display_errors', 0); // Disable error display
ini_set('log_errors', 1); // Enable error logging
error_reporting(E_ALL);


// Set custom error handler for runtime errors
set_error_handler(function ($severity, $message, $file, $line) {
  // Log the error to the terminal
  error_log("Error: [$severity] $message in $file on line $line");
  // Display custom 500 error page
  include '500.php';
  exit();
});


// Set custom exception handler for uncaught exceptions
set_exception_handler(function ($exception) {
  // Log the exception to the terminal
  error_log("Exception: " . $exception->getMessage() . " in " . $exception->getFile() . " on line " .
     $exception->getLine() . "\nStack trace:\n" . $exception->getTraceAsString());
  // Display custom 500 error page
  include '500.php';
  exit();
});


// Set shutdown function to catch fatal errors
register_shutdown_function(function () {
  $error = error_get_last();
  if ($error !== NULL) {
     // If a fatal error occurred, log it to the terminal
     error_log("Fatal error: " . $error['message'] . " in " . $error['file'] . " on line " .
        $error['line']);
     // Display custom 500 error page
     include '500.php';
     exit();
  }
});
?>
