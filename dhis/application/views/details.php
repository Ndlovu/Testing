<html>

		<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
				
		<title>Health Informatics</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/revolution-slider/extralayers.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/revolution-slider/settings.css" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>frontend/css/styles.css" media="screen" /> 

		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>e-ticketingcss/e-ticketing.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>e-ticketingcss/header_footer.css">
		<link rel="stylesheet" href="<?php echo base_url();?>Date/pagestyle.css" media="screen, projection" />
       	<link rel="stylesheet" href="<?php echo base_url();?>Date/slimpicker.css" media="screen, projection" />
		<link href="<?php echo base_url();?>Bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
       	<link href="<?php echo base_url();?>Bootstrap/dist/css/jquery-ui.min.css" rel="stylesheet">


	</head>
	<body id = "body">
    
    <!-- page container -->
    <div class="page-container">

    	<div class = "navbar navbar-inverse navbar-static-top" id = "header">

			<div class = "header_container" id = "container-fluid">

				<a href="../ticketing" class="navbar-brand" id = "logo">Health Informatics</a>
			</div>
		</div>

		<div class = "row">
			<div class = "col-md-10" style = "margin-left:100px;background-color:grey;margin-top:30px;border-radius:5px">

				<!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">Details in the database</h3>
                                <!-- <button style = "margin-left:880px;margin-top:5px;background-color:" class = 'btn btn-primary btn-sm' title = "Check in passenger" type="submit">Check In</button> -->
                                <!-- <ul class="panel-controls">
                                    <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                    <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                    <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                </ul>  -->                               
                            </div>
                            
                            <div class="panel-body" style = "width:95%">
                                <table class="table datatable">
                                    <thead>
                                        <th style = "font-weight:bold">No</th>
                                        <th style = "font-weight:bold">Name</th>
                                        <th style = "font-weight:bold">Email</th>
                                        <th style = "font-weight:bold">Phone</th>
                                        <th style = "font-weight:bold">Address</th>
                                    </thead>

                                    <tbody>
                                        <?php
                                            if($details!="")
                                            {
                                                foreach ($details as $my_details) 
                                                {

                                                        echo "<td>";
                                                        echo $my_details->id;
                                                        echo "<br><br>";
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $my_details->name;
                                                        echo "<br><br>";
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $my_details->email;
                                                        echo "<br><br>";
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $my_details->phone;
                                                        echo "<br><br>";
                                                        echo "</td>";

                                                        echo "<td>";
                                                        echo $my_details->address;
                                                        echo "<br><br>";
                                                        echo "</td>";
                                                    echo "</tr>";
                                                    echo "</tr>";
                                                }

                                            }
                                            
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


			</div>
		</div>	
	</div>