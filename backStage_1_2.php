<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><title>Backstage</title>
<meta name="robots" content="follow,noindex">
<meta http-equiv="imagetoolbar" content="no">
<link type="text/css" rel="stylesheet" href="./shared/include/css/global.css">
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

  <script type="text/javascript" src="http://a.disney.go.com/detect/scripts/master_flash_writer.js"></script>
    <script type="text/javascript">
        <!--
    headerPromoRight_Reg=new Image();
    headerPromoRight_Reg.src="/shared/images/topnav/hdrPromoRight_reg.gif";
    headerPromoRight_Over=new Image();
    headerPromoRight_Over.src="/shared/images/topnav/hdrPromoRight_over.gif";
    headerSubscribeRight_Reg=new Image();
    headerSubscribeRight_Reg.src="/shared/images/topnav/hdrSubscribeRight_reg.gif";
    headerSubscribeRight_Over=new Image();
    headerSubscribeRight_Over.src="/shared/images/topnav/hdrSubscribeRight_over.gif";
    headerTrialRight_Reg=new Image();
    headerTrialRight_Reg.src="/shared/images/topnav/hdrFreeTrial_reg.gif";
    headerTrialRight_Over=new Image();
    headerTrialRight_Over.src="/shared/images/topnav/hdrFreeTrial_over.gif";
    headerDownloadRight_Reg=new Image();
    headerDownloadRight_Reg.src="/shared/images/topnav/hdrDownloadRight_reg.gif";
    headerDownloadRight_Over=new Image();
    headerDownloadRight_Over.src="/shared/images/topnav/hdrDownloadRight_over.gif";

    function img_over(imgName){
      imgOn=eval(imgName + "_Over.src");
      document [imgName].src=imgOn;
    }
    function img_reg(imgName){
      imgOn=eval(imgName + "_Reg.src");
      document [imgName].src=imgOn;
    }
    -->
    </script>
    </head>
<body id='us' onLoad="" onUnload=""  bgcolor="#ff6633" style="margin-top:0;margin-bottom:0;" >

    <table width="770" cellspacing="0" cellpadding="0" border="0" align="center">
      <tr bgcolor="#FFAA88" height="50">
        <td colspan="2"><font face="arial,helvetica" size="3"><center><b>This is the Toontown Test Server.</b><br>
        If you are here by mistake, please <A href="http://play.toontown.com/">Play Toontown Here</a> instead.</font></td>
      </tr>
    </table>


    


  
    <table width="770" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center">
      <tr>
        <td colspan="5">
        <!--Begin Header-->
        <table cellspacing="0" cellpadding="0" border="0" align="center">
          <tr>
            <td><a href='./store/index.php'><img src="/shared/images/topnav/customTshirtPromo.gif" width="133" height="109" alt="Custom T-Shirt Promo" border="0"></a><br></td>
                      <td><a href="./news.php"><img src="/shared/images/topnav/hdrCenterLogo.gif" width="516" height="109" alt="Disney's Toontown Online" border="0"></a></td>

                          <td><a href="https://account.test.toontown.com/webPlay.php"><img name="headerPromoRight" src="/shared/images/topnav/hdrPromoRight_reg.gif" width="121" height="109" alt="Play Now!" border="0" onMouseover="img_over('headerPromoRight');" onMouseout="img_reg('headerPromoRight');"></a></td>

            
          
          </tr>
          <tr>
            <td colspan="3"><img src="/shared/images/topnav/hdrSepStrip.gif" width="770" height="23" alt="Are You Toon Enough?" border="0"></td>
          </tr>
        </table>
        <!--End Header-->
        </td>
      </tr>
      <tr>
          <td width="154" valign="top" align="center">
          <script type="text/javascript">
          <!--
            flashObj=new FlashObj(
              "/shared/images/flash/leftnav.swf?exitSignUpUrl=./news.php&amp;navXML=./shared/include/xml/nav.xml?v=4b&amp;username=&amp;baseplayurl=./&amp;baseaccounturl=https://account.test.toontown.com/&amp;exitSignUpHbx=leftnav_exitsignup&amp;baseHbx=&amp;memberServicesUrl=MEMBERSERVICES&amp;emailPrefUrl=./unavailableOnTestServer.php&amp;changePwdUrl=./unavailableOnTestServer.php&amp;memberInfoUrl=./unavailableOnTestServer.php&amp;billingInfoUrl=./unavailableOnTestServer.php&amp;", // swf
              "154", //width
              "1050", // height
              "#ffffff", // background
              "", // version
              "tt_nav", // id
              "menu=false"
              );
            flashObj.render();
          -->
          </script>
        </td>

     <td width="14" style="border-left:1px solid #000000;" rowspan="2">&nbsp;</td>
     <td width="434" rowspan="1" valign="top">
     <!--End Mid Content-->

<!-- START MIDDLE CONTENT -->
<table cellspacing="0" cellpadding="0" border="0" width="434">
  <tr>
    <td class="bold">BACKSTAGE</td>
    <td align="right" class="bold">2 of 2</td>
  </tr>
  <tr>
    <td colspan="2" class="txtSmall">Issue 1, February 20, 2003</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><img src="/shared/images/cogHQheader.jpg" width="353" height="215" alt="" border="0"><br><br></td>
  </tr>
  <tr>
    <td align="center" valign="top">
      <!-- START COLUMN 1 -->
      <table width="200" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">
            <p align="justify">
              Current Status Continued: Factories will not be simple 1-5 story buildings like the Cogs build on the streets, they will be complex arenas filled with traps, conveyor belts, doors, switches, and other surprises.

              <br><br>One of the goals of Cog HQ is to bring some new environments and gameplay challenges to the advanced player. Pictured above are some concept sketches for the building interiors around Cog HQ. We'd like to provide some areas outside battle that involve a little more action and strategy.
          </td>
        </tr>
      </table>
      <!-- START COLUMN 1 -->
    </td>
    <td align="center" valign="top">
      <!-- START COLUMN 2 -->
      <table width="200" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">
            <p align="justify">
              There will be more dynamic and interesting rooms inside Cog HQ that the Toons must navigate and battle through.

              <br><br>Hope you have enjoyed this first behind the scenes look at the Toontown development team. We're working hard to bring these new and exciting features to you - we think it will be worth the wait! We'll post more details about Cog HQ and other features we are cranking away on soon!

             <br><br><p align="left">- The Toontown Development Team
          </td>
        </tr>
      </table>
      <!-- END COLUMN 2 -->
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br><a href="backStage_1_1.php"><img src="/shared/images/previousButton.jpg" width="92" height="25" alt="" border="0"></a></td>
  </tr>
</table>
<!-- END MIDDLE CONTENT -->


    <!--End Mid Content-->
        </td>
        <td width="14" style="border-right:1px solid #000000;" rowspan="2">&nbsp;</td>
     <td width="154" rowspan="1" valign="top" align="center">
       <img src="/shared/images/rightnav/tt_tab_toonsworldunite.gif" width="154" height="15" alt="Toons of the World Unite!">
       <br>
       <script type="text/javascript">
       <!--
         flashObj=new FlashObj(
           "/shared/images/flash/topToons.swf?theDate=10092010&amp;topToonURL=/shared/images/dynamic/topToonImages/2010_10_09_small/&amp;imageBaseURL=/shared/images&amp;moreTopToonsURL=./topToons.php&amp;imageFileURL=/dynamic/topToonImages/2010_10_09_small/", // swf
           "154", //width
           "330", // height
           "#ffffff", // background
           "", // version
           "top_toons", // id
           "menu=false"
           );
         flashObj.render();
       -->
       </script>
       <br>
       <img src="/shared/images/castyourvote.gif" width="154" height="65" alt="Cast your VOTE!">
       <br>
       <script type="text/javascript">
       <!--
         flashObj=new FlashObj(
           "/shared/images/flash/poll_small.swf?basePollPath=/shared/www/&amp;pollId=446&amp;alreadyAnswered=false&amp;pollType=undefined", // swf
           "154", //width
           "208", // height
           "#ffffff", // background
           "", // version
           "poll_small", // id
           "menu=false"
           );
         flashObj.render();
       -->
       </script>
       <br>

      </td>
    </tr>
    <tr><td colspan="5"><img src="/shared/images/lines.jpg" width="770" height="12" alt="" border="0"></td></tr>
      <tr><td colspan="5" align="center">

<script type="text/javascript">
<!--
var legalFooterColor="#0000ff";
var legalFtrLine1="<div style='font-weight: bold;'>Disney's Toontown Online</div>";
var legalFtrOpts=["Member/Guest Services","./unavailableOnTestServer.php","Help","./faq/","Contact Us","http://apps.disneyblast.go.com/cgi-bin/mail/generic_mail.cgi?template=toontown/toonhelp.tpl"]
var legalFtrCpyRgt='<div style="font: verdana, arial, helvetica, sans-serif 1pt; color:#000000;"><a href="./memberAgreement.php">Member Agreements</a>&nbsp;|&nbsp;<a href="http://home.disney.go.com/guestservices/netiquette">House Rules</a><br>&copy; Disney. All rights reserved.</div>';
-->
</script>
<div id="tt_footer" align="center">
  <script type="text/javascript" src="http://a.disney.go.com/globalmedia/legal_footer/legalfooter.js"></script>
</div>
      </td></tr>
    </table>
  <!-- BEGIN DOL Web Analytics 1.0 -->
  <script type="text/javascript" src="http://aglobal.go.com/stat/dolWebAnalytics.js"></script>
  <script type="text/javascript">
    <!--
    cto=new CTO();
    cto.h.mlc='/Toontown/US/Beta/PROSPECT/';
    cto.h.pageName='_backStage_1_2';
    cto.registrationStatus='prospect';
    cto.genre='us';//country
    cto.account='toontown';
    cto.category='dgame';
    cto.site='tnt_beta';
    cto.siteSection='website';
    cto.pageName='backstage_1_2';
    cto.contentType='regular';
    cto.property='tnt';
    cto.track();
    -->
  </script>
  <!-- END DOL Web Analytics 1.0 -->
</body></html>
