<?php
// Question 1:
         //Run 1//
$student_name = 'Alice';
$score = 92;
$attendance =88;
$behavior = 5;
if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $behavior <0 || $behavior >100){
    echo "Invalid entries";
}
else {
    echo "Student Name: $student_name<br>";
    echo "Score: $score<br>";
    echo "Attendance: $attendance%<br>";
    echo "Behavior: $behavior<br>";
    echo "-----------------------------<br>";
    if ($score >= 50 && $attendance >= 75) {
        echo "Congratulations $student_name, you have passed the course!<br>";
        $grade = '';
        if ($score >= 90) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo " Your grade is: $grade";
        if ($behavior = 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior = 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior = 3){
            echo "<br> Average behavior.";
        } elseif ($behavior = 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    } else {
        echo "Sorry $student_name, you have not met the passing criteria.";
    }
    echo "<br><hr><br>";
}
// End of Run 1//
// Question 1:
         //Run 2//
$student_name = 'Ali';
$score = 67;
$attendance =80;
$behavior = 2;
if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $behavior <0 || $behavior >100){
    echo "Invalid entries";
}
else {
    echo "Student Name: $student_name<br>";
    echo "Score: $score<br>";
    echo "Attendance: $attendance%<br>";
    echo "Behavior: $behavior<br>";
    echo "-----------------------------<br>";
    if ($score >= 50 && $attendance >= 75) {
        echo "Congratulations $student_name, you have passed the course!<br>";
        $grade = '';
        if ($score >= 90) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo " Your grade is: $grade";
        if ($behavior == 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior == 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior == 3){
            echo "<br> Average behavior.";
        } elseif ($behavior == 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    } else {
        echo "Sorry $student_name, you have not met the passing criteria.";
    }
    echo "<br><hr><br>";
}// End of Run 2//
// Question 1:
         //Run 3//
$student_name = 'Sara';
$score = 74;
$attendance =45;
$behavior = 3;
if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $behavior <0 || $behavior >100){
    echo "Invalid entries";
}
else {
    echo "Student Name: $student_name<br>";
    echo "Score: $score<br>";
    echo "Attendance: $attendance%<br>";
    echo "Behavior: $behavior<br>";
    echo "-----------------------------<br>";
    if ($score >= 50 && $attendance >= 75) {
        echo "Congratulations $student_name, you have passed the course!<br>";
        $grade = '';
        if ($score >= 90) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo " Your grade is: $grade";
        if ($behavior == 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior == 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior == 3){
            echo "<br> Average behavior.";
        } elseif ($behavior == 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    } else {
        echo "Sorry $student_name, you have not met the passing criteria.";
        if ($behavior == 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior == 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior == 3){
            echo "<br> Average behavior.";
        } elseif ($behavior == 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    }echo "<br><hr><br>";
}
// End of Run 3//
// Question 1:
         //Run 4//  
$student_name = 'Sami';
$score = 40;
$attendance =70;
$behavior = 4;
if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $behavior <0 || $behavior >100){
    echo "Invalid entries";
}
else {
    echo "Student Name: $student_name<br>";
    echo "Score: $score<br>";
    echo "Attendance: $attendance%<br>";
    echo "Behavior: $behavior<br>";
    echo "-----------------------------<br>";
    if ($score >= 50 && $attendance >= 75) {
        echo "Congratulations $student_name, you have passed the course!<br>";
        $grade = '';
        if ($score >= 90) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo " Your grade is: $grade";
        if ($behavior = 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior = 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior = 3){
            echo "<br> Average behavior.";
        } elseif ($behavior = 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    } else {
        echo "Sorry $student_name, you have not met the passing criteria.";
         if ($behavior = 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior = 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior = 3){
            echo "<br> Average behavior.";
        } elseif ($behavior = 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }else{
         echo "<br>No special actions.";   
        }
    }
    echo "<br><hr><br>";
}// End of Run 4//
//question 1//
//Run 5//
$student_name = 'Jimmy';
$score = 114;
$attendance =15;
$behavior = 4;
if ($score < 0 || $score > 100 || $attendance < 0 || $attendance > 100 || $behavior <0 || $behavior >100){
    echo "Invalid entries";
}
else {
    echo "Student Name: $student_name<br>";
    echo "Score: $score<br>";
    echo "Attendance: $attendance%<br>";
    echo "Behavior: $behavior<br>";
    echo "-----------------------------<br>";
    if ($score >= 50 && $attendance >= 75) {
        echo "Congratulations $student_name, you have passed the course!<br>";
        $grade = '';
        if ($score >= 90) {
            $grade = 'A';
        } elseif ($score >= 80) {
            $grade = 'B';
        } elseif ($score >= 70) {
            $grade = 'C';
        } elseif ($score >= 60) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }
        echo " Your grade is: $grade";
        if ($behavior = 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior = 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior = 3){
            echo "<br> Average behavior.";
        } elseif ($behavior = 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }
    } else {
        echo "Sorry $student_name, you have not met the passing criteria.";
         if ($behavior = 5) {
            echo "<br> Excellent behavior!";
        } elseif ($behavior = 4) {
            echo "<br> Good behavior.";
        } elseif ($behavior = 3){
            echo "<br> Average behavior.";
        } elseif ($behavior = 2){
            echo "<br> Weak behavior.";
        }else{
            echo "<br> bad behavior.";
        }
        if($score >= 50 && $grade == 'A' || $grade == 'B' && $behavior >= 3){
            echo "<br>Commendation awarded";
        }elseif($score >= 50 &&$behavior >=2){
            echo "<br> Warning issued";
        }elseif($score > 50 && $attendance <50){
            echo "disciplinary notice ";
        }else{
         echo "<br>No special actions.";   
        }
    }}
    echo "<br><hr><br>";
  // End of Run 5//
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