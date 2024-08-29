<!DOCTYPE html>
<html>
<head>
    <title>View Data</title>
</head>
<body>
    <h2>Retrieved Data:</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Uploaded File</th>
        </tr>
        <?php
        // Database connection parameters
        $servername = "braintuner.sc.ug"; // Replace with your server name
        $username = "Brain Tuner Junior School"; // Replace with your database username
        $password = "Tebadal112233"; // Replace with your database password
        $database = "BD"; // Replace with your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve data
        $sql = "SELECT * FROM your_table_name"; // Replace 'your_table_name' with the name of your table

        // Execute query
        $result = $conn->query($sql);

        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                // Output each row as a table row
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>0 results</td></tr>";
        }

        // Close connection
        $conn->close();
        ?>
    </table>
</body>
</html>
