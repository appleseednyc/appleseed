<!DOCTYPE html>
<html manifest="cache.manifest">
<!--
    NYC.gov for Tablets
    David Huerta
    Reinvent NYC.gov Hackathon
-->
<head>
  <title>NYC.gov for Tablets - Search</title>
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
<body ontouchmove="BlockMove(event);">
  <div data-role="page">
    <div data-role="header">
      <h1>NYC.gov - Search Results</h1>
    </div>

    <div data-role="content">
      <div style="text-align:center;">
        <input type="search"></input>
        <button type="button" data-inline="true">Search</button>
      </div>

      <h3>Results for bicycle lanes:</h3>
      <ul data-role="listview">
        <li><a href="#">Bike lane painting begins</a></li>
        <li><a href="#">Bike safety guidelines</a></li>
        <li><a href="#">Pay for your bike ticket</a></li>
        <li><a href="#">Bike lane maps</a></li>
      </ul>
      <br />
      <button type="button">More...</button>
    </div>

    <div data-role="footer" style="text-align:center;">
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