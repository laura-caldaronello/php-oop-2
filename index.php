<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        ini_set('display_errors',1);
        require __DIR__ . '/User.php';

        $user1 = new User('nick1','01-10-1010','email');
        try {
            $user1->checkDate();
        } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
        }

        $user2 = new User('nick2','data2','email2');
        try {
            $user2->checkDate();
        } catch (Exception $e) {
            echo 'Eccezione: ' . $e->getMessage();
        }

        $user3 = new User('nick3','data3','email3');
        $user4 = new User('nick4','data4','email4');
        $user5 = new User('nick5','data5','email5');

        $userArray = [];
        $i = 1;
        while (isset(${'user'.$i})) {
            $userArray[] = ${'user'.$i};
            $i = $i + 1;
        }

        var_dump($userArray);

    ?>

</body>
</html>