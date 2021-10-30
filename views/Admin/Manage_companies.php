<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_companies.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <title>Document</title>
</head>

<!-- header part starts here -->
<div class="header_div">
    <?php include './views/Header.php' ?>
</div>

<!-- header part ends here -->

<body>
    <!-- main container -->
    <div class="main-conatainer">
        <!-- divisoin for admin home -->
        <a href="<?php echo URL ?>Admin/Admin_home">
            <div class="admin-home-button">
                <button>Admin Home</button>
            </div>
        </a>

        <!-- seach part -->
        <div class="search-company">
            <input type="text" name="search-company" id="search-company" placeholder="Search Companies">
            <button>Search</button>
        </div>

        <!-- add company division -->
        <a href="<?php echo URL ?>Admin/Admin_add_companies">
            <div class="add-company">
                <button><span class="plus">+</span>Add Company</button>
            </div>
        </a>


        <!-- table starts here-->

        <div class="Table">
            <table>
                <tr>
                    <th colspan="4" id="topic">Registered Companies</th>
                </tr>
                <tr id="columnTopic">
                    <th>ID</th>
                    <th>Email</th>
                    <th>Company Name</th>
                    <th>Total Job Posts</th>
                    <th>Phone Number</th>

                </tr>
                <tr>
                    <td>03</td>
                    <td>company1@gmail.com</td>
                    <td>Company1</td>
                    <td>3</td>
                    <td>0712345678</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>company2@gmail.com</td>
                    <td>Company2</td>
                    <td>4</td>
                    <td>0774521678</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>company3@gmail.com</td>
                    <td>Company3</td>
                    <td>1</td>
                    <td>0713215677</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>company4@gmail.com</td>
                    <td>Company4</td>
                    <td>0</td>
                    <td>0712345567</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>company5@gmail.com</td>
                    <td>Company5</td>
                    <td>7</td>
                    <td>0723455678</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>company6@gmail.com</td>
                    <td>Company6</td>
                    <td>7</td>
                    <td>0718938438</td>
                </tr>
                <tr>
                    <td>112</td>
                    <td>company7@gmail.com</td>
                    <td>Company7</td>
                    <td>2</td>
                    <td>0752323456</td>
                </tr>
                <tr>
                    <td>113</td>
                    <td>company8@gmail.com</td>
                    <td>Company8</td>
                    <td>3</td>
                    <td>0766778432</td>
                </tr>
                <tr>
                    <td>140</td>
                    <td>company9@gmail.com</td>
                    <td>Company9</td>
                    <td>0</td>
                    <td>0778382983</td>
                </tr>
                <tr>
                    <td>168</td>
                    <td>company10@gmail.com</td>
                    <td>Company10</td>
                    <td>1</td>
                    <td>0712300838</td>
                </tr>
            </table>
        </div>

        <!-- table ends here -->

        <!-- load more button -->
        <div class="load-more">
            <button>Load More</button>
        </div>

    </div>

<!-- footer part starts here -->

    <?php include './views/Footer.php' ?>

    <!-- footer part ends here -->
</body>

</html>