<?php
$servername = "localhost";
$username = "root";
$password = "codegym";
$dbname = "phpDemo";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
echo "Kết nối thành công";

// sql to create table
//$sql = "CREATE TABLE MyGuests (
//id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//firstname VARCHAR(30) NOT NULL,
//lastname VARCHAR(30) NOT NULL,
//email VARCHAR(50),
//reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//)";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "Error creating table: " . $conn->error;
//}


//// Create database
//$sql = "CREATE DATABASE myDB";
//if ($conn->query($sql) === TRUE) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . $conn->error;
//}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES
//    ('John', 'Doe', 'john@example.com'),
//    ('John', 'Terry', 'Terry@example.com'),
//    ('Ryan', 'Giggs', 'Giggs@example.com'),
//    ('Paul', 'Scholes', 'Scholes@example.com'),
//    ('Wayne', 'Rooney', 'Rooney@example.com'),
//    ('David', 'DeGea', 'DeGea@example.com'),
//    ('Andy', 'Cole', 'Cole@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Quoc', 'Nhan', 'Nhan@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    $last_id = $conn->insert_id;
//    echo "New record created successfully. Last inserted ID is: " . $last_id;
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com'), ('Bao', 'Khanh', 'Khanh@example.com'), ('Julie', 'Dooley', 'julie@example.com');";
//if ($conn->query($sql) === TRUE) {
//    echo "New records created successfully.";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}


//// prepare and bind
//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $firstname, $lastname, $email);
//
//// set parameters and execute
//$firstname = "John";
//$lastname = "Doe";
//$email = "john@example.com";
//$stmt->execute();
//
//$firstname = "Mary";
//$lastname = "Moe";
//$email = "mary@example.com";
//$stmt->execute();
//
//$firstname = "Julie";
//$lastname = "Dooley";
//$email = "julie@example.com";
//$stmt->execute();
//
//echo "New records created successfully";
//
//$stmt->close();

//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

//$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

//$stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname = ?");
//$stmt->bind_param("s", $lastname);
//$lastname = 'Doe';
//$stmt->execute();
//$resultSet = $stmt->get_result();
//$results = $resultSet->fetch_All();
//print_r($results);
//// output data of each row
//foreach ($results as $row) {
//    echo "id: " . $row[0] . " - Name: " . $row[1] . " " . $row[2] . "<br>";
//}

//$sql = "SELECT id, firstname, lastname FROM MyGuests order by lastname";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

// sql to delete a record
//$sql = "DELETE FROM MyGuests WHERE id=3";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Record deleted successfully";
//} else {
//    echo "Error deleting record: " . $conn->error;
//}

//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
//
//if ($conn->query($sql) === TRUE) {
//    echo "Record updated successfully";
//} else {
//    echo "Error updating record: " . $conn->error;
//}

//$sql = "SELECT id, firstname, lastname FROM MyGuests order by lastname limit 5 offset 10";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
<tr>
<th>ID</th>
<th>Name</th>
</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
<tr>
<td>".$row["id"]."</td>
<td>".$row["firstname"]." ".$row["lastname"]."</td>
</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
