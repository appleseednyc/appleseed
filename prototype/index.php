<?php include("_header.php"); ?>
  
  <section class="search">
    <div class="wrapper">
      <form action="/search" method="get"> 
        <label class="placeholder" for="global-search-field">Whatcha lookin' for?</label> 
        <div><input type="text" class="search" name="q" /> <input type="submit" value="Find it!" class="button" /> </div> 
      </form>
      
      <div class="popular-searches">
        <ul>
          <li><a href="#">How do I pay my parking tickets?</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
          <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <section class="map">
    
    
  </section>
<?php include("_footer.php"); ?>