<!DOCTYPE html>
<!--Author     : @arboshiki-->
<html> 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Aplikasi Database Sparepart Komputer</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo2.png')?>" />
        
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/font-awesome.min.css')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/weather-icons.min.css')?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/select2.min.css')?>">

        <!--lobiadmin-with-plugins.css contains all LobiAdmin css plus lobiplugins all css files, plus third party plugins-->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/lobiadmin-with-plugins.css')?>"/>
        <!--Put your css here-->
        
        <!--This css file is for only demo usage-->
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/demo.css')?>"/>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lib/jquery.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lib/jquery-ui.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')?>"></script>

        <!-- summernote -->
         <link href="<?php echo base_url();?>assets/admin/summernote/summernote.css" rel="stylesheet" />
         <script src="<?php echo base_url();?>assets/admin/summernote/summernote.min.js"></script>
         <script src="<?php echo base_url();?>assets/admin/summernote/jquery.form-advanced.init.js"></script>


    </head>
    <body>
        <nav class="navbar navbar-default navbar-header header">
            <a class="navbar-brand" href="#">
                
                <img src="" class="hidden-xs" alt="" />
            </a>
            <!--Menu show/hide toggle button-->
            <ul class="nav navbar-nav pull-left show-hide-menu">
                <li>
                    <a href="#" class="border-radius-0 btn font-size-lg" data-action="show-hide-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
            
            <div class="navbar-items">
                <!--User avatar dropdown-->
                <ul class="nav navbar-nav navbar-right user-actions">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="user-avatar" src="<?php echo base_url('assets/img/logo2.png')?>" alt="..."/>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> &nbsp;&nbsp;<?php echo $username;?></a></li>
                                                   
                            <li><a href="<?php echo base_url('admin/logout/');?>"><span class="glyphicon glyphicon-off"></span> &nbsp;&nbsp;Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
           
        </nav>
        <div class="menu">
            
            <nav>
                <ul>
                    <li>
                        <a href="#dashboard">
                            <i class="fa fa-home menu-item-icon"></i>
                            <span class="inner-text">Dashboard</span>
                        </a>
                    </li>
                     
                    <li>
                        <a href="#">
                            <i class="fa fa-book menu-item-icon"></i>
                            <span class="inner-text">Master</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#master_katagori">
                                    <span class="inner-text">Master Katagori</span>
                                </a>
                            </li> 

                            <li>
                                <a href="#master_sub_katagori">
                                    <span class="inner-text">Master Sub katagori</span>
                                </a>
                            </li>

                             <li>
                                <a href="#master_product">
                                    <span class="inner-text">Master Product</span>
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-gears menu-item-icon"></i>
                            <span class="inner-text">Setting</span>
                        </a>
                        <ul>
                            <li>
                                <a href="#cara_order">
                                    <span class="inner-text">Cara Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    <span class="inner-text">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href="#ubah_password">
                                    <span class="inner-text">Ubah Password</span>
                                </a>                                
                            </li>
                        </ul>
                    </li>
                     
                </ul>
            </nav>
            <div class="menu-collapse-line">
                <!--Menu collapse/expand icon is put and control from LobiAdmin.js file-->
                <div class="menu-toggle-btn" data-action="collapse-expand-sidebar"></div>
            </div>
        </div>
        <div id="main">
            <div id="ribbon" class="hidden-print">
                <a href="#dashboard" class="btn-ribbon" data-container="#main" data-toggle="tooltip" data-title="Show dashboard"><i class="fa fa-home"></i></a>
                <span class="vertical-devider">&nbsp;</span>
                <button class="btn-ribbon" data-container="#main" data-action="reload" data-toggle="tooltip" data-title="Reload content by ajax"><i class="fa fa-refresh"></i></button>
                <ol class="breadcrumb">
                </ol>
            </div>
           
            
            <div id="content">

               
                
            </div>
        </div>
        <!--Setting box-->
        <div class="setting-box hidden-print">
            <div class="btn-toggle">
                <span class="glyphicon glyphicon-cog"></span>
            </div>
            <form action class="lobi-form">
                <fieldset>
                    <header>LobiAdmin Settings</header>
                    <div class="form-group">
                        <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Header fixed
                            <input type="checkbox" class="fix-header" value="1"> 
                            <i></i> 
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Menu fixed
                            <input type="checkbox" class="fix-menu"> 
                            <i></i> 
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline lobicheck lobicheck-rounded">
                            Ribbon fixed
                            <input type="checkbox" class="fix-ribbon"> 
                            <i></i> 
                        </label>
                    </div>
                    <div class="row row-skin-options">
                        <h4>Skins</h4>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="0" checked>
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
                <div class="row row-skin-options">
                        <h4>Skins</h4>
                        <div class="btn-group display-block" data-toggle="buttons">
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="0">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-cyan">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-green">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="header-skin" value="header-brown">
                                <div>
                                    <div class="setting-header"></div>
                                    <div class="setting-menu"></div>
                                </div>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
                    <div class="row row-bg-options">
                        <h4>Background</h4>
                        <div class="col-xs-3">
                            <label class="radio" style="background-color: #fff">
                                <input type="radio" name="body-bg" data-is-color="true" value="#fff" checked>
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-color: #edf1f4">
                                <input type="radio" name="body-bg" data-is-color="true" value="#edf1f4">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-image: url('img/bg/bg1.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg1.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                        <div class="col-xs-3">
                            <label class="radio" style="background-image: url('img/bg/bg4.png')">
                                <input type="radio" name="body-bg" value="img/bg/bg4.png">
                                <i class="fa fa-check-square"></i>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-pretty" data-action="clear-storage"><i class="fa fa-refresh"></i> Clear local storage</button>
                </fieldset>
            </form>
        </div>

        <!--Loading indicator for ajax page loading-->
        <div class="spinner spinner-horizontal hide">
            <span class="spinner-text">Loading...</span>
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>

        
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/bootstrap/bootstrap.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lobi-plugins/lobibox.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/lobi-plugins/lobipanel.min.js')?>"></script>
        
        
        <!--Make sure that config.js file is loaded before LobiAdmin.js-->
        <script type="text/javascript">
            window.LobiAdminConfig = {
                fullScreenSelector              : '[data-action="fullscreen"]',
                reloadPageSelector              : '[data-action="reload"]',
                sidebarHideShowSelector         : '[data-action="show-hide-sidebar"]',
                sidebarCollapseExpandSelector   : '[data-action="collapse-expand-sidebar"]',
                sidebarSelector                 : '.menu',
                settingBoxSelector              : '.setting-box',
                searchFormSelector              : '.header .navbar-search',
                breadcrumbsListSelector         : '#ribbon .breadcrumb',
                contentSelector                 : '#content',            
                menuItemIcon                    : 'fa fa-chevron-circle-right',
                menuItemExpandIcon              : 'fa fa-chevron-circle-down',
                submenuItemIcon                 : 'fa fa-plus-square-o',
                submenuItemExpandedIcon         : 'fa fa-minus-square-o',
                menuToggleIcon                  : 'fa fa-chevron-circle-left',
                menuToggleCollapsedIcon         : 'fa fa-chevron-circle-right',
                useLocalStorage                 : true,
                clearLocalStorageSelector       : '[data-action="clear-storage"]',
                confirmationBeforeClearStorage  : true,
                clearStorageConfirmationMessage : "Are you sure you want to clear localStorage? This action can not be undone!",
                defaultPage                     : 'dashboard',
                panelItemToggleAnimationDuration: 200,
                enableUrlRouting                : true,
                composeEmailViewSelector        : '[data-action="compose-email"]',
                openEmailViewSelector           : '[data-action="open-email"]'
            };

            window.LobiAdminRoutes = {
                '(.+)' : '<?php echo base_url('/admin/$1')?>',
            };


        </script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/LobiAdmin.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/plugin/select2/select2.min.js')?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/admin/js/app.js')?>"></script>
        <?php if($this->session->flashdata('info')): ?>  
        <script type="text/javascript">
            $(document).ready(function(){
                setTimeout(function(){
                    //All demo scripts go here
                    Lobibox.notify('info', {
                        img: '<?php echo base_url('assets/img/logo2.png');?>',
                        sound: false,
                        position: 'top right',
                        delay: 15000,
                        showClass: 'fadeInDown',
                        title: 'Notifikasi',
                        msg: '<?php echo $this->session->flashdata('info'); ?>'
                    });
                }, 1000);                
            });
            function randomIntegers(n, min, max) {
                var arr = [];
                for (var i = 0; i < n; i++) {
                    arr.push(Math.round(min + Math.random() * (max - min)));
                }
                return arr;
            };
           
        </script>
        <?php endif; ?>


       

    </body>
</html>
