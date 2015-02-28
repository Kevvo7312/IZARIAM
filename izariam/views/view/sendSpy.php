<div id="mainview">		
    <div class="buildingDescription">
        <h1>Send Spy</h1>
        <p>Send spies into cities of other players for reporting of information. As soon as the spy has got into city, you can give the spy a task.<br /><br />Consider that <strong>there is always</strong> a risk that the spy can be exposed<strong> and this will be revealed to other players  diplomatic advisor</strong>.</p>
    </div>
<?
    $x1 = $this->Player_Model->now_island->x;
    $x2 = $this->Island_Model->island->x;
    $y1 = $this->Player_Model->now_island->y;
    $y2 = $this->Island_Model->island->y;
    $time = $this->Data_Model->spy_time_by_coords($x1,$x2,$y1,$y2);

    $to_position = $this->Data_Model->get_position(14, $this->Data_Model->temp_towns_db[$param1]);
    $to_text = 'pos'.$to_position.'_level';
    $to_level = ($to_position > 0) ? $this->Data_Model->temp_towns_db[$param1]->$to_text : 0;
    $risk = $this->Data_Model->spy_risk_by_mission(1)+(5*$this->Data_Model->temp_towns_db[$param1]->spyes)+(2*$to_level)-(2*$this->Data_Model->temp_towns_db[$param1]->pos0_level)-(2*$this->Player_Model->levels[$this->Player_Model->town_id][14]);
    $risk = ($risk < 5) ? 5 : $risk;
?>
    
    <form  action="<?=$this->config->item('base_url')?>actions/spyes/send/<?=$this->Island_Model->island->id?>/<?=$param1?>/"  method="POST">
        <div class="contentBox01h" id="sendSpy">
            <h3 class="header">Spy mission</h3>
            <div class="content">
                <p class="desc">Your spy will try to get into the city of &nbsp;<?=$this->Data_Model->temp_towns_db[$param1]->name?>. <?=$this->Data_Model->temp_towns_db[$param1]->name?> if at level 3 or greater will be easier for the spy. Large cities are easier for spies to get into and there is less risk of exposure.</p>
		<div class="costs"><span class="textLabel">Cost: </span>30</div>
                <div class="risk"><span class="textLabel">Risk of exposure:</span>
                    <div title="Risk of exposure<?=$risk?>%" class="statusBar">
                        <div style="width: <?=$risk?>%" class="bar"></div>
                    </div>
                    <div class="percentage"><?=$risk?>%</div>
                </div>
                <hr>
                <div id="missionSummary">
                    <div class="common">
                        <div class="journeyTarget" title="Other players city"><span class="textLabel">Other players city: </span><?=$this->Data_Model->temp_towns_db[$param1]->name?></div>
                        <div class="journeyTime" title="Journey time"><span class="textLabel">Journey time: </span><?=format_time($time)?></div>
                    </div>
                </div>
                <div class="centerButton">
                    <input id="submit" class="button" type="submit" value="Send">
                </div>
            </div>
            <div class="footer"></div>
        </div>
    </form>
</div>