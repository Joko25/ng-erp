<?php
// echo $log;
    if ($log != 'login') {
        # code...
        show_404();
    }
?>
<div class="page-header" style="height: 80px;">
    <!-- <div class="page-header-image" data-parallax="true" style="background-image: url('./assets/img/bg6.jpg');"></div>
    <div class="container">
        <div class="content-center brand">
            <h1 class="h1-seo">admin at {{career.title}}</h1>
            <h3>{{career.slog}}</h3>
                <form class="form" method="" action="">
                <div class="content">
                    <div class="input-group form-group-no-border input-md">
                        <span class="input-group-addon">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search" ng-mode='search'/>
                    </div>
                </div>
            </form>
        </div>
    </div> -->
</div>
<div class="main" >
    <div class="section section-nucleo-icons">
        <div class="container" style="height: 400px;">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h2 class="title">NG-ERP Online</h2>
                    <h5 class="description">
                        Hello <?=$username?>, <br/>
                        NG-ERP adalah website sederhana untuk kepentingan perusahaan dalam memasarkan product, dan recruitment. ini adalah halaman administrator. anda bisa mengatur semua halaman di sini. 
                    </h5>
                    <!-- <div class="nucleo-container">
                    <img src="assets/img/nucleo.svg" alt="">
                </div> -->
                    <a href="#/page_index" class="btn btn-primary btn-round btn-lg" >Page</a>
                    <!-- <a href="#/" class="btn btn-primary btn-round btn-lg" target="_blank">Career</a> -->
                    <a href="#/master_product" class="btn btn-primary btn-round btn-lg" >Catalog</a>
                    <a href="#/hris" class="btn btn-primary btn-round btn-lg">HRIS</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="container" align="center">
                        <h2 class="title">MENU</h2>
                        <div class="card text-white bg-primary mb-3" style="width: 30%;height: 130px">
                          <div class="card-header">HRM</div>
                          <div class="card-body">
                            <!-- <h5 class="card-title">HRM</h5> -->
                            <p class="card-text"><button class="btn">></button></p>
                          </div>
                        </div>
                        <div class="card text-white bg-warning mb-3" style="width: 30%;height: 130px">
                          <div class="card-header">CRM</div>
                          <div class="card-body">
                            <!-- <h5 class="card-title">HRM</h5> -->
                            <p class="card-text"><button class="btn">></button></p>
                          </div>
                        </div>
                        <div class="card border-info mb-3" style="width: 30%;height: 130px">
                          <div class="card-header">SRM</div>
                          <div class="card-body text-info">
                            <!-- <h5 class="card-title">Info card title</h5> -->
                            <p class="card-text"><button class="btn">></button></p>
                          </div>
                        </div>
                        <div class="card text-white bg-primary mb-3" style="width: 30%;height: 130px">
                          <div class="card-header">MRP</div>
                          <div class="card-body">
                            <!-- <h5 class="card-title">HRM</h5> -->
                            <p class="card-text"><button class="btn">></button></p>
                          </div>
                        </div>
                        <div class="card text-white bg-warning mb-3" style="width: 30%;height: 130px">
                          <div class="card-header">FRM</div>
                          <div class="card-body">
                            <!-- <h5 class="card-title">HRM</h5> -->
                            <p class="card-text"><button class="btn">></button></p>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>