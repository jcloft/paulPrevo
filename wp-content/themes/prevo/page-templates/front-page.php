<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page.
 */

get_header(); ?>
	
	<div class="container" id="main">
      <div class="wrapper">
        <div ng-view></div>
      </div>
    </div>  <!-- /container -->
     
    <script type="text/javascript">
//           var now = 0;
//          var int = self.setInterval("changeBG()", 5000);
//          var array = ["cols", "jailhouse", "morgan"];
//
//          function changeBG(){
//            //array of backgrounds
//            document.getElementById("jumboBack").classList.remove(array[now]);
//            now = (now+1) % array.length ;
//            
//            document.getElementById("jumboBack").classList.add(array[now]);
//          }  
      
      window.setTimeout(function(){
    $(".twitter-timeline").contents().find(".e-entry-title").css("color","white");
    $(".twitter-timeline").contents().find(".tweet").css("color","white");
  }, 3000);
      
      $(document).ready(function() {
        
        $('.navbar-toggle').click(function(){
          $('#main').toggleClass('nav-visible');
          //$('nav').toggleClass('nav-visible');
          $('.menu').css('display','block');
        });
        
        $('#closemenu').click(function() {
          $('#main').toggleClass('nav-visible');
          //$('#thenav').toggleClass('nav-visible');
          $('.menu').css('display','none');
        });
        
      });
    </script>
    
<div class="col-sm-12" id="paidFor">
  <div id="paidForWrapper">
    <h2>Paid for by Supporters of Paul Prevo<br></h2>
    <h3>Steve Spellman, Treasurer</h3>
  </div>
</div>
	
<?php get_footer(); ?>