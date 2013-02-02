   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
						<?php echo form_open('HistoryController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" />
						<br/><br/>
						<label class="cLabel" for="presenting_complaint">Presenting Complaint:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="presenting_complaint" name="presenting_complaint"></textarea>
                        <br/><br/>
						<label class="cLabel" for="hopi">HOPI:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="hopi" name="hopi"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="past_history">Past History:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="past_history" name="past_history"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="active_problems">Active Problems:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="active_problems" name="active_problems"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="drug_allergies">Drug Allergies:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="drug_allergies" name="drug_allergies"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="bleeding_disorders">Bleeding Disorders:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="bleeding_disorders" name="bleeding_disorders"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="family_history">Family History:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="family_history" name="family_history"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="personal_history">Personal History:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="personal_history" name="personal_history"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="provisional_diagnosis">Provisional Diagnosis:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="provisional_diagnosis" name="provisional_diagnosis"></textarea>
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
   
 

