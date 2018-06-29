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
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="fixed-section" style="height: 350px">
                    <span class="title">HRIS Master</span>
                        <ul>
                            <li><a href="#master" data-toggle="collapse" target="_self">Master</i></a>
                                <ul id="master" class="collapse show" style="padding-left: 10% ">
                                    <li><a href="#/master_plant">Plant</a></li>
                                    <li><a class="active" href="#/master_dept">Departement</a></li>
                                    <li><a href="#/master_absen">Absensi</a></li>
                                    <li><a href="#/master_gaji">Gaji</a></li>
                                </ul>
                            </li>
                            <li><a href="#recruitment" data-toggle="collapse" target="_self">Recruitment</a>
                                <ul id="recruitment" class="collapse" style="padding-left: 10% ">
                                    <li><a href="#/recruitment">Recruitment</a></li>
                                    <li><a href="#/employee">Karyawan</a></li>
                                </ul>
                            </li>
                            <li><a href="#/payroll">Payroll</a></li>
                            <li><a href="#/report">Report</a></li>
                            <!-- <li><a class="active" href="#/page_career">Career</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 col-md-12">
                    <a href="#/administrator">Administrator</a> > <span class="title">Master Departemen</span>
                    <hr>
                    <div class="container">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#dlgDept"  ng-click="newDept()"><i class="now-ui-icons ui-1_simple-add"></i>
                          Add Departemen
                        </button>

                        <!-- The Modal -->
                        <div class="modal fade" id="dlgDept">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <span class="modal-title">Entry Departemen</span>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                                <div class="alert {{alertType}} alert-dismissible fade show"  ng-show="alertType">
                                    <button type="button" class="close" data-dismiss="alert" ng-click="closemsg()">&times;</button>
                                    <strong>Information!</strong> {{alert}}
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        ID Departemen
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="form-group">
                                            <!-- <label>Title Page</label> -->
                                            <input type="text" value="" placeholder="ID Departemen" class="form-control" disabled="true" ng-model="id_departemen"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        Departemen Name
                                    </div>
                                    <div class="col-sm-6 col-lg-8">
                                        <div class="form-group">
                                            <!-- <label>Title Page</label> -->
                                            <input type="text" value="" placeholder="Departemen Name" class="form-control" ng-model="departemen_name"/>
                                        </div>
                                    </div>
                                </div>
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn" ng-click="saveDept()">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                            </div>
                          </div>
                        </div>

                        <table id="table_user" class="display" cellspacing="0" width="100%" style="overflow-x: scroll;">
                            <thead>
                                <tr>
                                    <th style="font-size: 12px; width: 100px; ">User</th>
                                    <th style="font-size: 12px; width: 120px; ">Password</th>
                                    <th style="font-size: 12px; width: 70px; ">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var save_method; //for save method string
    var table;

    $(document).ready(function() {
        //datatables
        table = $('#table_user').DataTable({ 
            // "processing": true, //Feature control the processing indicator.
            // "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": '<?php echo base_url('ng-erp/getuser'); ?>',
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columns": [
                {"username": "username",width:170},
                {"password": "password",width:100},
                {"aksi": "",width:100}
            ]

        });

    });
</script>