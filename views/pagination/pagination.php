<?php

//process_data.php

if(isset($_POST["query"]))
{

    $connect = new PDO("mysql:host=localhost; dbname=testing", "root", "");

    $data = array();

    $limit = 5;

    $page = 1;

    if($_POST["page"] > 1)
    {
        $start = (($_POST["page"] - 1) * $limit);

        $page = $_POST["page"];
    }
    else
    {
        $start = 0;
    }

    if($_POST["query"] != '')
    {

        $condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);

        $condition = trim($condition);

        $condition = str_replace(" ", "%", $condition);

        $sample_data = array(
            ':post_title'			=>	'%' . $condition . '%',
            ':post_description'		=>	'%'	. $condition . '%'
        );

        $query = "
		SELECT id, post_title, post_description 
		FROM post 
		WHERE post_title LIKE :post_title 
		OR post_description LIKE :post_description 
		ORDER BY id DESC
		";

        $filter_query = $query . ' LIMIT ' . $start . ', ' . $limit . '';

        $statement = $connect->prepare($query);

        $statement->execute($sample_data);

        $total_data = $statement->rowCount();

        $statement = $connect->prepare($filter_query);

        $statement->execute($sample_data);

        $result = $statement->fetchAll();

        $replace_array_1 = explode('%', $condition);

        foreach($replace_array_1 as $row_data)
        {
            $replace_array_2[] = '<span style="background-color:#'.rand(100000, 999999).'; color:#fff">'.$row_data.'</span>';
        }

        foreach($result as $row)
        {
            $data[] = array(
                'post_id'			=>	$row["id"],
                'post_title'		=>	str_ireplace($replace_array_1, $replace_array_2, $row["post_title"]),
                'post_description'	=>	str_ireplace($replace_array_1, $replace_array_2, $row["post_description"])
            );
        }

    }
    else
    {

        $query = "
		SELECT id, post_title, post_description 
		FROM post 
		ORDER BY id DESC
		";

        $filter_query = $query . ' LIMIT ' . $start . ', ' . $limit . '';

        $statement = $connect->prepare($query);

        $statement->execute();

        $total_data = $statement->rowCount();

        $statement = $connect->prepare($filter_query);

        $statement->execute();

        $result = $statement->fetchAll();

        foreach($result as $row)
        {
            $data[] = array(
                'post_id'				=>	$row["id"],
                'post_title'			=>	$row['post_title'],
                'post_description'		=>	$row['post_description']
            );
        }

    }

    $pagination_html = '
	<div align="center">
  		<ul class="pagination">
	';

    $total_links = ceil($total_data/$limit);

    $previous_link = '';

    $next_link = '';

    $page_link = '';

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

    for($count = 0; $count < count($page_array); $count++)
    {
        if($page == $page_array[$count])
        {
            $page_link .= '
			<li class="page-item active">
	      		<a class="page-link" href="#">'.$page_array[$count].' <span class="sr-only">(current)</span></a>
	    	</li>
			';

            $previous_id = $page_array[$count] - 1;

            if($previous_id > 0)
            {
                $previous_link = '<li class="page-item"><a class="page-link" href="javascript:load_data(`'.$_POST["query"].'`, '.$previous_id.')">Previous</a></li>';
            }
            else
            {
                $previous_link = '
				<li class="page-item disabled">
			        <a class="page-link" href="#">Previous</a>
			    </li>
				';
            }

            $next_id = $page_array[$count] + 1;

            if($next_id >= $total_links)
            {
                $next_link = '
				<li class="page-item disabled">
	        		<a class="page-link" href="#">Next</a>
	      		</li>
				';
            }
            else
            {
                $next_link = '
				<li class="page-item"><a class="page-link" href="javascript:load_data(`'.$_POST["query"].'`, '.$next_id.')">Next</a></li>
				';
            }

        }
        else
        {
            if($page_array[$count] == '...')
            {
                $page_link .= '
				<li class="page-item disabled">
	          		<a class="page-link" href="#">...</a>
	      		</li>
				';
            }
            else
            {
                $page_link .= '
				<li class="page-item">
					<a class="page-link" href="javascript:load_data(`'.$_POST["query"].'`, '.$page_array[$count].')">'.$page_array[$count].'</a>
				</li>
				';
            }
        }
    }

    $pagination_html .= $previous_link . $page_link . $next_link;


    $pagination_html .= '
		</ul>
	</div>
	';

    $output = array(
        'data'				=>	$data,
        'pagination'		=>	$pagination_html,
        'total_data'		=>	$total_data
    );

    echo json_encode($output);

}

?>
