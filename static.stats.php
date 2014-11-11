<?php
    if(!isset($title)) {
        $title = 'Longform: Life & Liberty';
    };
?>

<script type='text/javascript'>
    var _sf_async_config={};
    /** CONFIGURATION START **/
    _sf_async_config.uid = 21057;
    _sf_async_config.domain = 'deseretnews.com';
    _sf_async_config.title = "<?php echo $title; ?>;"
    _sf_async_config.useCanonical = true;
    _sf_async_config.sections = '{$page->subNavSection|escape}';
    _sf_async_config.authors = 'Lois M. Collins and Jeffrey D. Allred';
    /** CONFIGURATION END **/
    (function(){
        function loadChartbeat() {
            window._sf_endpt=(new Date()).getTime();
            var e = document.createElement('script');
            e.setAttribute('language', 'javascript');
            e.setAttribute('type', 'text/javascript');
            e.setAttribute('src',
                (('https:' == document.location.protocol) ? 'https://a248.e.akamai.net/chartbeat.download.akamai.com/102508/' : 'http://static.chartbeat.com/') +
                    'js/chartbeat.js');
            document.body.appendChild(e);
        }
        var oldonload = window.onload;
        window.onload = (typeof window.onload != 'function') ?
            loadChartbeat : function() { oldonload(); loadChartbeat(); };
    })();
</script>
<!-- Begin comScore Tag -->
<script>
    var _comscore = _comscore || [];
    _comscore.push({ c1: '2', c2: '16033947' });
    (function() {
        var s = document.createElement('script'), el = document.getElementsByTagName('script')[0]; s.async = true;
        s.src = (document.location.protocol == 'https:' ? 'https://sb' : 'http://b') + '.scorecardresearch.com/beacon.js';
        el.parentNode.insertBefore(s, el);
    })();
</script>
<noscript>
    <img src='http://b.scorecardresearch.com/p?c1=2&c2=16033947&cv=2.0&cj=1' />
</noscript>
<!-- End comScore Tag -->

<!-- Quantcast Tag -->
<script type='text/javascript'>
    var _qevents = _qevents || [];

    (function() {
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == 'https:' ? 'https://secure' : 'http://edge') + '.quantserve.com/quant.js';
        elem.async = true;
        elem.type = 'text/javascript';
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
    })();

    _qevents.push({
        qacct:'p-KUMT4fYgcdEeg',
        labels:'ddmnetwork.news.deseretnews.links'
    });
</script>

<noscript>
    <div style='display:none;'>
        <img src='//pixel.quantserve.com/pixel/p-KUMT4fYgcdEeg.gif?labels=ddmnetwork.news.deseretnews.links' border='0' height='1' width='1' alt='Quantcast'/>
    </div>
</noscript>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-25484401-1']);
    _gaq.push(['_setDomainName', 'deseretnews.com']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<?php
if(isset($dc_beacon)) {
    echo $dc_beacon;
}
?>
<!-- SiteCatalyst code version: H.21.
Copyright 1996-2010 Adobe, Inc. All Rights Reserved
More info available at http://www.omniture.com -->
<script type="text/javascript" src="/js/s_code_H24.js?ver=38224"></script>
<script type="text/javascript"><!--
    /* You may give each page an identifying name, server, and channel on
     the next lines. */
    s.pageName="DN/interactive/<?php echo $title; ?>";
    s.server="0";
    s.channel="interactive";
    s.zip="84110";
    s.events="event1";
    s.prop1="interactive";
    s.prop2="DN/interactive";
    s.prop3="DN/interactive/<?php echo $title; ?>";
    s.prop6="765642227";
    s.prop7="<?php echo $title; ?>";
    s.prop10="Wire";
    s.prop11="<?php echo $title; ?>";
    s.prop43="news";
    s.prop23=document.domain;
    s.prop24=document.location;
    s.prop49="DN/interactive/<?php echo $title; ?>";
    s.evar3="Deseret News";
    s.evar4="DN/interactive/<?php echo $title; ?>";

    /************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
    var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript" type="text/javascript"><!--
    if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
    //--></script><noscript><a href="http://www.omniture.com" title="Web Analytics"><img
            src="http://mngi.112.2o7.net/b/ss/mngidmn,ddmdn/1/H.24--NS/0"
            height="1" width="1" border="0" alt="" /></a></noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.21. -->
<!-- End Quantcast tag -->
<script type="text/javascript">
    var _vrq = _vrq || []; _vrq.push(['id', 157]); _vrq.push(['automate', true]); _vrq.push(['track', function(){}]); (function(d, a){
        var s = d.createElement(a),
            x = d.getElementsByTagName(a)[0];
        s.async = true;
        s.src = 'http://a.visualrevenue.com/vrs.js'; x.parentNode.insertBefore(s, x);
    })(document, 'script');
</script>
