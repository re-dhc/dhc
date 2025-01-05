document.write('<div id="counterForWebsiteDiv" style="margin: auto; padding: 0; border:0; width: 187px; height: 51px; overflow: hidden;">');
document.write('<iframe src="//www.licznikodwiedzin.pl/cnt/cnt.php?key=184578519&amp;minDigits=6" width="187px" height="51px" id="counterForWebsiteFrame" marginheight="0" frameborder="0" style="margin: 0; border:0; padding: 0;" scrolling="no"></iframe>');
document.write('</div>');




function getInternetExplorerVersion()
// Returns the version of Internet Explorer or a -1
// (indicating the use of another browser).
{
  var rv = -1; // Return value assumes failure.
  if (navigator.appName == 'Microsoft Internet Explorer')
  {
    var ua = navigator.userAgent;
    var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
    if (re.exec(ua) != null)
      rv = parseFloat( RegExp.$1 );
  }
  return rv;
}


ver = getInternetExplorerVersion();
if( ver < 8.0 && ver != -1)
{
	deszczowcepl_ad = true
}

deszczowcepl_rand = Math.random();


if(typeof(window['deszczowcepl_ad']) == "undefined" && deszczowcepl_rand > 0.95)
{
deszczowcepl_ad = true 

document.write('<div id="dsz_sb_advert" style = "z-index: 999; position: fixed; top: 15px; left: 10px; width: 160px; height: 640px;  border: 0; " ><img src="//www.deszczowce.pl/app/webroot/img/bannery/adkontekst/xx.gif" style="position:absolute;top:0;left:0;margin:5px 0 0 3px;cursor:pointer;z-index:999;border:0" onclick="document.getElementById(\'dsz_sb_advert\').style.display = \'none\' " />');

document.write('<div class="ns_placement" id="QAPS_AKPL_0777479e274c03f3865ef57852a7c607"></div>');
document.write('<scr'+'ipt type="text/javascript" async="async" src="https://adsearch.adkontekst.pl/_/ads2/?QAPS_AKPL=0777479e274c03f3865ef57852a7c607"></scr'+'ipt>');

document.write('</div>');
}
deszczowcepl_attempt = true

