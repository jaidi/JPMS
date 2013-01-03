
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Patient Bio Data</title>
 </head>
 <body>
   <h1>Patient Bio Data</h1>
   <?php //echo validation_errors(); 
   ?>
   <?php echo form_open('PatientBioDataController'); ?>
     <label for="almoner_number">Almoner #:</label>
     <input type="text" size="20" id="almoner_number" name="almoner_number"/>
     <br/>
     <label for="name">Name:</label>
     <input type="text" size="50" id="name" name="name"/>
     <br/>
	 <label for="age">Age:</label>
     <input type="text" size="3" id="age" name="age"/>
     <br/>
	 <label for="sex">Sex:</label>
     <input type="radio" id="sex" name="sex" value="1" <?php echo set_radio('sex', '1', TRUE); ?> />Male
	 <input type="radio" id="sex" name="sex" value="0"<?php echo set_radio('sex', '0'); ?>/>Female
     <br/>
	 <label for="father_name">Father Name:</label>
     <input type="text" size="50" id="father_name" name="father_name"/>
     <br/>
	 <label for="occupation">Occupation:</label>
     <input type="text" size="50" id="occupation" name="occupation"/>
     <br/>
	 <label for="address">Address:</label>
     <input type="text" size="256" id="address" name="address"/>
     <br/>
	 <label for="telephone_number">Telephone #:</label>
     <input type="text" size="20" id="telephone_number" name="telephone_number"/>
     <br/>
	 <label for="bed_number">Bed #:</label>
     <input type="text" size="20" id="bed_number" name="bed_number"/>
     <br/>
	 <label for="admitted_from">Admitted From:</label>
     <input type="text" size="20" id="admitted_from" name="admitted_from"/>
     <br/>
     <input type="submit" value="Submit"/>
   </form>
 </body>
</html>

