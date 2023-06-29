<?php
include("session.php");

// Get the current date
$currentDate = date("Y-m-d");

// Query to fetch expenses with due amount
$query = "SELECT * FROM expenses WHERE user_id='$userid' AND expense > 0 AND expensedate < '$currentDate'";
$result = mysqli_query($con, $query) or die("Query Failed!");

// Check if there are any expenses with due amount
if (mysqli_num_rows($result) > 0) {
    echo "You have the following expenses with due amount:<br><br>";

    // Display the expenses with due amount
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Expense Amount: $" . $row['expense'] . "<br>";
        echo "Expense Due Date: " . $row['expensedate'] . "<br>";
        echo "Expense Category: " . $row['expensecategory'] . "<br><br>";
    }
} else {
    echo "No expenses with due amount.";
}

// Close the database connection
mysqli_close($con);
?>