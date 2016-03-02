
<footer class='page-footer indigo darken-1'>
    <div class='container'>
        <div class='row'>

            <div class='col l6 s12'>
                <h5 class='white-text'>Urban Chef</h5>
                <p class='grey-text text-lighten-4'>Urban Chef is a platform that unites chefs and students. It gives you           the opportunity to really learn how to cook a traditional dish. You will be taught in a personal setting             and have a great experience.</p>
            </div>

            <div class='col l3 s12'>
                <h5 class='white-text'>About</h5>
                <ul>
                    <li><a class='white-text' href='about.php'>Who are we?</a></li>
                    <li><a class='white-text' href='social.php'>Social feed</a></li>
                    <li><a class='white-text' href='contact.php'>Contact us</a></li>
                </ul>
            </div>

             <div class='col l3 s12'>
          <h5 class='white-text'>Connect</h5>
          <ul>
            <li><a class='white-text' href='http://www.facebook.com/urbanchef2016'>Facebook</a></li>
            <li><a class='white-text' href='http://www.instagram.com/urbanchef2016'>Instagram</a></li>
            <li><a class='white-text' href='https://www.pinterest.com/daantje_1989/urban-chef/?fb_ref=300826587518084954%3Af435c6dafcdff62682b8'>Pinterest</a></li>
            <li><a href='http://www.twitter.com/urbanchef2016' class='white-text'>Twitter</a></li>
          </ul>
        </div>

        </div>
    </div>

    <div class='footer-copyright'>
        <div class='container'>
            Made by <a class='brown-text text-lighten-3' href='http://www.danielleklaasen.com'>Danielle</a>, <a                 class='brown-text text-lighten-3' href='https://www.facebook.com/kineks?fref=ts'>Bogdan</a> & <a class='brown-text           text-lighten-3' href='https://www.facebook.com/matthew.skea?fref=ts'>Matthew</a>
        </div>
    </div>

</footer>   
<!--  Scripts-->
<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
<script src='js/materialize.js'></script>
<script src='js/init.js'></script>

<script>
    $(document).ready(function () {
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
//                $('.modal-trigger').openModal();
    });
//    added textare jQuery
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
</script>
</body>
</html>