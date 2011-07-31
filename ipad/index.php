<!DOCTYPE html>
<html manifest="cache.manifest">
<!--
    NYC.gov for Tablets
    David Huerta
    Reinvent NYC.gov Hackathon
-->
<head>
  <title>NYC.gov Mobile</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" />
  <meta name="viewport" content="user-scalable=no, width=device-width" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
  <link rel="stylesheet" href="styles/main.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
  <script type="text/javascript" src="scripts/yplgeo.js"></script>
  <script type="text/javascript">
    function BlockMove(event) {
      // Tell Safari not to move the window.
      event.preventDefault();
    }
  </script>
</head>
<body>
  <div data-role="page">
    <div data-role="header">
      <h1>NYC.gov Mobile</h1>
    </div>

    <div data-role="content">
      <h3 id="welcome">NYC alerts around your neighborhood:</h3>
      <div data-role="collapsible" data-collapsed="true" data-theme="e">
        <h3>Alerts for <?php echo date('l \t\h\e jS'); ?></h3>
        <ul>
          <li>G train being derpy again.</li>
          <li>Kayne West blogged.</li>
        </ul>
      </div>
      <div style="text-align:center;">
        <input id ="search_box" type="search"></input>
        <button type="button" data-inline="true" onClick="parent.location='search.php?keyword=bicycle%20lanes'">Search</button>
      </div>

      <h3>Common topics and searches:</h3>
      <ul data-role="listview" data-inset="true">
        <li><a href="search.php?keyword=jobs">Jobs</a></li>
        <li><a href="search.php?keyword=batman">Batman</a></li>
        <li><a href="search.php?keyword=parking%20tickets">Parking Tickets</a></li>
        <li><a href="search.php?keyword=bedbugs">Bedbugs</a></li>
      </ul>

      <h3>Highlights:</h3>
      <div class="ui-grid-b" data-theme="b">
          <div class="ui-block-a" data-theme="b">
            FDNY Firefighters put out fire caused by meddling kids.
          </div>
      </div>
    </div>

    <div style="text-align:center;" data-role="footer" data-position="fixed">
      <div data-role="controlgroup" data-type="horizontal" style="margin-top:15px;">
        <button type="button" data-type="horizontal" data-theme="a">Residents</button>
        <button type="button" data-type="horizontal" data-theme="a">Visitors</button>
        <button type="button" data-type="horizontal" data-theme="a">Business</button>
        <button type="button" data-type="horizontal" data-theme="a">Government</button>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
  yqlgeo.get('visitor',function(o) {
    if (o.error) {
      alert('No location found.');
    } else {
      $("#welcome").html("NYC.gov for " + o.place.name);
      // At this point we should gather location-specific alerts for things like transit, orange alerts, etc.
      //alert(o.place.name + ',' + o.place.country.content + ' (' + o.place.centroid.latitude + ',' + o.place.centroid.longitude + ')');
    }
  });
</script>
</html>