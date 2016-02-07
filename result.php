<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../FormGen/assets/css/bootstrap.min.css" >
        <title>FormGen</title>
    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>FormGen</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
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
                            <option>Checkboxes</option>
                            <option>Dropdown</option>
                            <option>Radio Button</option>
                            <option>Text Field</option>
                            <option>Text Area</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div  style="float: right">
                        <button type="submit" class="btn btn-default">Ok</button>
                    </div>
                </div>
                <input name="function" value="generate" type="hidden"/>
            </form>
            
            <div>
                <span>Result</span>
            </div>
        </div>
    </body>
</html>
