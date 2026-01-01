<?php
// المتغيرات
$studentName = "Alice";
$score = 92;          
$attendance = 88;     
$behavior = 5;        

// Step 1: Validation
if (
    $score < 0 || $score > 100 ||
    $attendance < 0 || $attendance > 100 ||
    $behavior < 1 || $behavior > 5
) {
    echo "Name: " . $studentName . "<br>";
    echo "Score: " . $score . "<br>";
    echo "Attendance: " . $attendance . "%<br>";
    echo "behavior: " . $behavior . "<br>";
    echo "-----------------------------<br>";
    echo "Invalid entries";
    exit; 
}

// Step 2: Pass / Fail
if ($score >= 50 && $attendance >= 75) {
    $status = "pass";
    echo "Name: " . $studentName . "<br>";
    echo "Score: " . $score . "<br>";
    echo "Attendance: " . $attendance . "%<br>";
    echo "behavior: " . $behavior . "<br>";
    echo "-----------------------------<br>";
    echo $studentName." has passed<br>";
} else {
    $status = "fail";
     echo "Name: " . $studentName . "<br>";
    echo "Score: " . $score . "<br>";
    echo "Attendance: " . $attendance . "%<br>";
    echo "behavior: " . $behavior . "<br>";
    echo "-----------------------------<br>";
    echo $studentName." Has failed<br>";
}

// Step 3: Letter Grade (only if passed)
$grade = "";

if ($status == "pass") {
    if ($score >= 90) {
        $grade = "A";
    } elseif ($score >= 80) {
        $grade = "B";
    } elseif ($score >= 70) {
        $grade = "C";
    } elseif ($score >= 60) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    echo "Grade: $grade<br>";
}

// Step 4: Behavior Evaluation
if ($behavior == 5) {
    echo "Excellent behavior<br>";
} elseif ($behavior == 4) {
    echo "Good behavior<br>";
} elseif ($behavior == 3) {
    echo "Average behavior<br>";
} elseif ($behavior == 2) {
    echo "Weak behavior<br>";
} else {
    echo "Bad behavior<br>";
}

// Step 5: Final Action
if ($status == "pass" && ($grade == "A" || $grade == "B") && $behavior >= 3) {
    echo "Commendation awarded";
} elseif ($status == "pass" && $behavior <= 2) {
    echo "Warning issued";
} elseif ($status == "fail" && $attendance < 50) {
    echo "Disciplinary notice";
} else {
    echo "No special action";
}
    echo "<br><hr><br>";
  //question 2//
    //part 1//
    $c1=1;
    while($c1 <=10){
        echo $c1 ."<br>";
        $c1 +=1;
    }        
    echo "<br><hr><br>";
    //part 2//
        $c2=15;
        while($c2 >=1){
        echo $c2 ."<br>";
        $c2 -=1;
        }
    echo "<br><hr><br>";
        //part 3//
            $c3=1;
            while($c3 <=10){
                echo"5 x" .$c3 ."=" .($c3 * 5) ."<br>";
        
            $c3 +=1;
            }
        echo "<br><hr><br>";
        //part 4//
        $languages = array("HTML", "JavaScript", "Css");
    
        foreach ($languages as $language => $languages) {
            echo $language." " .$languages ."<br>";
        }
        echo "<br><hr><br>";
    //part 5//
    $languages = array("HTML", "JavaScript", "Css");
    
    foreach ($languages as $language) {
            echo $language."<br>";
        }
    ?>