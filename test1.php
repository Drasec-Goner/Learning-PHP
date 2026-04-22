<?php
// Step 1: Initialize the multidimensional array
$weeklySchedule = [
    [
        "name" => "Alice",
        "shift" => "Morning",
        "hours" => [8, 8, 8, 8, 8, 0, 0] // Hours worked each day (Monday to Sunday)
    ],
    [
        "name" => "Bob",
        "shift" => "Evening",
        "hours" => [6, 6, 6, 6, 6, 5, 5]
    ],
    [
        "name" => "Charlie",
        "shift" => "Night",
        "hours" => [7, 7, 7, 7, 7, 0, 0]
    ],
];

// Step 2: Loop through each employee to calculate total hours
echo "<h1>Weekly Schedule Summary</h1>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Name</th><th>Shift</th><th>Total Hours Worked</th></tr>";

foreach ($weeklySchedule as $employee) {
    $totalHours = 0; // Initialize total hours for the employee
    
    // Calculate the total hours using a loop
    foreach ($employee["hours"] as $hours) {
        $totalHours += $hours;
    }
    
    // Display the result in a table row
    echo "<tr>";
    echo "<td>{$employee['name']}</td>";
    echo "<td>{$employee['shift']}</td>";
    echo "<td>{$totalHours}</td>";
    echo "</tr>";
}

echo "</table>";
?>
