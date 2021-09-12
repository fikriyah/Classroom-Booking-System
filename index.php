<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- All meta tag with include all style and script -->
        <?php 
            include_once("db.php");
            $title = "UNIMY Class Booking System";
            include_once("head.php");

        ?>
        <!-- End All meta tag with include all style and script -->

    </head>

    
<body>
        <?php include("header.php");  ?>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                           
                            <!--/.widget-nav-->
                            <?php $menu = "index"; $submenu = "index"; include("sidebar.php");  ?>
                           
                            <!--/.widget-nav-->
                            
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                       
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!--/#btn-controls-->
                           
                            <!--/.module-->
                           
                           
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->

        <!-- Footer with script -->
        <?php include_once("footer.php"); ?>
        <?php include_once("script.php"); ?>
        <!-- End Footer with script -->

      
</body>

</html>
