<h2><?=$this->lang->line('welcome_title')?></h2>
<div class="txt">
	<p><?=$this->lang->line('welcome_text')?></p>
	<div style="display:block; width:452px; height:250px; background-image: url('<?=$this->config->item('style_url')?>img/trailer-img.jpg')" id="fplayer">
 
  </div>
  <!-- this will install flowplayer inside previous A- tag. -->
  
  <script type="text/javascript" src="../design/js/flowplayer-3.2.13.min.js"></script>
  <link rel="stylesheet" type="text/css" src="../design/css/style1.css">
    
    <script>
      flowplayer("fplayer", {
      src: "../design/vid/flowplayer-3.2.18.swf",
      wmode: "transparent"}, {
      clip:  {
      autoPlay: false,
      autoBuffering: true
      },
      playlist: [{
      url: '../design/vid/Ikariam_trailer.flv',
      duration: 40
      }],
      plugins: { // load one or more plugins
      controls: { // load the controls plugin

      // always: where to find the Flash object
      url: '../design/vid/flowplayer.controls-3.2.16.swf',

      // now the custom options of the Flash object
      playlist: false,
      // backgroundColor: '#aedaff',
      opacity: 0.7,
      backgroundGradient: 'transparent',
      backgroundColor: 'transparent',
      tooltips: { // this plugin object exposes a 'tooltips' object
      buttons: true,
      fullscreen: 'Enter Fullscreen mode'
      }
      }
      },
      // set an event handler in the configuration
      onFinish: function() {

      }

      });
    </script>

  </div>
<p id="registerForFree" ><?=$this->lang->line('link_playnow_text')?></p>