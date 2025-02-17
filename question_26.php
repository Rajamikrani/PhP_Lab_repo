<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Sheet</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
    <h2>Student Mark Sheet</h2>
    <table>
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Web Tech II</th>
            <th>DBMS</th>
            <th>Economics</th>
            <th>DSA</th>
            <th>Account</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
        <?php
        // Multidimensional array to store student data
        $students = [
            [1, "John Doe", 101, 85, 78, 92, 88, 79, 0, "Pass"],
            [2, "Jane Smith", 102, 90, 89, 94, 90, 88, 0, "Pass"],
            [3, "Emily Davis", 103, 70, 76, 80, 75, 68, 0, "Pass"],
            [4, "Michael Brown", 104, 65, 58, 72, 70, 55, 0, "Pass"],
            [5, "Jessica Taylor", 105, 95, 92, 98, 96, 94, 0, "Pass"],
            [6, "David Wilson", 106, 55, 45, 60, 50, 42, 0, "Fail"],
            [7, "Daniel Anderson", 107, 88, 90, 85, 87, 89, 0, "Pass"],
            [8, "Megan Martinez", 108, 75, 70, 78, 76, 74, 0, "Pass"]
        ];

        // Function to calculate total marks and update the result
        function updateStudentData(&$student) {
            $total = $student[3] + $student[4] + $student[5] + $student[6] + $student[7];
            $student[8] = $total;
            $student[9] = $total >= 250 ? "Pass" : "Fail";
        }


































        
        // Update student data with total marks and result
        foreach ($students as &$student) {
            updateStudentData($student);
        }

        // Display student data in the table
        foreach ($students as $student) {
            echo "<tr>";
            foreach ($student as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
