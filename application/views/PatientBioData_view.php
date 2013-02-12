   <div style="width: 100%; height: 350px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <!--<div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Patient Bio Data</span>
                </div>-->
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px; width: 32em">
						<?php 
							if (isset($bioData)){ ?>
						<?php echo form_open('PatientBioDataController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" value="<?php echo $bioData->almoner_number; ?>" />
						<br/>
						<br/>
						<label class="cLabel" for="name">Name:</label>
						<input class="cInput" type="text" size="50" id="name" name="name" value="<?php echo $bioData->name; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="age">Age:</label>
						<input class="cInput" type="text" size="3" id="age" name="age" value="<?php echo $bioData->age; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="sex">Sex:</label>
						<input style="" type="radio" id="sex" name="sex" value="male"/>Male
						<input style="" type="radio" id="sex" name="sex" value="female"/>Female
                        <br/>
						<br/>
						<label class="cLabel" for="father_name">Father Name:</label>
						<input class="cInput" type="text" size="50" id="father_name" name="father_name" value="<?php echo $bioData->father_name; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="occupation">Occupation:</label>
						<input class="cInput" type="text" size="50" id="occupation" name="occupation" value="<?php echo $bioData->occupation; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="address">Address:</label>
						<input class="cInput" type="text" size="256" id="address" name="address" value="<?php echo $bioData->address; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="telephone_number">Telephone Number:</label>
						<input class="cInput" type="text" size="20" id="telephone_number" name="telephone_number" value="<?php echo $bioData->telephone_number; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="admitted_from">Admitted From:</label>
						<input class="cInput" type="text" size="20" id="admitted_from" name="admitted_from" value="<?php echo $bioData->admitted_from; ?>" />
                        <br/><br/>
                        
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
                        <?php } ?>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

