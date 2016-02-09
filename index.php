<!DOCTYPE html>
<html>
    <?php include 'header.php';?>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>FormGen</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
                <a class="btn btn-success" href="index.php">New Form</a>
            </div>

            <form class="form-horizontal" name="gen_form" id="gen_form" method="POST" action="generator.php">
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Form Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="element_name" id="element_name" placeholder="Label">
                    </div>
                    <div class="col-md-6">
                        <select class="form-control" id="elemet_type" name="elemet_type">
                            <option value="txtf">Text Field</option>
                            <option value="txtarea">Text Area</option>
                            <option value="chk_box">Checkboxes</option>
                            <option value="drp_dwn">Dropdown</option>
                            <option value="radio">Radio Button</option>
                            <option value="sub_btn">Submit Button</option>
                            <option value="canc_btn">Cancel Button</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="text" class="form-control"  name="options" id="options" placeholder="Select Options with comma (,) seperated">
                    </div>
                </div>
                <div class="form-group">
                    <div  style="float: right">
                        <button type="submit" class="btn btn-default">Ok</button>
                    </div>
                </div>
                <input name="function" value="generate" type="hidden"/>
            </form>                       
        </div>
    </body>
</html>
