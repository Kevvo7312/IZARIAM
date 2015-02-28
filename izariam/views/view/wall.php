<div id="mainview">
<?include_once('building_description.php')?>
<?$wall_data = $this->Data_Model->wall_data_by_level($this->Player_Model->now_town->pos14_level)?>
<p>The town wall protects your citizens against your enemies and the sun. Beware! Enemies will try to tear holes into your wall or to climb over it. Every level increases the resistance of your town wall.</P>

    <div class="contentBox01h">
        <h3 class="header">Information</h3>
        <div class="content">
        	<div class="bgWall">
        		<div id="wallInfoBox">
		        	<div class="infoBoxHeader"></div>
		        	<div class="infoBoxContent">
			        	<div class="weapon">
				        	<div class="weaponName">Ballistae</div>
				        	<span class="textLabel">Damage</span><b>12</b>
				        	<span class="textLabel">Accuracy</span>
				        	<div class="damageFocusContainer" title="30%">
				        		<div class="damageFocus" style="width: 30%;"></div>
				        	</div>
			        	</div>
			        	<span class="textLabel">Hit points</span><b><?=$wall_data['health']?></b><br/>
			        	<span class="textLabel">Armor</span><b><?=$wall_data['reservation']?></b><br/>

			        	<span class="textLabel">Garrison Limit</span><b><?=number_format($this->Player_Model->garisson_limit[$this->Player_Model->town_id])?></b><br/>
		        	</div>
		        	<div class="infoBoxFooter"></div>
	        	</div>
	        </div>
	    </div>
        <div class="footer"></div>
    </div>
</div>
