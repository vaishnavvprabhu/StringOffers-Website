<?php
include 'header.php';
include 'sideber.php';
?>



<div class="main-panel">
    <div class="content-wrapper">
        
        <div class="page-header">
            <h2 class="page-title">
            Blog Editor<br>
                
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

                        <!-- <div class="">
                            <ul class="nav nav-tabs nav-tabs-neutral" role="tablist" data-background-color="orange">
                                <li class="nav-item">
                                    <a class="nav-link active" href="all-campaigns.php">All campaigns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="all-campaigns.php">Paused Campaigns</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Campaign
                                        Request</a>
                                </li> 
                            </ul>
                        </div> -->

                        <div class="card-body">
                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!-- <div class="tab-pane active" id="home1" role="tabpanel">
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
                                </div> -->

                                <div class="row">
                                    <div class="col-7">
                                        <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                class="mdi mdi-content-save"></i> Save</button>


                                        <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                class="mdi mdi-eye"></i> Priview In Browser</button>
                                        <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                class="mdi mdi-upload"></i> Pubilish To Web</button>
                                    </div>
                                    <div class="col-5">

                                        <button class="btn btn-block btn-lg btn-gradient-primary pull-right"><i
                                                class="mdi mdi-delete"></i> Delete Psot </button>
                                    </div>
                                </div>




                                <div class="form-group mt-5">

                                    <textarea id="editor" placeholder="Campaign Description"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h2>Blog Title</h2>
                                        <h4>Blog Subtitle</h4>
                                        <button class="btn btn-block btn-lg btn-gradient-primary"><i
                                                class="mdi mdi-plus-box"></i> Add new Block </button>
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