<?php
class Jobs_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Jobs_main_page()
    {

        //pass view name
        $this->view ->render('Jobs_main_page'); 
        
    }
//select data from database to jobs main page
  function select_job_data(){
    $job=$this->model->select_query_job_data();     
    echo json_encode(count($job) == 0 ? null : $job);
   return $job;
  }
  

  //when searching for a job
  function search_job(){
    if (isset($_POST["query"])) {

      $limit = 5;
      $page = 1;


      if ($_POST["page"] > 1) {
          $start = (($_POST["page"] - 1) * $limit);
          $page = $_POST["page"];
      }
      else {
          $start = 0;
      }
      if($_POST["query"] != '')
      {

          $job_data = $this->model->select_data_table($_POST["query"], $page, $start, $limit);
      }
      else{
          $job_data = $this->model->select_data_table2($start, $limit);
      }

      $pagination_html = '
<div class="pagination">

';

      $total_links = ceil($job_data[1]/$limit);

      $previous_link = '';

      $next_link = '';

      $page_link = '';


//            pagination page array starts here
      if($total_links > 4)
      {
          if($page < 5)
          {
              for($count = 1; $count <= 5; $count++)
              {
                  $page_array[] = $count;
              }
              $page_array[] = '...';
              $page_array[] = $total_links;
          }
          else
          {
              $end_limit = $total_links - 5;

              if($page > $end_limit)
              {
                  $page_array[] = 1;

                  $page_array[] = '...';

                  for($count = $end_limit; $count <= $total_links; $count++)
                  {
                      $page_array[] = $count;
                  }
              }
              else
              {
                  $page_array[] = 1;

                  $page_array[] = '...';

                  for($count = $page - 1; $count <= $page + 1; $count++)
                  {
                      $page_array[] = $count;
                  }

                  $page_array[] = '...';

                  $page_array[] = $total_links;
              }
          }
      }
      else
      {
          for($count = 1; $count <= $total_links; $count++)
          {
              $page_array[] = $count;
          }
      }

//pagination page array ends here


      for($count = 0; $count < count($page_array); $count++)
      {
          if($page == $page_array[$count])
          {
              $page_link .= '

      <a class="page-link active" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
  
';

              $previous_id = $page_array[$count] - 1;

              if($previous_id > 0)
              {
                  $previous_link = '<a class="page-link" href="javascript:ajaxload(`'.$_POST["query"].'`,'.$previous_id.')">Previous</a>';
              }
              else
              {
                  $previous_link = '
  
        <a class="page-link pagination-hidden" href="#">Previous</a>
    
  ';
              }

              $next_id = $page_array[$count] + 1;

              if($next_id > $total_links)
              {
                  $next_link = '
  
        <a class="page-link pagination-hidden" href="#">Next</a>
      
  ';
              }
              else
              {
                  $next_link = '
  <a class="page-link" href="javascript:ajaxload(`'.$_POST["query"].'`,'.$next_id.')">Next</a>
  ';
              }

          }
          else
          {
              if($page_array[$count] == '...')
              {
                  $page_link .= '
  
          <a class="page-link" href="#">...</a>
    
  ';
              }
              else
              {
                  $page_link .= '

    <a class="page-link" href="javascript:ajaxload(`'.$_POST["query"].'`,'.$page_array[$count].')">'.$page_array[$count].'</a>
  
  ';
              }
          }
      }

      $pagination_html .= $previous_link . $page_link . $next_link;


      $pagination_html .= '

</div>
';
      $output = array(
          'data'				=>	$job_data[0],
          'pagination'		=>	$pagination_html,
          'total_data'		=>	$job_data[1],
          'page_array'        =>  $page_array,
          'page_no'           =>  $page,
          'pagination_html'   =>  $pagination_html

      );

      echo json_encode($output);

//        print "<pre>";
//        print_r($job_data);
//        print "</pre>";

//            echo json_encode(count($job_data) == 0 ? null : $job_data);
  }


  }

}