<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('student.php');

        $students = array();

        /* Create first student */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@gmail.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        /* Create second student */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        /* Create third student */
        $third = new Student();
        $third->surname = "Park";
        $third->first_name = "Daniel";
        $third->add_email('work', 'dpark50@my.bcit.ca');
        $third->add_grade(95);
        $third->add_grade(80);
        $students['a00847176'] = $third;

        /* Sort in key sequence */
        ksort($students);

        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>