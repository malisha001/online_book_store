<?php
require 'config.php';
session_start();

if (isset($_GET['search_query'])) {
    $searchQuery = $_GET['search_query'];
    // Sanitize the search query
    $searchQuery = mysqli_real_escape_string($conn, $searchQuery);

    // Your SQL query to retrieve the searched books
    $sql = "SELECT * FROM book WHERE title LIKE '%$searchQuery%'";
    $product = mysqli_query($conn, $sql);
    // Check if the query executed successfully
    if ($product) {
        // Fetch the results
        while ($row = mysqli_fetch_assoc($product)) {
            // Display the searched books
            // ...
        }
    } else {
        // Query execution failed
        echo "Error: " . mysqli_error($conn);
    }
}
