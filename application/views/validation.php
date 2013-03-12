<!DOCTYPE html>
<html lang="en">
<head>
<meta name="keywords" content="jqxValidator, jQuery Validation, jQWidgets, Default Functionality" />
<meta name="description" content="jqxValidator is a plug-in which enables you to validate html forms.
    It has a set of built-in rules (required inputs, e-mail, SSN, ZIP, max value, min value, interval etc.) 
     for validating the user input. You can also write a custom rule which will fit best to your requirements." />
    <title id='Description'>This demo demonstrates the basic functionality of the jqxValidator plugin.</title>
    <link rel="stylesheet" href="../../jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../../scripts/jquery-1.8.2.min.js"></script>   
    <script type="text/javascript" src="../../jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../../jqwidgets/jqxexpander.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxvalidator.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxbuttons.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxcheckbox.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/globalization/jquery.global.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxcalendar.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxdatetimeinput.js"></script> 
    <script type="text/javascript" src="../../jqwidgets/jqxmaskedinput.js"></script> 
    <script type="text/javascript" src="../../scripts/gettheme.js"></script> 
    <script type="text/javascript">
        $(document).ready(function () {
            var theme = getTheme();
            $("#register").jqxExpander({ toggleMode: 'none', width: '300px', theme: theme });
            $('#sendButton').jqxButton({ width: 60, height: 25, theme: theme });
            $('#acceptInput').jqxCheckBox({ width: 130, theme: theme });
            $('#sendButton').bind('click', function () {
                $('#testForm').jqxValidator('validate');
            });
            $("#ssnInput").jqxMaskedInput({ mask: '###-##-####', width: 150, height: 22, theme: theme });
            $("#phoneInput").jqxMaskedInput({ mask: '(###)###-####', width: 150, height: 22, theme: theme });
            $("#zipInput").jqxMaskedInput({ mask: '###-##-####', width: 150, height: 22, theme: theme });
            $('.text-input').addClass('jqx-input');
            $('.text-input').addClass('jqx-rc-all');
            if (theme.length > 0) {
                $('.text-input').addClass('jqx-input-' + theme);
                $('.text-input').addClass('jqx-widget-content-' + theme);
                $('.text-input').addClass('jqx-rc-all-' + theme);
            }
            var date = new Date();
            date.setFullYear(2000, 0, 1);
            $('#birthInput').jqxDateTimeInput({ theme: theme, height: 22, value: $.jqx._jqxDateTimeInput.getDateTime(date) });
            // initialize validator.
            $('#testForm').jqxValidator({
             rules: [
                    { input: '#userInput', message: 'Username is required!', action: 'keyup, blur', rule: 'required' },
                    { input: '#userInput', message: 'Your username must be between 3 and 12 characters!', action: 'keyup, blur', rule: 'length=3,12' },
                    { input: '#realNameInput', message: 'Real Name is required!', action: 'keyup, blur', rule: 'required' },
                    { input: '#realNameInput', message: 'Your real name must contain only letters!', action: 'keyup', rule: 'notNumber' },
                    { input: '#realNameInput', message: 'Your real name must be between 3 and 12 characters!', action: 'keyup', rule: 'length=3,12' },
                    { input: '#birthInput', message: 'Your birth date must be between 1/1/1900 and 1/1/2012.', action: 'valuechanged', rule: function (input, commit) {
                        var date = $('#birthInput').jqxDateTimeInput('value');
                        var result = date.dateTime.getFullYear() >= 1900 && date.dateTime.getFullYear() <= 2012;
                        // call commit with false, when you are doing server validation and you want to display a validation error on this field. 
                        return result;
                    }
                    },
                    { input: '#passwordInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                    { input: '#passwordInput', message: 'Your password must be between 4 and 12 characters!', action: 'keyup, blur', rule: 'length=4,12' },
                    { input: '#passwordConfirmInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                    { input: '#passwordConfirmInput', message: 'Passwords doesn\'t match!', action: 'keyup, focus', rule: function (input, commit) {
                        // call commit with false, when you are doing server validation and you want to display a validation error on this field. 
                        if (input.val() === $('#passwordInput').val()) {
                            return true;
                        }
                        return false;
                    }
                    },
                    { input: '#emailInput', message: 'E-mail is required!', action: 'keyup, blur', rule: 'required' },
                    { input: '#emailInput', message: 'Invalid e-mail!', action: 'keyup', rule: 'email' },
                    { input: '#ssnInput', message: 'Invalid SSN!', action: 'valuechanged, blur', rule: 'ssn' },
                    { input: '#phoneInput', message: 'Invalid phone number!', action: 'valuechanged, blur', rule: 'phone' },
                    { input: '#zipInput', message: 'Invalid zip code!', action: 'valuechanged, blur', rule: 'zipCode' },
                    { input: '#acceptInput', message: 'You have to accept the terms', action: 'change', rule: 'required', position: 'right:0,0'}], theme: theme
            });
        });
    </script>
    <style type="text/css">
        .text-input
        {
            height: 21px;
            width: 150px;
        }
        .register-table
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .register-table td, 
        .register-table tr
        {
            margin: 0px;
            padding: 2px;
            border-spacing: 0px;
            border-collapse: collapse;
            font-family: Verdana;
            font-size: 12px;
        }
        h3 
        {
            display: inline-block;
            margin: 0px;
        }
    </style>
</head>
<body class='default'>
    <div id="register">
        <div><h3>Register</h3></div>
        <div>
            <form id="testForm" action="./">
                <table class="register-table">
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" id="userInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="passwordInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>Confirm password:</td>
                        <td><input type="password" id="passwordConfirmInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>Real name:</td>
                        <td><input type="text" id="realNameInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>Birth date:</td>
                        <td><div id="birthInput"></div></td>
                    </tr>
                    <tr>
                        <td>E-mail:</td>
                        <td><input type="text" id="emailInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>SSN:</td>
                        <td><div id="ssnInput"></div></td>
                    </tr>
                    <tr>
                        <td>Phone:</td>
                        <td><div id="phoneInput"></div></td>
                    </tr>
                    <tr>
                        <td>Zip code:</td>
                        <td><div id="zipInput"></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="padding: 5px;"><div id="acceptInput" style="margin-left: 50px;">I accept terms</div></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="button" value="Send" id="sendButton" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>