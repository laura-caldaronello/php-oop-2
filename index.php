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

        $user1 = new User('nick1','data','email');
        $user2 = new User('nick2','data','email');
        $user3 = new User('nick3','data','email');
        $user4 = new User('nick4','data','email');
        $user5 = new User('nick5','data','email');

        $userArray = [];
        $i = 1;
        while (isset(${'user'.$i})) {
            $userArray[] = ${'user'.$i};
            $i = $i + 1;
        }

        

        foreach($userArray as $user) {
            foreach($user as $property => $value) {
                $print = $property . ": " . $user->$property;
                if ($property == 'nickname') {

    ?>
        <h2><?php echo $print ?></h2>
    <?php
                        
                }
                else {

    ?>
        <h3><?php echo $print ?></h3>
    <?php

                }
            }

    ?>
        <br>
    <?php
                
        }

    ?>

</body>
</html>