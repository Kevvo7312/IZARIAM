<div id="mainview">
    <h1>Ikarium PLUS</h1>
    <div id="premiumAccountDetail" class="contentBox01h">
        <h3 class="header">Ikarium PLUS</h3>
        <div class="content">
            <p>Always being informed of all activities within your empire and having full control over your subordinates is a challenge for any good leader! Get hold of some useful features - with Ikariam PLUS!</p>
            <h4>Building Construction List</h4>

            <div>
                <a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_constructionlist.gif" title="Building Construction List">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_constructionlist.gif" width="274" height="139" alt="Building Construction List"><br/></a>
                <p>With the help of the building list, you can enter several buildings jobs for the same town, that are then completed one after the other</p>
<ul><li> Up to three additional buildings can be entered</li><li> Resources are only used up when the corresponding building job is started</li></ul>
            </div>
            <h4>Constructors Overview</h4>
            <div><a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_population.jpg" title="Constructors Overview">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_population.gif" width="300" height="139" alt="Constructors Overview"></a>
                <a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_resources.jpg" title="Constructors Overview">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_resources.gif" width="300" height="139" alt="Constructors Overview"></a>
                <p><strong>Get the ultimate town overview!</strong></br>With the builders overview, you get three new overviews of your empire's economy - get all the information on buildings, resources and subjects at a glance!</p>
                <ul><li> Immediately see what your subjects are working on</li><li> You can also see the satisfaction of your towns all on one list</li><li> You have access to an overview of all your towns warehouse statuses and the islands resource deposit levels</li><li> Direct links to all towns and their resource deposit levels</li><li> The levels of important buildings such as the town hall for all of your towns</li></ul>
            </div>
            <h4>Military Overview</h4>

            <div>
                <a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_military.jpg" title="Military Overview">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_military.gif" width="300" height="230" alt="Military Overview"></a>
                <p><strong>Use the improved overview for more control over your </br>armies!</strong></br> As commander-in-chief of your troops you can get an overview of your entire armies and fleets as well as their respective upkeep costs in the general section. </br>You also get an overview of troops that are stationed in your towns and about the armies that are stationed in towns you are occupying.</p>
                <ul><li> You can get a complete overview of your total available army</li><li> You can see where your troops are stationed and how many units you can take to the field.</li><li> You can see the total upkeep costs per hour sorted by unit type or in total.</li><li> You can also see what the biggest costs are within your armiy.</li><li> Statistics for land units and ships are available.</li></ul>
            </div>
            <h4>Research Overview</h4>
            <div><a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_research.jpg" title="Research Overview">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_research.gif" width="300" height="131" alt="Research Overview"></a>
                <p><strong>Spread knowledge throughout your kingdom even more quickly!</strong></br>With research overview you can effectively turn knowledge into power.</br>Get a complete overview of your expenditures.</p>
                <ul><li> You can view the academy levels and assigned scientists in all towns.</li><li> You can get an expense report for all scientists.</li><li> Direct links to all academies.</li></ul>
            </div>
            <h4>Diplomacy Overview</h4>
            <div>
                <a class="enlarge" href="<?=$this->config->item('style_url')?>skin/premium/overview_espionage.jpg" title="Diplomacy Overview">
                    <img src="<?=$this->config->item('style_url')?>skin/premium/thumb_overview_espionage.gif" width="300" height="140" alt="Diplomacy Overview"></a>
                <p><strong>Get information about friend or foe even more quickly!</strong></br>Accurate intelligence reports are vital for careful decisions during diplomatic relations as well as during war.</br>You will find everything you need in this overview.</p>
                <ul><li> You can see all active spies at a glance</li><li> You get an overview of your spies last missions, what they are currently doing and when they are going to be finished</li><li> There will also be a display of how the high risk of discovery is for all your spies</li><li> Direct links to the spies home buildings so that you can directly assign them to new missions</li></ul>
            </div>
            <div id="premiumOffers">

                <table class="TableHoriMax Account" style="clear:both;">
                    <tr>
                        <th class="feature">Feature</th>
                        <th class="duration">Duration</th>
                        <th class="cost">Cost</th>
                        <th class="buy">&nbsp;</th>
                    </tr>
                    <tr class="account">
                        <td class="feature" rowspan="2">
                            <h4>Izariam Premium Account</h4>
                            <p>Get all the above-mentioned overviews in just one package!</p>
                        </td>
                        <td class="duration">7&nbsp;Days.</td>
                        <td class="cost">10&nbsp;<img src="<?=$this->config->item('style_url')?>skin/premium/ambrosia_icon.gif" width="24" height="20" alt="Ambrosia"></td>
                        <td class="buy">
<?if($this->Player_Model->user->ambrosy >= 10){?>
        <div class="centerButton">
            <a href="<?=$this->config->item('base_url')?>actions/premium/account/" class="button" title="Buy now">Buy now</a>
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
            </div>
        </div>
        <div class="footer"></div>
    </div>
</div>