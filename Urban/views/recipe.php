<?php
$title = "Grilled Salmon";
$script = "
";
//// Settings, change this to match your requirment //////
$start_year=2000; // Starting year for dropdown list box
$end_year=2020;  // Ending year for dropdown list box
////// end of settings ///////////
$content = "
<script src='calendar.js'></script>
<div class='parallax-container valign-wrapper'>
    <div class='section no-pad-bot'>
      <div class='container'>
        <div class='row center'>
          <h4 class='header col s12 white-text'>Title</h4>
        </div>
      </div>
    </div>
    <div class='parallax'><img src='img/romanian.jpg' alt='Unsplashed background img 2'></div>
  </div>
  
<div class='container'>
    <div class='row'>
    
        <div class='col s12 m8'>
        <h5>Title</h5>
        <p>
        Cooking time: <br>
        Price: <br>
        Origin: <br>
        Rating: <br>
        </p>
        </div>
        
        <div class='col s12 m4'>
        <h5>Availability</h5>
         <section class='container'>
    <div class='cal'>
      <table class='cal-table'>
        <caption class='cal-caption'>
          <a href='#' class='prev'>&laquo;</a>
          <a href='#' class='next'>&raquo;</a>
          March 2016
        </caption>
        <tbody class='cal-body'>
          <tr>
            <td class='cal-off'><a href='#'>30</a></td>
            <td><a href='#'>1</a></td>
            <td><a href='#'>2</a></td>
            <td class='cal-today'><a href='#'>3</a></td>
            <td><a href='#'>4</a></td>
            <td><a href='#'>5</a></td>
            <td><a href='#'>6</a></td>
          </tr>
          <tr>
            <td><a href='#'>7</a></td>
            <td class='cal-selected'><a href='#'>8</a></td>
            <td><a href='#'>9</a></td>
            <td><a href='#'>10</a></td>
            <td><a href='#'>11</a></td>
            <td class='cal-check'><a href='#'>12</a></td>
            <td><a href='#'>13</a></td>
          </tr>
          <tr>
            <td><a href='#'>14</a></td>
            <td><a href='#'>15</a></td>
            <td><a href='#'>16</a></td>
            <td class='cal-check'><a href='#'>17</a></td>
            <td><a href='#'>18</a></td>
            <td><a href='#'>19</a></td>
            <td><a href='#'>20</a></td>
          </tr>
          <tr>
            <td><a href='#'>21</a></td>
            <td><a href='#'>22</a></td>
            <td><a href='#'>23</a></td>
            <td><a href='#'>24</a></td>
            <td><a href='#'>25</a></td>
            <td><a href='#'>26</a></td>
            <td><a href='#'>27</a></td>
          </tr>
          <tr>
            <td><a href='#'>28</a></td>
            <td><a href='#'>29</a></td>
            <td><a href='#'>30</a></td>
            <td><a href='#'>31</a></td>
            <td class='cal-off'><a href='#'>1</a></td>
            <td class='cal-off'><a href='#'>2</a></td>
            <td class='cal-off'><a href='#'>3</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
        </div>
        
    </div>
</div>

";

return $content;