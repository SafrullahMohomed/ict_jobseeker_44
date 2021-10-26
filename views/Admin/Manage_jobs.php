<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Admin/Manage_jobs.css" />
    <link rel="stylesheet" href="/ict_jobseeker_44/views/CSS/Normalize/Normalize.css" />
    <title>Document</title>
  </head>
  <body>
    <!-- main container -->
    <div class="main-conatainer">
      <!-- divisoin for admin home -->
      <div class="admin-home-button">
        <button>Admin Home</button>
      </div>

      <!-- jobs search part starts here -->
      <div class="job-search-box">
        <div class="search-your-keywords">
          <input
            type="text"
            name="Search your keyword"
            placeholder="Search your keyword"
          />
        </div>
        <div class="category">
          <select name="Category">
            <option value="none" selected disabled hidden>
              <span id="category-id-home">Select a Catogory</span>
            </option>
            <option value="Software Engineering">Software Engineering</option>
            <option value="Qaulity Assurance">Qaulity Assurance</option>
            <option value="Frontend Developing">Frontend Developing</option>
            <option value="Backend Developing">Backend Developing</option>
            <option value="Senior Sofware Engineering">
              Senior Sofware Engineering
            </option>
            <option value="Fullstack developing">Fullstack developing</option>
            <option value="Data Science">Data Science</option>
          </select>
        </div>
        <div class="location">
          <input type="text" name="location" placeholder="Location" />
        </div>
        <div class="search-button">
          <button type="button">Search</button>
        </div>
      </div>

      <!-- add jobs -->
      <div class="add-jobs">
        <button><span class="plus">+</span> Add Jobs</button>
      </div>

      <!-- table -->
      <div class="table-jobs">
          table....
      </div>

      <!-- load more button -->
      <div class="load-more">
        <button>Load More</button>
      </div>
    </div>
  </body>
</html>
