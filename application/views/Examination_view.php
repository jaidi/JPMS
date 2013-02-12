   <div style="width: 100%; height: 550px auto;" id="jqxWidget">
        <div
            id="mainDemoContainer">
            <div id="customWindow">
                <div id="customWindowContent" style="overflow: hidden; width:100%;">
                    <div style="margin: 10px; float:left; width: 25% auto">
                    	<?php 
							if (isset($examination)){ ?>
						<?php echo form_open('ExaminationController/validateAndLoad'); ?>
                        <label class="cLabel" for="almoner_number">Almoner Number:</label>
                        <input class="cInput" type="text" size="20" id="almoner_number" name="almoner_number" value = "<?php echo $examination->almoner_number; ?>" />
						<br/><br/>
						<label class="cLabel" for="gpe">GPE:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="gpe" name="gpe" value="<?php echo $examination->gpe; ?>"></textarea>
                        <br/><br/>
						<label class="cLabel" for="head">Head:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="head" name="head"value="<?php echo $examination->head; ?>" ></textarea>
                        <br/><br/>						
						<label class="cLabel" for="neck">Neck:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="neck" name="neck"value="<?php echo $examination->neck; ?>" ></textarea>
                        <br/><br/>						
						<label class="cLabel" for="thorax">Thorax:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="thorax" name="thorax" value="<?php echo $examination->thorax; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="abdomen">Abdomen:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="abdomen" name="abdomen" value="<?php echo $examination->abdomen; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="perineal">Perineal:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="perineal" name="perineal" value="<?php echo $examination->perineal; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="upper_limb">Upper Limb:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="upper_limb" name="upper_limb" value="<?php echo $examination->upper_limb; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="lower_limb">Lower Limb:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="lower_limb" name="lower_limb" value="<?php echo $examination->lower_limb; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="pr_pv">PR/PV:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="pr_pv" name="pr_pv" value="<?php echo $examination->pr_pv; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="proctosigmoidoscopy">Proctosigmoidoscopy:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="proctosigmoidoscopy" name="proctosigmoidoscopy" value="<?php echo $examination->proctosigmoidoscopy; ?>"></textarea>
                        <br/><br/>						
						<label class="cLabel" for="local">Local:</label>
						<textarea class="cInputArea" rows="5" cols="50" size="256" id="local" name="local" value="<?php echo $examination->local; ?>" ></textarea>
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
   
 

