<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h2 class="page-title">Enquiry</h2>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="">
                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Subcribe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Send Email</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Contact Us</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-check"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-file-excel"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary">Create
                                                    New</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th>PID</th>
                                                                    <th> Name </th>
                                                                    <th> Email ID </th>
                                                                    <th>Phone </th>
                                                                    <th> Enquiry Type</th>
                                                                    <th> Date </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> 012</td>
                                                                    <td> Name </td>
                                                                    <td> Publishersname@gmail.com </td>
                                                                    <td> 9898989898</td>
                                                                    <td>Subpport</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> 012</td>
                                                                    <td> Name </td>
                                                                    <td> Publishersname@gmail.com </td>
                                                                    <td> 9898989898</td>
                                                                    <td>Gerneral</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                <div class="tab-pane" id="profile1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Manage Subscribe</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-file-excel"></i></button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                        class="mdi mdi-delete"></i></button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th></th>
                                                                    <th> Name </th>
                                                                    <th> Email ID </th>
                                                                    <th> Phone</th>
                                                                    <th> Date </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Addvertieser Name </td>
                                                                    <td> Addvertiesername@gmail.com </td>
                                                                    <td>9898989898</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                                <tr>
                                                                    <th><input type="checkbox"></th>
                                                                    <td> Addvertieser Name </td>
                                                                    <td> Addvertiesername@gmail.com </td>
                                                                    <td>9898989898</td>
                                                                    <td>30-12-22</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="messages1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>Send Email</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" placeholder="Publisher">
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">

                                                                <select name="pets" id="pet-select"
                                                                    class="form-control">
                                                                    <option value="" hidden>Approved</option>
                                                                    <option value="dog">Approved</option>
                                                                    <option value="cat">Rejected</option>
                                                                   
                                                                </select>
                                                                
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control"
                                                                    id="exampleInputEmail1" placeholder="Subject">
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="form-group">

                                                        <textarea id="editor"
                                                            placeholder="Compliance Guidance"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Tabs on plain Card -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>

<script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/6/tinymce.min.js">
</script>

<script>
tinymce.init({
    selector: '#editor',
    menubar: false,
    statusbar: false,
    plugins: 'autoresize anchor autolink charmap code codesample directionality fullpage help hr image imagetools insertdatetime link lists media nonbreaking pagebreak preview print searchreplace table template textpattern toc visualblocks visualchars',
    toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | link image media | removeformat help fullscreen ',
    skin: 'bootstrap',
    toolbar_drawer: 'floating',
    min_height: 200,
    autoresize_bottom_margin: 16,
    setup: (editor) => {
        editor.on('init', () => {
            editor.getContainer().style.transition =
                "border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out"
        });
        editor.on('focus', () => {
            editor.getContainer().style.boxShadow = "0 0 0 .2rem rgba(0, 123, 255, .25)",
                editor.getContainer().style.borderColor = "#80bdff"
        });
        editor.on('blur', () => {
            editor.getContainer().style.boxShadow = "",
                editor.getContainer().style.borderColor = ""
        });
    }
});
</script>
<?php
include 'f-links.php';
?>