<html>

		<head>
            <!-- DataTables CSS -->
 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
				
		<title>DHIS2</title>      
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url()?>/template/css/theme-default.css"/>
        <link href="<?php echo base_url();?>Bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url();?>Bootstrap/dist/css/jquery-ui.min.css" rel="stylesheet">
        
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">
  
 <!-- jQuery  -->
<script type="text/javascript" charset="utf8" src="http://localhost/dhis/DataTables/media/js/jquery.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://localhost/dhis/DataTables/media/js/jquery.dataTables.js"></script>

	</head>
	<body id = "body">
    
    <!-- page container -->
    <div class="page-container">

    	<div class = "navbar navbar-inverse navbar-static-top" id = "header">

			<div class = "header_container" id = "container-fluid">

				 <a href="" class="navbar-brand" id = "logo">VIEW ALL DHIS2 DATASETS </a> 
			</div>
		</div>
        
        <div class = "row">

        	<div style ="margin-left:100px">
	        	<input class ="btn btn-primary" type = "submit" value = "View" id = "submit_button"></input>
	        	<br>
        	</div>
			<div class = "col-md-11" style = "margin-left:30px;background-color:blue;margin-top:30px;border-radius:5px">

				<!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-heading">                                
                                <h3 class="panel-title">DHIS2 Datasets Displayed</h3>                              
                            </div>
                            
                            <div class="panel-body" style = "">
                                <table class="table datatable" id = "data">
                                    <thead>
                                        <th style = "font-weight:bold">ID</th>
                                      
                                        <th style = "font-weight:bold;margin-left:30px">Name</th>
                                    </thead>

                                    <tbody>					
                                    </tbody>
                                </table>
                                <div id =""></div>  
                            </div>
                        </div>


			</div>
		</div>	
	</div>