<!DOCTYPE html>
<html manifest="cache.manifest">
<!--
    
-->
<head>
  <title>NYC.gov for Tablets</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="default" />
  <meta name="viewport" content="user-scalable=no, width=device-width" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/mobile/1.0b1/jquery.mobile-1.0b1.min.js"></script>
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
      <h1>NYC.gov for Tablets</h1>
    </div>

    <div data-role="content">
      <p>Page content goes here.</p>
      <div style="text-align:center;">
        <input type="search"></input>
        <button type="button" data-inline="true">Search</button>
      </div>
      <p>Popular searches this week: jobs, cloverfield monster, schools</p>
    </div>

    <div data-role="footer" style="text-align:center;">
      <div data-role="controlgroup" data-type="horizontal">
        <button type="button" data-type="horizontal">Residents</button>
        <button type="button" data-type="horizontal">Visitors</button>
        <button type="button" data-type="horizontal">Business</button>
        <button type="button" data-type="horizontal">Government</button>
      </div>
    </div>
  </div>
</body>
<script type="text/javascript">
   
</script>
</html>