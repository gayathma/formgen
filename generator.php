<?php

if (isset($_POST)) {
    $function_name = $_POST['function'];

    if ($function_name == 'generate') {
        generate();
    }
}

//save and retrieve data from the database
function generate() {

    require 'db_connect.php';

    $form_name  = $_POST['form_name'];
    $label      = $_POST['element_name'];
    $element_id = $_POST['elemet_type'];

    //insert form
    $query_form = "insert into form values('','$form_name')";

    if (!mysql_query($query_form)) {
        die('Error:' . mysql_error());
    } else {

        $form_id = mysql_insert_id();

        //insert form elements
        $query_elem = "insert into form_element values('','$form_id','$element_id','$label')";

        if (!mysql_query($query_elem)) {
            die('Error:' . mysql_error());
        } else {

            session_start();

            $_SESSION['form_id']   = $form_id;
            $_SESSION['form_name'] = $form_name;

            include('result.php');

            //get form elements
            $query_select = "select * "
                    . "from form_element fe,elements e "
                    . "where fe.form_id='$form_id' AND fe.element_id=e.id";
            $results      = mysql_query($query_select);

            echo '<table style="float: center">';

            while ($row = mysql_fetch_array($results)) {
                echo '<tr>';
                echo '<td>' . $row['element_label'] . '</td>';
                echo '<td>' . $row['element_html'] . '</td>';
                echo '</tr>';
            }
            echo '</table>           
        </div>
    </body>
</html>';
            
        }
    }
}

function add_elements() {

    require 'db_connect.php';

    $form_id    = $_POST['form_id'];
    $label      = $_POST['element_name'];
    $element_id = $_POST['elemet_type'];

    $query_elem = "insert into form_element values('','$form_id','$element_id','$label')";

    if (!mysql_query($query_elem)) {
        die('Error:' . mysql_error());
    } else {
        echo 'element inserted';

        //get form elements
        $query_select = "select * from form_element where form_id='$form_id'";
        $results      = mysql_query($query_select);

        //pass these results to result.php
        include('result.php');
    }
}
