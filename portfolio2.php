<div class="content">
          <div class="container-fluid">        
           

            <?php  $query = "SELECT * FROM recentjobs ORDER BY id DESC LIMIT 10";
               if ($query_run = mysqli_query($connection,$query)) {
                
                while($query_row = mysqli_fetch_assoc($query_run)){
                    $file    = $query_row['picture'];
                    $site    = $query_row['site'];
                    $desc    = $query_row['description'];
              ?>

           <div class="col-md-4">
           <div class="card card-product">
            <div class="card-header card-header-image" data-header-animation="true">

             

             <a href="#pablo">
               <img src='<?php echo "admin/uploads/" .$file;?>' alt="" width="150px" hieght= />
              </a>
              </div>
               <div class="card-body">
                  <div class="card-actions text-center">
                     <a href="#">
                    <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="Edit">
                       <a href="<?php echo $site;?>"><i class="material-icons">view</i></a>
                    </button>
                    </a>
                    
                </div>
                <h4 class="card-title">
                  
                </h4>

               
                <div class="card-description">
                    <?php echo $desc;?>
                </div>
            </div>
        </div>
    </div>
     <?php
              }

            }

            ?>

            </div>
           </div>
           