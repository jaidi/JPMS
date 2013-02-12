   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
						<?php 
							if (isset($dpn)){ ?>
						<?php echo form_open('DPN/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" value="<?php echo $dpn->almoner_number; ?>" />
						<br/>
						<br/>
						<label class="cLabel" for="pulse_rate">Pulse Rate:</label>
						<input class="cInput" type="text" size="20" id="pulse_rate" name="pulse_rate" value="<?php echo $dpn->pulse_rate; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="blood_pressure">Blood Pressure:</label>
						<input class="cInput" type="text" size="20" id="blood_pressure" name="blood_pressure" value="<?php echo $dpn->blood_pressure; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="respiratory_rate">Respiratory Rate:</label>
						<input class="cInput" type="text" size="20" id="respiratory_rate" name="respiratory_rate"  value="<?php echo $dpn->respiratory_rate; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="temperature">Temperature:</label>
						<input class="cInput" type="text" size="20" id="temperature" name="temperature"  value="<?php echo $dpn->temperature; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="cvp">CVP:</label>
						<input class="cInput" type="text" size="20" id="cvp" name="cvp"  value="<?php echo $dpn->cvp; ?>" />
                        <br/>
						<br/>
						<label class="cLabel" for="pain">Pain:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="pain" name="pain"  value="<?php echo $dpn->pain; ?>" >	
						</textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="problems">Problems:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="problems" name="problems" value="<?php echo $dpn->problems; ?>" >
						</textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="plan">Plan:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="plan" name="plan"  value="<?php echo $dpn->plan; ?>" >
						</textarea>
                        <br/>
						<br/>
						<label class="cLabel" for="action">Action:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="action" name="action" value="<?php echo $dpn->action; ?>" >
						</textarea>
                        <br/><br/>
                        <div >
                            <input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
                        </div>
                        </form>
                        <?php } ?>
					</div>
					
					<div id="accordion" style="margin: 10px; float:right; width:65%;">
						<h3>PGR Remarks</h3>
						<div>
							<div class="cAccordionContents">
								<?php echo form_open('DpnRemarksController/validateAndLoad/remark/pgr'); ?>
								<textarea class="cInputArea" style="width:600px" rows="5" cols="300" size="256" id="pgr_remarks" name="pgr_remarks"></textarea>
								<input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
								</form>
							</div>
						</div>
						<h3>SR Remarks</h3>
						<div>
							<div class="cAccordionContents">
								<?php echo form_open('DpnRemarksController/validateAndLoad/remark/sr'); ?>
								<textarea class="cInputArea" style="width:600px" rows="5" cols="300" size="256" id="sr_remarks" name="sr_remarks"></textarea>
								<input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
								</form>
							</div>
						</div>
						<h3>VS Remarks</h3>
						<div>
							<div class="cAccordionContents">
								<?php echo form_open('DpnRemarksController/validateAndLoad/remark/vs'); ?>
								<textarea class="cInputArea" style="width:600px" rows="5" cols="300" size="256" id="vs_remarks" name="vs_remarks"></textarea>
								<input type="submit" value="Enter" style="margin-bottom: 5px;" id="EnterButton"/><br />
								</form>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
   
 

