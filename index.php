<?php

    class Person {
        private $name;
        private $email;

        function setName($a) {
            $this->name = $a;
        }
        function setEmail($b) {
            $this->email = $b;
        }

        function getName() {
            return $this->name;
        }
        function getEmail() {
            return $this->email;
        }

    }



    if(isset($_POST['name']) && isset($_POST['email'])) {
        $form_name = $_POST['name'];
        $form_email = $_POST['email'];    


        $p1 = new Person();

        $p1 -> setName($form_name);
        $p1 -> setEmail($form_email);

        echo "Name is: " . $p1->getName() . "<br>";
        echo "Email is: " . $p1->getEmail() . "<br>";
    }
    else {
        echo "<h3>Name and email is not given yet</h3>";
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module 5 Assignment</title>
</head>
<body>

    <br><br>

    <form action="" method="post">
        Name: <input type="text" name="name"> <br>
        E-Mail: <input type="text" name="email"> <br>
        <input type="submit">
    </form>
    
</body>
</html>