<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
       
        <div class="page-header">
            <h2 class="page-title">
            Campaigns<br>
                
            </h2>

            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active dashboard-logo" aria-current="page">
                        <span></span><img src="assets/images/blacklogo.png" class="img-fluid ">
                    </li>
                </ul>
            </nav>
        </div>

        <div class="row">


            <div class="col-md-12 grid-margin stretch-card">
                <div class="col-md-12 ml-auto mr-auto">
                    <div class="">

                        <div class="">
                            <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" href="all-campaigns.php">All campaigns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="all-campaigns.php">Paused Campaigns</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Campaign
                                        Request</a>
                                </li> -->
                            </ul>
                        </div>

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <div class="tab-pane active" id="home1" role="tabpanel">
                                    <div class="row bg-color">
                                        <div class="col-6 ">
                                            <h4>All campaigns</h4>
                                        </div>
                                        <div class="col-6 ">
                                            <div class="pull-right">
                                                <button class="btn btn-block btn-lg btn-gradient-primary">Save</button>
                                                <button class="btn btn-block btn-lg btn-gradient-primary"> Save & Send
                                                    Email</button>

                                                <button class="btn btn-block btn-lg btn-gradient-primary">Test
                                                    Email</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Campaign title">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="buffer">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Campaign Category">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Hours of Operation">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="payout Price">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Target Geo">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">

                                    <textarea id="editor" placeholder="Campaign Description"></textarea>
                                </div>
                                <div class="form-group">

                                    <textarea id="editor" placeholder="Compliance Guidance"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Display Order">
                                        </div>

                                    </div>
                                    <div class="col-3">

                                        <div class="form-group">
                                            <select name="pets" id="pet-select" class="form-control">
                                                <option value="" hidden>Active</option>
                                                <option value="dog">Active</option>
                                                <option value="cat">Paused</option>

                                            </select>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                    <button class="btn btn-block btn-lg update-btn"><i
                                                        class="mdi mdi-link"></i> Add Zip Code Coverage</button>
                                                <button class="btn btn-block btn-lg update-btn"><i
                                                        class="mdi mdi-link"></i> Add Campaign Keywords </button>
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