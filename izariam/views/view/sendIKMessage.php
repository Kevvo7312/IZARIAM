<div id="mainview">
    <h1>Write message</h1>
    <p>Here you can write a message to other players or offer them a treaty, as long as you have already researched the various forms of treaties.</p>

    <div id="notice">
		<?php
		$this->load->helper('form');
		echo form_open("actions/messages/send/$param1");
		?>
            <div id="mailRecipient">
                <span class="maillabels"><label>Mail Receiver:</label></span>
                <span><?=$this->Data_Model->temp_users_db[$param1]->login?></span>
            </div>
            <div id="mailSubject">
                <span class="maillabels"><label for="treaties">Subject:</label></span>
                <span>
                    <select name="msgType" id="treaties">
                        <option value="1" selected="unselected">
Trade</option>
<option value="2" selected="selected">
Message</option>
<option value="3" selected="unselected">
Greeting</option>


                    </select>
                </span>
            </div>
            <span class="maillabels"><label for="text">Message:</label></span><br />
            <span>
			<?php $data = array(
						  'name'        => 'content',
						  'id'          => 'text',
						  'class'   => 'textfield',
						);
			echo form_textarea($data); ?>
			</span><br />
            <div id="nr_chars_div" style="display:none">Remaining&nbsp;<span id="nr_chars"></span>&nbsp;  Characters</div>
            <div class="centerButton">
				<?php $data = array(
							'class'        => 'button',
							'onclick'        => "return confirmIfNeccessary(document.getElementById('treaties').value,'Are you sure?')",
							'title'        => 'Send',
							'value'        => 'Send',
						);
				echo form_submit($data); ?>
            </div>
        </form>
    </div>
    <script type="text/javascript">
    function strLen(str) {
        var newStr = str.replace(/(\r\n)|(\n\r)|\r|\n/g,"\n");
        return newStr.length;
    }
    messagesThatNeedConfirm = new Array();
    messagesThatNeedConfirm[0] = 64;
    messagesThatNeedConfirm[1] = 70;
    messagesThatNeedConfirm[2] = 75;
    messagesThatNeedConfirm[3] = 76;
    messagesThatNeedConfirm[4] = 81;
    messagesThatNeedConfirm[5] = 87;
    messagesThatNeedConfirm[6] = 94;
    messagesThatNeedConfirm[7] = 93;
    messagesThatNeedConfirm[8] = 99;
    function confirmIfNeccessary(msgType,confirmText){
        var confirm = false;
        for (elem in messagesThatNeedConfirm) {
            if (messagesThatNeedConfirm[elem] == msgType){
                confirm = true;
            }
        }
        if (confirm == true){
            return window.confirm (confirmText);
        } else{
            return true;
        }

    };
    YAHOO.util.Event.addListener("text", "keyup", function() {
        var nr_chars = 8000-strLen(document.getElementById('text').value);
        if (nr_chars<0) {
            document.getElementById('nr_chars').innerHTML='<span style="color: #f00; font-weight: bold">' + nr_chars + '</span>';
        } else {
            document.getElementById('nr_chars').innerHTML=nr_chars;
        }
        document.getElementById('nr_chars_div').style.display='block';
    });
    </script>
</div>