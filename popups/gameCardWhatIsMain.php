<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>About Toontown Game Cards</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
    <script type="text/javascript">
    <!--
        
    
    
    var logs=new Array();
    var logsi=0;

    function logit()
    {
        
        var a ="";

        for (var i=0; i<arguments.length; i++) {
          if (i%2 == 0) {
            // Name
            a+=escape(arguments[i]);
            a+= "=";
          } else {
            // Value
            a+=escape(arguments[i]);
            a+=((i+1)!=arguments.length)?"&":"";
          }

        }

      var s="./shared/www/collect.php?deployment=US&rand="+Math.random()+"&"+a;
      var lognum = ++logsi;
      logs[lognum%9]=new Image();
      logs[lognum%9].src=s;
    }
        //-->
    </script>

  <script type="text/javascript">
<!--

function popWin (name) {

  logit("NAME", "CLICKTHRU-POPUP", "t", name);
  
  if (name == "WHATISGAMECARD") {
    window.open("./popups/gameCardWhatIsMain.php","whatisgamecard","width=700,height=450,resizable=0");
  } else if (name == "GAMECARDHELP") {
    window.open("./popups/gameCardHelpFrameset.html","gamecardhelp","width=518,height=420,resizable=1");
  } else if (name == "WHATISCOGBUCKS") {
    window.open("./popups/cogBucksWhatIsMain.php","whatiscogbucks","width=700,height=450,resizable=0");
  } else if (name == "WHATISGUESTPASS") {
    window.open("./popups/guestPassWhatIsMain.php","whatisguestpass","width=700,height=450,resizable=0");
  } else if (name == "WHATISSONYCDROM") {
    window.open("./popups/sonyCDWhatIsMain.php","whatissonycdrom","width=710,height=450,resizable=0");
  } else if (name == "FINDGAMECARD") {
    window.open("http://www.usa.att.com/webcents/disneystoontown_home.jsp","findgamecard","resizable=1,scrollbars=1,menubar=1,toolbar=1,location=1,status=1,directories=1");
  }


}

function popNews(url) {
  _news_popup = window.open("/frontPageArticle.php?articleID=" + url, "news","width=470,height=400,resizable=0,scrollbars=1");
  _news_popup.focus();
}

//-->
</script>

  </head>
<body id='us' onLoad="" onUnload=""  bgcolor="#ffffff" style="margin-top:0;margin-bottom:0;" >

<table cellpadding="10" cellspacing="0" border="0">
  <tr>
    <td><a name="top">
      <img src="/shared/images/billboards/gameCards.gif" width="193" height="222" alt="" border="0">
    </td>
    <td>

      <img src="/shared/images/headers/aboutGameCards.gif" width="432" height="32" alt="" border="0">
      <br><br>

      <font face="arial, verdana, helvetica" size="2">

        <b>What is a Toontown Game Card?</b><br>

        The Toontown Game Card is a part of our retail CD-ROM package. It�s the very same game available for download online today!

        <p/>


        <b>What do I get with a Game Card?</b><br>

        With each Game Card you get one month of play in Disney�s Toontown Online.

        <p/>

        <b>Where can I purchase a Game Card?</b><br>

        Toontown Game Cards are available at Target, Best Buy, and FYE stores near you. Contact your local retailer for available inventory.

        <p/>

        <b>Why Would I Want One?</b><br>

        The Toontown retail package provides access to Disney�s Toontown Online without the use of a credit card.  If you have a slow connection to the Internet, the retail package is also for you.  You can use the included installation CD-ROM for fast and easy setup!


      </font>
    </td>
  </tr>

  <tr align="left">
    <td>
    </td>
    <td align="left"><a href="javascript:popWin('GAMECARDHELP'); javascript:window.close();"><font face="arial, verdana, helvetica" size="2">More Information...</font></a></td>
  </tr>


  <tr align="center">
    <td colspan="2" align="center"><a href="javascript:window.close()"><img src="/shared/images/button_close.gif" width="127" height="31" alt="" border="0"></a></td>
  </tr>


</table>

</body></html>
