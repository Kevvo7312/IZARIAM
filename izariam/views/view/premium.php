<div id="mainview">
    <h1>Izariam PLUS</h1>
    <div id="premiumOffers" class="contentBox01h">
        <h3 class="header">Premium Offers</h3>
        <div class="content">
            <p>Izariam PLUS will allow you to lead your empire to wealth and prosperity, with a little help of Ambrosia, the food of the gods, and then your advisers and workers will pleasantly surprise you with the quality of the work! You can choose following bonuses:</p>
            <table class="TableHoriMax Account">
                <tr>
                    <th class="feature">&nbsp;</th>
                    <th class="duration">Duration</th>
                    <th class="cost">Cost</th>
                    <th class="buy">&nbsp;</th>
                </tr>
                <tr class="account">
                    <td class="feature" rowspan="2">
                      <h4>Premium account</h4>
                      <p>With the Izariam PLUS premium account you will receive the improved reviews and full control over the island empire, plus much more.</p>
                      <a href="<?=$this->config->item('base_url')?>game/premiumDetails/">.... more about <b>Izariam PLUS premium</b></a>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">10&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Ambrosia" /></td>
                    <td class="buy" rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 10){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/account/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>
                <tr>
<?if($this->Player_Model->user->premium_account > 0){?>
                    <td class="active" colspan="3"><br>active&nbsp;<?=premium_time($this->Player_Model->user->premium_account-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>
            </table>

            <table class="TableHoriMax">
                <tr>
                    <th class="feature">Feature</th>
                    <th class="duration">Duration</th>
                    <th class="cost">Cost</th>
                    <th class="buy">&nbsp;</th>
                </tr>

                <tr class="woodbonus">
                    <td class="feature" rowspan="2">
                      <h4>Wood bonus - <b>Steam Saw</b></h4>
                      <p>You will produce <b>20% more buildingmaterial</b> on all islands when you use your steam saw.</p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">10&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="woodbonus" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 10){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/wood/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_wood > 0){?>
                    <td class="active" colspan="3"><br>active<?=premium_time($this->Player_Model->user->premium_wood-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

                <tr style="background-image:url(<?=$this->config->item('style_url')?>skin/premium/table_border_2.gif); background-repeat:no-repeat; background-position:center;">
                    <td colspan=4></td>
                </tr>

                <tr class="marblebonus">
                    <td class="feature" rowspan="2">
                      <h4>Marble bonus - Steam Hammer</h4>
                      <p>All your islands will produce <b>20% more marble.</b> while you use your Steam Hammer.</p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">8&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Marble bonus" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 8){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/marble/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_marble > 0){?>
                    <td class="active" colspan="3"><br>active<?=premium_time($this->Player_Model->user->premium_marble-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

                <tr style="background-image:url(<?=$this->config->item('style_url')?>skin/premium/table_border_2.gif); background-repeat:no-repeat; background-position:center;">
                    <td colspan=4></td>
                </tr>

                <tr class="sulfurbonus">
                    <td class="feature" rowspan="2">
                      <h4>Sulphur bonus - Steam Sulphur Paddle Wheel</h4>
                      <p>All your islands will produce <b>20% more sulphur</b> when you use your steam paddle wheel.</p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">3&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Sulphur bonus" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 3){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/sulfur/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough¸!<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_sulfur > 0){?>
                    <td class="active" colspan="3"><br>active&nbsp;<?=premium_time($this->Player_Model->user->premium_sulfur-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

                <tr style="background-image:url(<?=$this->config->item('style_url')?>skin/premium/table_border_2.gif); background-repeat:no-repeat; background-position:center;">
                    <td colspan=4></td>
                </tr>

                <tr class="crystalbonus">
                    <td class="feature" rowspan="2">
                      <h4>Crystal bonus - Steam Crystal Drill</h4>
                      <p>All your islands will produce <b>20% more crystal</b> while you use your steam crystal drill.</p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">5&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Steam Crytal Drill" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 5){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/crystal/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_crystal > 0){?>
                    <td class="active" colspan="3"><br>active&nbsp;<?=premium_time($this->Player_Model->user->premium_crystal-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

                <tr style="background-image:url(<?=$this->config->item('style_url')?>skin/premium/table_border_2.gif); background-repeat:no-repeat; background-position:center;">
                    <td colspan=4></td>
                </tr>

                <tr class="winebonus">
                    <td class="feature" rowspan="2">
                      <h4>Wine bonus - Steam Wine Press</h4>
                      <p>All your islands will produce <b>20% more wine</b> while you use your wine press.</p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">3&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Steam Wine Press" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 3){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/wine/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_wine > 0){?>
                    <td class="active" colspan="3"><br>active&nbsp;<?=premium_time($this->Player_Model->user->premium_wine-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

                <tr style="background-image:url(<?=$this->config->item('style_url')?>skin/premium/table_border_2.gif); background-repeat:no-repeat; background-position:center;">
                    <td colspan=4></td>
                </tr>

                <tr class="savecapacityBonus">
                    <td class="feature" rowspan="2">
                      <h4>Save capacity bonus - Padlock</h4>
                      <p>All goods in all your warehouses will gain <b>100% increased theft security.<b></p>
                    </td>
                    <td class="duration">7&nbsp;Days.</td>
                    <td class="cost">14&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Save capacity bonus" /></td>
                    <td class="buy"  rowspan="2">
<?if($this->Player_Model->user->ambrosy >= 14){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/capacity/" class="button" title="Buy">Buy now</a>
        </div>
<?}else{?>
                      <a class="notenough" href="<?=$this->config->item('base_url')?>game/premiumPayment/">not enough<br><span class="buyNow">Buy now</span></a>
<?}?>
                    </td>
                </tr>

                <tr>
<?if($this->Player_Model->user->premium_capacity > 0){?>
                    <td class="active" colspan="3"><br>active&nbsp;<?=premium_time($this->Player_Model->user->premium_capacity-time())?></td>
<?}else{?>
                    <td class="inactive" colspan="3">inactive</td>
<?}?>
                </tr>

            </table>
        </div>
        <div class="footer"></div>
    </div>
</div>