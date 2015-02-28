<?php
/*
 * Project: iZariam
 * Edited: 11/02/2012
 * By: ZZJHONS
 * Info: zzjhons@gmail.com
 */
?>
<?switch ($this->Island_Model->island->trade_resource) {
    case 1:
        $trade_resource = 'wine';
        break;
    case 2:
        $trade_resource = 'marble';
        break;
    case 3:
        $trade_resource = 'glass';
        break;
    case 4:
        $trade_resource = 'sulfur';
        break;
}?>
<?if ($this->Player_Model->research->res2_3 == 0){?>
<div id="mainview">
    <div class="buildingDescription" style="background:url(<?=$this->config->item('style_url')?>skin/img/island/resource_<?=$trade_resource?>.gif) no-repeat right 10px; min-height:180px;">
        <h1><?=$this->Data_Model->island_building_by_resource($this->Island_Model->island->trade_resource)?></h1>
        <p>For the extraction of this resource you need to research Wealth!</p>
    </div>
</div>
<?}else{?>
<?
    $plus_text = 'plus_'.$this->Data_Model->resource_class_by_type($this->Island_Model->island->trade_resource);
    $cost = $this->Data_Model->island_cost($this->Island_Model->island->trade_resource, $this->Island_Model->island->trade_level);
    $peoples = floor($this->Player_Model->now_town->peoples);
    $all = $this->Player_Model->now_town->peoples + $this->Player_Model->now_town->tradegood;
    $max = ($cost['workers'] < $all) ? $cost['workers'] : $all;
    $max = floor($max);
    $over_max = 0;
    if ($this->Player_Model->research->res2_5 > 0 and $all >= $max)
    {
        $over_max = $max + $cost['workers']*0.5;
        $over_max = ($over_max < $all) ? $over_max : $all;
        $over_max = floor($over_max);
    }
    $production = $this->Player_Model->tradegood_production[$this->Player_Model->town_id]*3600;
?>
<div id="mainview">
    <div class="buildingDescription" style="background:url(<?=$this->config->item('style_url')?>skin/img/island/resource_<?=$trade_resource?>.gif) no-repeat right 10px; min-height:180px;">
        <h1><?=$this->Data_Model->island_building_by_resource($this->Island_Model->island->trade_resource)?></h1>
        <p></p>
    </div>

    <?php
        $this->load->helper('form');
        $attributes = array('id' => 'setWorkers');
        echo form_open('actions/workers/tradegood/'.$this->Island_Model->island->id, $attributes);
    ?>
        <div id="setWorkersBox" class="contentBox">
            <h3 class="header"><span class="textLabel">Assign Workers</span></h3>
            <div class="content">
                <ul>
                    <li class="citizens"><span class="textLabel">Граждане: </span><span class="value" id="valueCitizens"><?=$peoples?></span></li>
                    <li class="workers"><span class="textLabel">Работников: </span><span class="value" id="valueWorkers"><?=number_format($this->Player_Model->now_town->tradegood)?></span></li>
                    <li class="gain" title="Производство:<?=number_format($production)?>" alt="Производство:<?=number_format($production)?>">
                        <span class="textLabel">Capacity : </span>
                        <div id="gainPoints">
                            <div id="resiconcontainer">
        <img id="resicon" src="<?=$this->config->item('style_url')?>skin/resources/icon_<?=resource_icon($this->Island_Model->island->trade_resource)?>.gif" width="25" height="20">
                            </div>
                        </div>
                        <div class="gainPerHour">
                            <span id="valueResource" >+<?=number_format($production)?></span> <span class="timeUnit">per Hour</span>
                        </div>
                    </li>
                    <li class="costs">
                        <span class="textLabel">Income of the town: </span>
                        <span id="valueWorkCosts" class="negative"><?=floor($this->Player_Model->saldo[$this->Player_Model->town_id])?></span>
                        <img src="<?=$this->config->item('style_url')?>skin/resources/icon_gold.gif" title="Золото" alt="Золото">
                        <span class="timeUnit">per Hour</span>
                    </li>
                </ul>
                <div id="overchargeMsg" class="status nooc ocready oced">Overcharge!</div>
                <div class="slider" id="sliderbg">
                    <div class="actualValue" id="actualValue"></div>
                    <div class="overcharge" id="overcharge"></div>
                    <div id="sliderthumb"></div>
                </div>
                <a class="setMin" href="#reset" onClick="sliders['default'].setActualValue(0); return false;" title="нет рабочих"><span class="textLabel">minutes</span></a>
                <a class="setMax" href="#max" onClick="sliders['default'].setActualValue(<?=$max?>); return false;" title="макс. число рабочих"><span class="textLabel">Maximum</span></a>

                <?php $data = array(
                          'name'        => 'tw',
                          'id'          => 'inputWorkers',
                          'class'   => 'textfield',
                          'maxlength'        => '4',
                          'autocomplete'        => 'off',
                        );
                echo form_input($data);

                $data = array(
                        'id'        => 'inputWorkersSubmit',
                        'class'        => 'button',
                        'value'        => 'Confirm',
                    );
                echo form_submit($data); ?>
            </div>
            <div class="footer"></div>
        </div>
    </form>

    <div id="resourceUsers" class="contentBox">
        <h3 class="header"><span class="textLabel">Other players on this island</span></h3>
        <div class="content">
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th>Player                        </th>
                        <th>Town                    </th>
                        <th>Level                    </th>
                        <th>Workers                    </th>
                        <th>Donated                        </th>
                        <th>Actions                 </th>
                    </tr>
                </thead>
                <tbody>

<? for ($i = 0; $i <= 15; $i++){?>
<?if (isset($this->Island_Model->towns[$i])){?>
    <?if($this->Player_Model->user->id != $this->Island_Model->users[$i]->id){?>
    <tr class="alt avatar ">
    <?}else{?>
    <tr class="alt own avatar ">
    <?}?>
        <td class="ownerName"><?=$this->Island_Model->users[$i]->login?></td>
        <td class="cityName"><?=$this->Island_Model->towns[$i]->name?></td>
        <td class="cityLevel">Level <?=$this->Island_Model->towns[$i]->pos0_level?></td>
        <td class="cityWorkers"><?=$this->Island_Model->towns[$i]->tradegood?>&nbsp;Workers</td>
        <td class="ownerDonation"><?=$this->Island_Model->towns[$i]->tradegood_wood?> <img src="<?=$this->config->item('style_url')?>skin/resources/icon_wood.gif" width="25" height="20" alt="Стройматериалы" /></td>
        <?if($this->Player_Model->user->id != $this->Island_Model->users[$i]->id){?>
        <td class="actions"><a href="<?=$this->config->item('base_url')?>game/sendIKMessage/<?=$this->Island_Model->towns[$i]->user?>/"><img src="<?=$this->config->item('style_url')?>skin/interface/icon_message_write.gif" alt="Создать сообщение" /></a></td>
        <?}?>
    </tr>
<?}?>
<?}?>

                </tbody>
            </table>
        </div>
        <div class="footer"></div>
    </div>
</div>

<script type="text/javascript">
    create_slider({
        dir : 'ltr',
        id : "default",
        maxValue : <?=floor($max)?>,
        overcharge : <?=(($over_max-$max >= 0) ? $over_max-$max : 0)?>,
        iniValue : <?=floor($this->Player_Model->now_town->tradegood)?>,
        bg : "sliderbg",
        thumb : "sliderthumb",
        topConstraint: -10,
        bottomConstraint: 344,
        bg_value : "actualValue",
        bg_overcharge : "overcharge",
        textfield:"inputWorkers"
    });
    Event.onDOMReady(function() {
    var slider = sliders["default"];
        var res = new resourceStack({
            container : "resiconcontainer",
            resourceicon : "resicon",
            width : 140
        });
        res.setIcons(Math.floor(slider.actualValue/(1+0.05*slider.actualValue)));
        slider.subscribe("valueChange", function() {
            res.setIcons(Math.floor(slider.actualValue/(1+0.05*slider.actualValue)));
        });
        var startSlider = slider.actualValue;
        var valueWorkers = Dom.get("valueWorkers");
        var valueCitizens = Dom.get("valueCitizens");
        var valueResource = Dom.get("valueResource");
        var valueWorkCosts = Dom.get("valueWorkCosts");
        var inputWorkersSubmit = Dom.get("inputWorkersSubmit");
        slider.flagSliderMoved =0;
        slider.subscribe("valueChange", function() {
            var startCitizens = <?=floor($this->Player_Model->now_town->peoples)?>;
            var startResourceWorkers = <?=floor($this->Player_Model->now_town->tradegood)?>;
            var startIncomePerTimeUnit = <?=floor($this->Player_Model->saldo[$this->Player_Model->town_id])?>;
            this.flagSliderMoved = 1;
            valueWorkers.innerHTML = locaNumberFormat(slider.actualValue);
            valueCitizens.innerHTML = locaNumberFormat(startCitizens+startResourceWorkers - slider.actualValue);
            var valRes = <?=($this->Player_Model->$plus_text)?> * <?=(1-$this->Player_Model->corruption[$this->Player_Model->town_id])?> * (Math.min(<?=$cost['workers']?>, slider.actualValue) + Math.max(0, 0.25 * (slider.actualValue-<?=$cost['workers']?>)));
            valueResource.innerHTML = '+' + Math.floor(valRes);
            valueWorkCosts.innerHTML = startIncomePerTimeUnit  - 3*(slider.actualValue-startSlider);
        });
        slider.subscribe("slideEnd", function() {
            if (this.flagSliderMoved) {
                inputWorkersSubmit.className = 'buttonChanged';
            }
        });
    });
</script>
<?}?>