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
<body ontouchmove="BlockMove(event);">
  <div data-role="page">
    <div data-role="header">
      <h1>NYC.gov - Search Results</h1>
    </div>

    <div data-role="content">
      <div style="text-align:center;">
        <?php echo '<input type="search" value="' . htmlspecialchars($_GET["keyword"]) . '"></input>' ?>
        <button type="button" data-inline="true">Search</button>
      </div>

      <h3>Results for <?php echo htmlspecialchars($_GET["keyword"]) ?>:</h3>
      <ul data-role="listview">
        <li data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-li-has-thumb ui-btn-down-c ui-btn-up-c">
          <div class="ui-btn-inner ui-li">
            <div class="ui-btn-text"><a href="#" class="ui-link-inherit">
              <img src="images/lane_painting.jpg" class="ui-li-thumb">
              <h3 class="ui-li-heading">Bike Lane Painting Begins</h3>
              <p class="ui-li-desc">This Saturday, bike lanes are gonna be painted, so move your car out of the way plz.</p></a>
            </div>
            <span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
          </div>
        </li>
        <li data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-li-has-thumb ui-btn-down-c ui-btn-up-c">
          <div class="ui-btn-inner ui-li">
            <div class="ui-btn-text"><a href="#" class="ui-link-inherit">
              <img src="images/lane_sizes.gif" class="ui-li-thumb">
              <h3 class="ui-li-heading">Bike Safety Guidelines</h3>
              <p class="ui-li-desc">In partnership with the Tempe Bicycle Action Group (TBAG), NYC has released a set of guidelines to ride safely in New York City.</p></a>
            </div>
            <span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
          </div>
        </li>
        <li data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-li-has-thumb ui-btn-down-c ui-btn-up-c">
          <div class="ui-btn-inner ui-li">
            <div class="ui-btn-text"><a href="#" class="ui-link-inherit">
              <!--<img src="images/lane_sizes.gif" class="ui-li-thumb">-->
              <h3 class="ui-li-heading">Online Bike Ticket Payment Form</h3>
              <p class="ui-li-desc">Give us all your money, we know you have some saved from not paying for gas.</p></a>
            </div>
            <span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
          </div>
        </li>
        <li data-theme="c" class="ui-btn ui-btn-icon-right ui-li ui-li-has-thumb ui-btn-down-c ui-btn-up-c">
          <div class="ui-btn-inner ui-li">
            <div class="ui-btn-text"><a href="#" class="ui-link-inherit">
              <img src="images/nyc_bike_map.gif" class="ui-li-thumb">
              <h3 class="ui-li-heading">NYC Bike Lane Maps</h3>
              <p class="ui-li-desc">We gave a dude a bunch of crayons and he made some maps.  They're probably not accurate, but here's the scans, enjoy!</p></a>
            </div>
            <span class="ui-icon ui-icon-arrow-r ui-icon-shadow"></span>
          </div>
        </li>
      </ul>
      <br />
      <button type="button">More...</button>
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