<?php include "../site/admin_header.php";?>

          <!-- =============================================================================================================================================== -->
          <!-- =============================================================================================================================================== -->
          <!-- =============================================================================================================================================== -->
          <!-- START - ADD NEW UNIVERSITY -->
          <div class="card mb-3">
            <div class="card-header">
              <h5 class="mb-0">Update Contact US Section Details</h5>
            </div>
            <div class="card-body bg-light">
              <div class="row">
                <div class="col-12">
                    <?php global $db_connect;
                    if(isset($_GET['editcontact'])) {
                      $contact_id = $_GET['editcontact'];

                      include "../admin/edit_contact_form.php";
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
          <!-- END - ADD NEW UNIVERSITY -->
          <!-- =============================================================================================================================================== -->
          <!-- =============================================================================================================================================== -->
          <!-- =============================================================================================================================================== -->

         
    <?php include "../site/admin_footer.php";?>