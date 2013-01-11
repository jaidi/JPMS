   <div style="width: 100%; height: 550px;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <!--<div id="customWindowHeader">
                    <span id="captureContainer" style="float: left">Patient Bio Data</span>
                </div>-->
                <div id="customWindowContent" style="overflow: hidden">
                    <div style="margin: 10px; width: 30em">
						<?php echo form_open('DpnController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/>
						<br/>
						<label class="cLabel" for="pulse_rate">Pulse Rate:</label>
						<input class="cInput" type="text" size="20" id="pulse_rate" name="pulse_rate" />
                        <br/>
						<br/>
						<label class="cLabel" for="blood_pressure">Blood Pressure:</label>
						<input class="cInput" type="text" size="20" id="blood_pressure" name="blood_pressure" />
                        <br/>
						<br/>
						<label class="cLabel" for="respiratory_rate">Respiratory Rate:</label>
						<input class="cInput" type="text" size="20" id="respiratory_rate" name="respiratory_rate" />
                        <br/>
						<br/>
						<label class="cLabel" for="temperature">Temperature:</label>
						<input class="cInput" type="text" size="20" id="temperature" name="temperature" />
                        <br/>
						<br/>
						<label class="cLabel" for="cvp">CVP:</label>
						<input class="cInput" type="text" size="20" id="cvp" name="cvp" />
                        <br/>
						<br/>
						<label class="cLabel" for="pain">Pain:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="pain" name="pain"></textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="problems">Problems:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="problems" name="problems"></textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="plan">Plan:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="plan" name="plan"></textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="action">Action:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="action" name="action"></textarea>
                        <br/><br/>
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

