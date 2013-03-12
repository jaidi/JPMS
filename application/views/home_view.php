
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
	<title>Home</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css" type="text/css"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript">
        var customButtonsDemo = (function () {
            var _collapsed = false;
            function _createElements() {
                $('#customWindow').jqxWindow({ theme: customButtonsDemo.config.theme, width: 400,
                    height: 150, resizable: false,
                    initContent: function () {
                        $('#loginButton').jqxButton({ theme: customButtonsDemo.config.theme, width: '80px', disabled: false });
                    }
                });
            };
            return {
                config: {
                    theme: null
                },
                init: function () {
                    _createElements();
					$('#customWindow').jqxWindow('draggable', false);
                }
            };
        } ());
        $(document).ready(function () {
            var theme = $.data(document.body, 'theme', theme);
            if (theme == undefined) theme = '';
            customButtonsDemo.config.theme = theme;
            customButtonsDemo.init();
        });
    </script>
 </head>
 <body class="default">
      
   <div style="width: 100%; height: 650px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Home</span>
                </div>
                <div id="customWindowContent" style="overflow: hidden; text-align: center">
					<input type="text" name="test" value="<?php echo  $type;//echo $sess_array['username']; ?>" />
					<label class="cLabel"><?php echo anchor('PatientBioDataController', 'Admit New Patient'); ?></label>
					<br/>
					<label class="cLabel"><?php echo anchor('PatientRecordController', 'Admitted Patients'); ?></label>
					<br/>
					<label class="cLabel"><?php echo anchor('PatientBioDataController', 'Follow Ups'); ?></label>
					<br/>
					<label class="cLabel"><?php echo anchor('PatientBioDataController', 'Day Case'); ?></label>
					<br/>
					<label class="cLabel">
						<?php
							if ($type == ADMINISTRATOR)
								echo anchor('RolesController/getAllUsers', 'Assign Roles'); 
						?>
					</label>
                </div>
            </div>
        </div>
    </div>
   
   
 </body>
 
</html>

