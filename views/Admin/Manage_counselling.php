<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_counselling.css">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Document</title>
</head>

<body>

<div class="header_div">
    <?php include './views/Header.php' ?>
</div>

<!-- main container -->
<div class="main-conatainer">
    <!-- divisoin for admin home -->
    <a href="<?php echo URL ?>Admin/Admin_home">
        <div class="admin-home-button">
            <button>Admin Home</button>
        </div>
    </a>

    <!-- seach part -->
    <div class="search-counsellor">
        <input type="text" name="search-counsellors" id="search-counsellors" placeholder="Search Counsellors">
        <button>Search</button>
    </div>

    <!-- add counsellors -->
    <a href="<?php echo URL ?>Admin/Admin_add_counselling">
        <div class="add-counsellors">
            <button><span class="plus">+</span>Add Counsellors</button>
        </div>
    </a>

    <!-- table -->
    <div class="Table">
        <table>
            <thead>
            <tr id="columnTopic">
                <th>ID</th>
                <th>Email</th>
                <th>Counsellor Name</th>
                <th>Provide Mock Interview</th>
                <th>Phone Number</th>
                <th>Actions</th>

            </tr>
            </thead>

            <tbody>

            <?php
            $result = $data['result'];
            foreach ($result

                     as $row):
                ?>

                <tr>
                    <td><?php echo $row['User_ID'] ?></td>
                    <td><?php echo $row['Email'] ?></td>
                    <td><?php echo $row['First_name'] . "&nbsp" . $row['Last_name'] ?></td>
                    <td><?php echo $row['Counsellor_provide_mock_interviews'] ?></td>
                    <td><?php echo $row['Phone_number'] ?></td>
                    <td id="action">
                        <div class="icon">
                            <i title="View post" class="fa fa-eye" aria-hidden="true"></i>
                            <i title="Edit post" class="fa fa-pencil" aria-hidden="true"></i>
                            <i title="Delete post" class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                    </td>

                </tr>

            <?php endforeach; ?>
            </tbody>


        </table>
    </div>

    <!-- table ends here -->


    <!-- load more button -->
    <div class="load-more">
        <button>Load More</button>
    </div>

    <!-- counsellor registration request text -->
<!--    <div class="registration-text">-->
<!--        Counsellor Registration Requests-->
<!--    </div>-->
<!---->
<!--     counsellor registration request table -->
<!--    <div class="registration-table">-->
<!--        Table....-->
<!--    </div>-->
<!---->
<!--     load more button -->
<!--    <div class="load-more">-->
<!--        <button>Load More</button>-->
<!--    </div>-->
</div>

<?php include './views/Footer.php' ?>


</body>

</html>