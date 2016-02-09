<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Form Generator</h1>
                    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.<a class="btn btn-success" href="index.php" style="float:right">New Form</a></p>
                </div>
            </div>
            <div class="row">
                <form name="gen_form" id="gen_form" method="POST" action="generator.php" >

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Form Title</label>
                            <input type="hidden" class="form-control" id="form_id" name="form_id" value="<?php echo $_SESSION['form_id']; ?>">
                            <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Form Title"  value="<?php echo $_SESSION['form_name']; ?>" readonly>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Element Name</label>
                            <input type="text" class="form-control" name="element_name" id="element_name" placeholder="Label">
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Element Type</label>
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


                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label">Select Options</label>
                            <input type="text" class="form-control"  name="options" id="options" placeholder="Select Options with comma (,) seperated">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-label" style="display: block;height: 20px;"></label>
                            <button type="submit" class="btn btn-info">Ok</button>

                        </div>
                    </div>
                    <input name="function" value="generate" type="hidden"/>
                </form>
            </div>
            <div class="row">
                <form method="POST" action="generator.php">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="form_id" name="form_id" value="<?php echo $_SESSION['form_id']; ?>">
                            <input type="submit" value="Download Form" class="btn btn-primary"/>
                        </div>
                    </div>
                    <input name="function" value="download" type="hidden"/>
                </form>
            </div>
        </div>
    </body>
</html>
