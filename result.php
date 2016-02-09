<?php 
echo '<!DOCTYPE html>';
echo '<html>';
   include 'header.php'; 
    echo '<body>';
        echo '<div class="container">';
            echo '<div class="row">';
                echo '<div class="col-md-12">';
                    echo '<h1>Form Generator</h1>';
                    echo '<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.<a class="btn btn-success" href="index.php" style="float:right">New Form</a></p>';
                echo '</div>';
            echo '</div>';
            echo '<div class="row">';
                echo '<form name="gen_form" id="gen_form" method="POST" action="generator.php" >';

                    echo '<div class="col-md-4">';
                       echo ' <div class="form-group">';
                            echo '<label class="form-label">Form Title</label>';
                            echo '<input type="hidden" class="form-control" id="form_id" name="form_id" value="'.$_SESSION['form_id'].'"/>';
                            echo '<input type="text" class="form-control" id="form_name" name="form_name" placeholder="Form Title"  value="'.$_SESSION['form_name'].'" readonly>';

                        echo '</div>';
                    echo '</div>';

                    echo '<div class="col-md-4">';
                        echo '<div class="form-group">';
                            echo '<label class="form-label">Element Name</label>';
                            echo '<input type="text" class="form-control" name="element_name" id="element_name" placeholder="Label">';
                        echo '</div>';
                    echo '</div>';


                    echo '<div class="col-md-4">';
                       echo ' <div class="form-group">';
                          echo '  <label class="form-label">Element Type</label>';
                          echo '  <select class="form-control" id="elemet_type" name="elemet_type">';
                              echo '  <option value="txtf">Text Field</option>';
                             echo '   <option value="txtarea">Text Area</option>';
                             echo '   <option value="chk_box">Checkboxes</option>';
                             echo '   <option value="drp_dwn">Dropdown</option>';
                             echo '   <option value="radio">Radio Button</option>';
                             echo '   <option value="sub_btn">Submit Button</option>';
                             echo '   <option value="canc_btn">Cancel Button</option>';
                            echo '</select>';
                       echo ' </div>';
                   echo ' </div>';


                    echo '<div class="col-md-4">';
                      echo '  <div class="form-group">';
                       echo '     <label class="form-label">Select Options</label>';
                       echo '     <input type="text" class="form-control"  name="options" id="options" placeholder="Select Options with comma (,) seperated">';
                       echo ' </div>';

                    echo '</div>';
                  echo '  <div class="col-md-4">';
                      echo '  <div class="form-group">';
                          echo '  <label class="form-label" style="display: block;height: 20px;"></label>';
                          echo '  <button type="submit" class="btn btn-info">Ok</button>';

                        echo '</div>';
                  echo '  </div>';
                 echo '   <input name="function" value="generate" type="hidden"/>';
               echo ' </form>';
           echo ' </div>';
           echo ' <div class="row">';
            echo '    <form method="POST" action="generator.php">';
            echo '        <div class="col-md-12">';
            echo '            <div class="form-group">';
             echo '               <input type="hidden" class="form-control" id="form_id" name="form_id" value="'.$_SESSION['form_id'].'">';
              echo '              <input type="submit" value="Download Form" class="btn btn-primary" style="float:right"/>';
              echo '          </div>';
               echo '     </div>';
              echo '      <input name="function" value="download" type="hidden"/>';
              echo '  </form>';
           echo ' </div>';
      echo '  </div>';
    echo '</body>';
echo '</html>';
