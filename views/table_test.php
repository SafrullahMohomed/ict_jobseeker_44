<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Counsellor Name</th>
                <th>Phone NO</th>
                <th>Operations</th>
                
            </tr>
        </thead>

        <tbody>
            <?php
                $result = $data['result'];
                foreach ($result as $row)
            ?>
        </tbody>
    </div>
</body>
</html>