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
    $form_id    = (key_exists('form_id', $_POST)) ? $_POST['form_id'] : 0;

    if ($form_id == 0) {
        //insert form
        $query_form = "insert into form values('','$form_name')";
        if (!mysql_query($query_form)) {
            die('Error:' . mysql_error());
        } else {
            $form_id = mysql_insert_id();
        }
    }


    //insert form elements
    $query_elem = "insert into form_element values('','$form_id','$element_id','$label')";

    if (!mysql_query($query_elem)) {
        die('Error:' . mysql_error());
    } else {

        session_start();

        $_SESSION['form_id']   = $form_id;
        $_SESSION['form_name'] = $form_name;

        //get form elements
        $query_select = "select * "
                . "from form_element fe "
                . "where fe.form_id='$form_id'";
        $results      = mysql_query($query_select);

        include ('result.php');

        echo '<form class="form-horizontal">';
        while ($row = mysql_fetch_array($results)) {
            $name = str_replace(' ', '_', $row['element_label']);

            switch ($row['element']):
                case 'chk_box':
                    echo '<div class="form-group"><div class="col-md-6">';
                    echo '<label>' . $row['element_label'] . '</label>
                        <input class="form-control" type="checkbox" name="' . $name . '"/>';
                    echo '</div></div>';
                    break;
                case 'drp_dwn':
                    echo '<div class="form-group"><div class="col-md-6">';
                    echo '<label>' . $row['element_label'] . '</label>
                        <select class="form-control" name="' . $name . '">';
                    echo ' <option value="">Select Value</option>';
                    echo ' </select>';
                    echo '</div></div>';
                    break;
                case 'radio':
                    echo '<div class="form-group"><div class="col-md-6">';
                    echo '<label>' . $row['element_label'] . '</label>
                        <input class="form-control" type="radio" name="' . $name . '"/>';
                    echo '</div></div>';
                    break;
                case 'txtf':
                    echo '<div class="form-group"><div class="col-md-6">';
                    echo '<label>' . $row['element_label'] . '</label>
                        <input type="text" class="form-control" name="' . $name . '">';
                    echo '</div></div>';
                    break;
                case 'txtarea':
                    echo '<div class="form-group"><div class="col-md-6">';
                    echo '<label>' . $row['element_label'] . '</label>
                        <textarea class="form-control" name="' . $name . '"></textarea>';
                    echo '</div></div>';
                    break;
                case 'canc_btn':
                    echo '<input class="btn btn-primary pull-right" type="cancel" name="' . $name . '" value="' . $row['element_label'] . '"/>';
                    break;
                case 'sub_btn':
                    echo '<input class="btn btn-success pull-right" type="submit" name="' . $name . '" value="' . $row['element_label'] . '"/>';
                    break;
            endswitch;
        }
        echo '</form>';
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
