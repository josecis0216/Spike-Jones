<!-- /charlie_mp3player.tpl -->
{*
mp3 players, using html5
*}
<br />

 <audio style="width:640px" controls controlsList="nodownload" autoplay>
  <source src="{$SRC_IMG}" type="audio/mpeg">
Your browser does not support the audio element.
</audio> 

{html_head}
<link rel="stylesheet" type="text/css" href="{$CHARLIES_PATH|@cat:'charlies.css'}"> 
{/html_head}
