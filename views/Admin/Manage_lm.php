<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css">
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_lm.css">
    <title>Manage lm</title>
</head>

<body>
    
    <!-- main container -->
    <div class="main-conatainer">
        <!-- divisoin for admin home -->
        <a href="<?php echo URL ?>Admin/Admin_home">
            <div class="admin-home-button">
                <button>Admin Home</button>
            </div>
        </a>
        <!-- search part -->
        <div class="search-lms">
            <input type="text" name="search-lms" id="search-lms" placeholder="Search Learning Materials" onkeyup="ajaxload(this.value);">
            <!-- <button>Search</button> -->
        </div>

        <!-- add lms -->
        <a href="<?php echo URL ?>Admin/Admin_add_lm">
            <div class="add-lms">
                <button><span class="plus">+</span>Add Learning Materials</button>
            </div>
        </a>

        <!-- table
        <div class="table-lms">

        </div> -->

         <!-- table -->
         <div class="table" id="learning_materials_table">
            <table>
                <thead>
                <tr id="columnTopic">
                    <th>Learning Material ID</th>
                    <th>Learning Material link</th>
                    <th>Learning Material Category</th>
                    <th>Learning Material Title</th>
                    <th>Academy Logo</th>
                    <th>Resource Logo</th>

                </tr>
                </thead>

                <tbody id="learningMaterials_tbody">

                </tbody>

                <!-- <tr>
                    <td>1</td>
                    <td>https://www.w3schools.com/html/</td>
                    <td>Tutorials</td>
                    <td>HTML w3 school</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>https://www.youtube.com/watch?v=1Rs2ND1ryYc</td>
                    <td>Videos</td>
                    <td>CSS Tutorial - Zero to Hero (Complete Course)</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>https://www.w3schools.com/js/js_json_intro.asp</td>
                    <td>Tutorials</td>
                    <td>JS JSON w3 school</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>https://www.w3schools.com/angular/</td>
                    <td>Tutorials</td>
                    <td>AngularJS Tutorial</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>https://www.w3schools.com/cpp/default.asp</td>
                    <td>Tutorials</td>
                    <td>C++ Tutorial</td>
                    <td>1594651328835.jpg</td>
                    <td>1594651329930.jpg</td>
                </tr> -->


            </table>
        </div>

        <!-- table ends here -->

        <!-- load more button -->
        <!-- <div class="load-more">
            <button>Load More</button>
        </div> -->

        <div id="pagination-link">

        </div>

    </div>

    <script src="<?php echo URL ?>views/JS/Manage_lm.js"></script>
</body>

</html>