   <div style="width: 100%; height: 350px;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <!--<div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Patient Bio Data</span>
                </div>-->
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px; width: 30em">
						<?php echo form_open('PatientBioDataController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="drug_name">Drug Name:</label>
						<input class="cInput" type="text" size="50" id="drug_name" name="drug_name" />
                        <br/>
						<br/>
						<label class="cLabel" for="dose">Dose:</label>
						<input class="cInput" type="text" size="20" id="dose" name="dose" />
                        <br/>
						<br/>
						<label class="cLabel" for="route">Route:</label>
						<input class="cInput" type="text" size="50" id="route" name="route" />
                        <br/>
						<br/>
						<label class="cLabel" for="start_date">Start Date:</label>
						<input class="cInput" type="text" size="50" id="start_date" name="start_date" />
                        <br/>
						<br/>
						<label class="cLabel" for="end_date">End Date:</label>
						<input class="cInput" type="text" size="50" id="end_date" name="address" />
                        <br/>
						<br/>
						<label class="cLabel" for="prescribed_by">Prescribed By:</label>
						<input class="cInput" type="text" size="20" id="prescribed_by" name="prescribed_by" />
                        <br/>
						<br/>
						<label class="cLabel" for="cancelled_by">Cancelled By:</label>
						<input class="cInput" type="text" size="20" id="cancelled_by" name="cancelled_by" />
                        <br/>
						<br/>
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 
