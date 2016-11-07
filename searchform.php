<form role='search' class='searchform' method='get' id='searchform' action='<?php echo home_url( '/' ); ?>'>
    <p>
      <?php _e(
          "<!--:en--><input type='text' class='input--txt input searchform__field' name='s' id='s'  placeholder='search' /><!--:-->  
          
          <!--:pb--><input type='text' class='input--txt input searchform__field' name='s' id='s'  placeholder='buscar' /><!--:--> 
          
          <!--:es--><input type='text' class='input--txt input searchform__field' name='s' id='s'  placeholder='buscar' /><!--:--> 
          
          <!--:fr--><input type='text' class='input--txt input searchform__field' name='s' id='s'  placeholder='chercher' /><!--:-->" 
          ); ?>
      
      <input type='submit' class='input--btn input searchform__submit' name='submit' value='OK' />
    </p>
</form>
