<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Chat Application - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="<?=base_url()?>assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/app-assets/css/pages/app-chat.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  fixed-navbar chat-application  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="<?php echo base_url().'index.php/vendor';?>">
                            <h3 class="brand-text">Vendor Panel</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?php echo $sName;?></span><span class="avatar avatar-online"><img src="<?php echo base_url().'assets/app-assets/images/portrait/small/'.$sImg;?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/edit';?>"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/signout';?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <!-- <li class="nav-item active"><a class="nav-link" href="<?php echo base_url().'index.php/vendor';?>"><i class="la la-bank"></i><span>Vendor Dashboard</span></a></li> -->
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-edit"></i><span data-i18n="nav.accounts.main">Pending</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending';?>" data-toggle=""><span>All Results</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending/create';?>" data-toggle=""><span>Add New</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/vendor/register';?>"><i class="la la-credit-card"></i><span>Register</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/vendor/chat';?>"><i class="la ft-message-square"></i><span> Chats</span></a></li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <div class="app-content content">
        <div class="sidebar-left sidebar-fixed">
            <div class="sidebar">
                <div class="sidebar-content card">
                    <div class="card-body chat-fixed-search">
                        <!-- <fieldset class="form-group position-relative has-icon-left m-0">
                            <input type="text" class="form-control" id="iconLeft" placeholder="Search user">
                            <div class="form-control-position">
                                <i class="ft-search"></i>
                            </div>
                        </fieldset> -->
                    <!-- </div>
                    <div id="users-list" class="list-group position-relative"> -->
                            <div class="users-list-padding media-list" style="padding:0!important">
                         
                            <a href="javascript:;" data-friend="-1" class="media">
                                <div class="media-left pr-1">
                                    <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?=base_url()?>assets/app-assets/images/portrait/small/download.jpg" alt="Generic placeholder image">
                                        <i></i>
                                    </span>
                                </div>
                                <div class="media-body w-100">
                                    <h6 class="list-group-item-heading">admin 
                                    <?php if (count($contact->result()) > 0) { ?>
                                         <?php foreach($contact->result() as $items){ ?>
                                        <span class="font-small-3 float-right info"><?=$items->chatTime?></span></h6>
                                    <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> <?=$items->chatMessages?>
                                         <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span></p> <?php }}else{ ?></h6><?php } ?>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row mb-1">
                </div>
                <div class="content-body">
                    <div class="content-overlay"></div>
                    <section class="chat-app-window">
                        <div class="sidebar-toggle d-block d-lg-none"><i class="ft-menu font-large-1"></i></div>
                        <div class="badge badge-secondary mb-1">Chat History</div>
                        <div id="wgt-container-template">
                        </div>
                        <script type="text/x-template" id="msg-template" style="display: none">
                                    <div class="tbody chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img class="msg-wgt-message-list-body-img"  alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p class="msg-wgt-message-list-body"></p>
                                            </div>
                                        </div>
                                    </div>
                                </script>
                    </section>
                    <section class="chat-app-form">
                        <div class="chat-app-input d-flex" >
                            <fieldset class="form-group position-relative has-icon-left col-10 m-0">
                                <!-- <div class="form-control-position">
                                    <i class="icon-emoticon-smile"></i>
                                </div> -->
                                <input type="text" class="form-control message" id="iconLeft4-1" placeholder="Type your message">
                                <!-- <div class="form-control-position control-position-right">
                                    <i class="ft-image"></i>
                                </div> -->
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left col-2 m-0">
                                <button type="button" class="btn btn-primary send" id="enterChat"><i class="la la-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">Send</span></button>
                            </fieldset>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer fixed-bottom footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="#" target="_blank">Excess Yard</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=base_url()?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/ui/jquery.sticky.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/jquery.sparkline.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chart.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chartist.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/extended/card/jquery.card.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/moment.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/underscore-min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/clndr.min.js';?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url()?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?=base_url()?>assets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=base_url()?>assets/app-assets/js/scripts/pages/app-chat.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($) {
 
    // New chat
    $(document).on('click', 'a[data-friend]', function(e) {
        var $data = $(this).data();
        // alert(JSON.stringify($data));
        // var tpl = $('#wgt-container-template').html();
        // alert(tpl);
            var tpl = '<div class="chats msg-wgt-container"><div class="chats msg-wgt-message-container"><div class="msg-wgt-message-list"></div></div></div>';
            var tplBody = $('<div/>').html(tpl);
            tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
            tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
            // $('.chat-app-window').append(tplBody.html());
            $('#wgt-container-template').html(tplBody);
            initializeChat();
    });
    var chatInterval = [];
    var initializeChat = function() {
        $.each(chatInterval, function(index, val) {
            clearInterval(chatInterval[index]);   
        });
 
        $('.msg-wgt-active').each(function(index, el) {
            var $data = $(this).data();
            var $that = $(this);
            var $container = $that.find('.msg-wgt-message-container');
 
            chatInterval.push(setInterval(function() {
 
                var i = 0;
                $.post('<?php echo site_url('chat/getChats'); ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {

                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    // alert(chatLength);
                    temp = data.chats[newIndex-1];
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];
                        var tpl = $('#msg-template').html();
                        // alert(tpl);
                        var tplBody = $('<div/>').html(tpl);
                        var cData = new Date();
                        var pData = new Date(val.chatTime);
                        var diff = cData.getTime() - pData.getTime();
                        var msec = diff;
                        var hh = Math.floor(msec / 1000 / 60 / 60);
                        msec -= hh * 1000 * 60 * 60;
                        var id = (val.chatId + '_' + val.chatBy + '_' + val.chatTo).toString();
                        
                        if( val.chatBy != temp.chatBy || newIndex + 1 == data.chats.length){
                  // alert(JSON.stringify(tpl));
                            temp = data.chats[newIndex];
                          // var id = (val.id +'_'+ val.send_by +'_'+ val.send_to).toString();
                        // alert(JSON.stringify(val));
                            if ($that.find('#'+ id).length == 0) {
                                tplBody.find('.tbody').attr('id', id); // set class
                                // alert(val.chatBy);
                                if(val.chatBy == -1){
                                    tplBody.find('.tbody').addClass('chat-left');
                                    tplBody.find('.msg-wgt-message-list-body-img').attr('src', "<?=base_url()?>assets/app-assets/images/portrait/small/download.jpg");
                                }else{
                                    tplBody.find('.msg-wgt-message-list-body-img').attr('src', "<?=base_url()?>assets/app-assets/images/portrait/small/<?=$this->session->userImg?>");

                                }
                                // tplBody.find('td.name').text(val.name); // set name
                                // tplBody.find('td.time').text(val.time); // set time
                                tplBody.find('.msg-wgt-message-list-body').html(nl2br(val.chatMessages)); // set message
                                // alert(JSON.stringify(tplBody));
                                if(i != hh/24){
                                    i = parseInt(hh/24);
                                    // if(hh > 25)
                                    if(hh >= 24){
                                        i_Temp = i + 1;
                                        $that.find('.msg-wgt-message-list').append('<p class="time">'+ i_Temp +' days ago</p>');
                                    }else
                                         $that.find('.msg-wgt-message-list').append('<p class="time">'+ hh +' hours ago</p>');
                                }
                                $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message
                            }
                        }else{
                            temp_id = (temp.chatId + '_' + temp.chatBy + '_' + temp.chatTo).toString();
                            if ($that.find('#'+ id).length == 0) {
                                tplBody.find('.tbody').attr('id', id); // set class
                                temp_html = '<div class="chat-content" id="'+id+'"><p class="msg-wgt-message-list-body">' +nl2br(val.chatMessages) +'</p></div>';
                                $that.find('#' +temp_id+ ' .chat-body').append(temp_html); // append message
                            }
                        }
                    });
                });
            }, 1000));
            $('#iconLeft4-1').on('keydown', function(e) {
                var $textArea = $(this);
                // alert('1');
                if (e.keyCode === 13 && e.shiftKey === false) {
                    $.post('<?php echo site_url('chat/sendMessage'); ?>', {messages: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                     });
                    $textArea.val(''); // clear input
                    e.preventDefault(); // stop 
                    return false;
                }
            });
            $('#enterChat').on('click', function() {
                    $.post('<?php echo site_url('chat/sendMessage'); ?>', {messages: $('#iconLeft4-1').val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                        // alert(data);
                    });
                    $('#iconLeft4-1').val('');
            });
        });
    }
    var nl2br = function(str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }
 
 
    // on load
    // initializeChat();
});
</script>
</body>
<!-- END: Body-->

</html>
 