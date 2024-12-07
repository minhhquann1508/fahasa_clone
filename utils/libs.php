<?php

function redirect($link, $message = null, $type = "success") {
    if ($message != null) {
        setToast($message, $type); // Set cookies for message and type
    }
    header("Location: " . $link);
    exit;
}

function setToast($message, $type = "success") {
    setcookie("toast_message", $message, time() + 2, "/"); // Set for 2 seconds
    setcookie("toast_type", $type, time() + 2, "/");
}

function showToast() {
    if (isset($_COOKIE['toast_message']) && isset($_COOKIE['toast_type'])) {
        $message = addslashes($_COOKIE['toast_message']); // Escape quotes to prevent JS errors
        $type = addslashes($_COOKIE['toast_type']);

        setcookie("toast_message", "", time() - 3600, "/");
        setcookie("toast_type", "", time() - 3600, "/");

        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    createToast('$type', '$message');
                });
              </script>";
    }
}