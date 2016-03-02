<?php
include 'inc/nav.php';
?>

<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
      <div class='container'>
        <div class='row center'>
          <h4 class='header col s12 black-text'>FAQ</h4>
        </div>
      </div>
    </div>
    <div class='parallax'><img src='background9.jpg' alt='Unsplashed background img 3'></div>
  </div>


<div class='container'>
<br><br>
    <div ng-app='myApp' ng-controller='faqCtrl'>
        <nav>
            <div class='nav-wrapper'>
            <form>
            <div class='input-field indigo darken-1'>
            <input id='search' type='search' required ng-model='test'>
            <label for='search'><i class='material-icons'>search</i></label>
            <i class='material-icons'>close</i>
            </div>
            </form>
            </div>
        </nav>
        <br><br>
    <div ng-repeat='x in questions | filter:test'> 
    <div class='divider'></div>
    <div class='section'>
    <h5>{{ x }}</h5>
    <p>Lorem ipsum dolor sit amet, class aenean suspendisse etiam lacus, lorem ut maecenas turpis arcu sociosqu scelerisque, non luctus sed lectus. Malesuada consectetuer ut purus lorem, in dolor urna aenean adipiscing lorem, nam nibh leo quam metus proin, mus bibendum vestibulum aut et nullam ipsum. In scelerisque, tristique justo taciti, enim praesent suspendisse, nulla felis ullamcorper. Praesent et ac sodales massa, posuere metus sed. Massa donec augue id. Praesent ut, vehicula eu enim dis fringilla dolor nullam. In porttitor euismod quisque erat mauris montes, dignissim cursus inceptos duis suspendisse ipsum a. Convallis qui aenean vel mauris ipsum. Eget mi vestibulum, phasellus quis maecenas arcu, pede pellentesque, curabitur proin in. Volutpat proin nulla, dolor parturient ultricies massa, sed praesent lectus, suscipit commodo.</p>
    </div>
    </div>

        
  
  
          
</div>


</div>





<script src='js/angular.js'></script>

<?php
include 'inc/footer.php';
