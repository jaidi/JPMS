
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Login</title>
    <link rel="stylesheet" href="assets/jquery/jqwidgets/styles/jqx.base.css" type="text/css"/>
	<link rel="stylesheet" href="assets/style.css" type="text/css"/>
    <script type="text/javascript" src="assets/jquery/scripts/gettheme.js"></script>
    <script type="text/javascript" src="assets/jquery/scripts/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxwindow.js"></script>
    <script type="text/javascript" src="assets/jquery/jqwidgets/jqxbuttons.js"></script>
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
      
   <div style="width: 100%; height: 650px;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Login </span>
                </div>
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px">
						<?php echo form_open('verifylogin'); ?>
                        <label class="cLabel" for="username">Username:</label>
                        <input class="cInput"  value="wikiRao" size="20" style="width: 175px; border: 1px solid #aaa" id="username" name="username" />
						<br/>
						<br/>
						<label class="cLabel" for="password">Password:</label>
						<input class="cInput" type="password" value="123456" size="20" style="width: 175px; border: 1px solid #aaa" id="password" name="password" />
                        <br/><br/>
                        <div style="float: right">
                            <input type="submit" value="Login" style="margin-bottom: 5px;" id="loginButton"/><br />
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
   
   
 </body>
 
</html>

