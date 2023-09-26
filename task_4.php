<?php
// Task 4: Multidimensional Array
$studentGrades = [
    [
        "Student" => "Student 1",
        "Math" => 85,
        "English" => 92,
        "Science" => 80
    ],

    [
        "Student" => "Student 2",
        "Math" => 80,
        "English" => 90,
        "Science" => 95  
    ],

    [
        "Student" => "Student 3",
        "Math" => 90,
        "English" => 85,
        "Science" => 80
    ]
];


function averageGrades($studentGrades) {
    foreach ($studentGrades as $student) {
        $grades = array_slice($student, 1);
        $average = array_sum($grades) / count($grades);
        
        echo "{$student['Student']} - Average Grade: $average <br>";
    }
}
averageGrades($studentGrades);

?>