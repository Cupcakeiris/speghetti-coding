<?php require_once '../../script/pdocrud.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php include 'includes/topheader.php'; ?>
        <?php include 'includes/sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Add side bar   
                    <small>Add side bar to view/edit forms (added in v 2.6)</small>
                </h1>
                <p>
                    You can add side bar similar to profile page view of many admin template now easily using the addSidebar function. 
                    You can add it in both view as well as edit forms. You can add your custom css also to adjust it as per your template.
                    click on edit/view action button to check sidebar.
                </p>
             </section>    
                <!-- Default box -->
                <div class="box">                
                    <div class="box-body">                    
                            <section class="code-section">
                                <pre class="brush: php;">  
                                $pdocrud = new PDOCrud();
                                //list of urls to displayed below the sidebar
                                $urls[] = array("url"=>"#profile","text" => "Profile", "icon" =>"fa fa-user", "data"=>"", "attr" =>array("data-profile"=>"user_id"),"class" => array("parent-sidebar"));
                                $urls[] = array("url"=>"#recent-activity","text" => "Recent Activity", "icon" =>"fa fa-history", "data"=>"12/12/2017", "attr" =>array(),"class" => array("parent-sidebar"));
                                 /**
                                * Add sidebar to existing data in edit/view form
                                * @param   string   $sidebarImage                        column name of image or url of image
                                * @param   string   $sidebarHeading1                     column name for sidebar heading 1 or some text
                                * @param   string   $sidebarHeading2                     column name for sidebar heading 2 or some text
                                * @param   array    $sidebarURLs                         sidebar urls
                                * @param   string   $position                            Position of the sidebar (either left or right)
                                * return   object                                        Object of class
                                */
                                $pdocrud->addSidebar("parent_profile_img","name","email",$urls,"left");
                                echo $pdocrud->dbTable("parent")->render();
                                </pre>
                            </section>  
                    </div>
                </div>  
           
            <section class="content">
                <?php
                $pdocrud = new PDOCrud();
                //list of urls to displayed below the sidebar
                $urls[] = array("url"=>"#profile","text" => "Profile", "icon" =>"fa fa-user", "data"=>"", "attr" =>array("data-profile"=>"user_id"),"class" => array("parent-sidebar"));
                $urls[] = array("url"=>"#recent-activity","text" => "Recent Activity", "icon" =>"fa fa-history", "data"=>"12/12/2017", "attr" =>array(),"class" => array("parent-sidebar"));
                 /**
                * Add sidebar to existing data in edit/view form
                * @param   string   $sidebarImage                        column name of image or url of image
                * @param   string   $sidebarHeading1                     column name for sidebar heading 1 or some text
                * @param   string   $sidebarHeading2                     column name for sidebar heading 2 or some text
                * @param   array    $sidebarURLs                         sidebar urls
                * @param   string   $position                            Position of the sidebar (either left or right)
                * return   object                                        Object of class
     */
                $pdocrud->addSidebar("parent_profile_img","name","email",$urls,"left");
                echo $pdocrud->dbTable("parent")->render();
               ?>
            </section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>