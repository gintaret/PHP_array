<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Students</title>
        <link href="/view/css/style.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <h2>Students</h2>



            <table border='1'>
                <tr>
                    <th>Class</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Average of assignments</th>
                    <th>Date of data formation</th>
                </tr>
                <?php foreach($students as $id => $studentData):?>
                <tr>
                    <td>5b</td>
                    <td><?=$id;?></td>
                    <td><?=$studentData['name'];?></td>
                    <td><?=$studentData['lastname'];?></td>

                    <?php

                    $sum = 0;
                    $count = 0;

                    foreach($studentData['assignments'] as $assignments => $assignmentsValues)
                    {
                        $sum +=$assignmentsValues;
                        $count++;
                    }
                    ?>

                    <td><?=round($sum/$count, 2);?></td>
                    <td><?=$studentData['date'];?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>
    </body>
</html>