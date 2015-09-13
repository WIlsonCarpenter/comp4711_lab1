<!DOCTYPE html>
<!--
COMP4711 Lab 1

Author: Wilson Carpenter
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Student.php';
        $students = array();
        
        //Create some students and add them to an array
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $third = new Student();
        $third->surname = "Carpenter";
        $third->first_name = "Wilson";
        $third->add_email("work", "wcarpenter7@my.bcit.ca");
        $third->add_grade(90);
        $third->add_grade(97);
        $third->add_grade(85);
        $third->add_grade(77.5);
        
        $students['w987'] = $third;

        //Sort the students by key
        ksort($students);
        
        //Display the students and their information
        foreach($students as $s) {
            echo $s->toString();
        }
        ?>
    </body>
</html>
