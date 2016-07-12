
        <div id="footer-wrap" class="container-fluid content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <span>Company :</span>
                        <ul class="list-unstyled">
                            <li><a href="#">Our Vision</a><li>
                            <li><a href="#">Global Offices</a><li>
                            <li><a href="#">What our clients say</a><li>
                            <li><a href="#">Careers</a><li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span>Store :</span>
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a><li>
                            <li><a href="#">Subscriptions</a><li>
                            <li><a href="#">My Cart</a><li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <span>Support :</span>
                        <ul class="list-unstyled">
                            <li><a href="#">Customer Support</a><li>
                            <li><a href="#">Customer Guarantee</a><li>
                            <li><a href="#">Contact Us</a><li>
                            <li><a href="#">Feedback</a><li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right">
                        <form method="post" action="#">
                            <p>Signup for the Weekly Silver Bulletin</p>
                            <input type="text" name="email" placeholder="Your Email" class="signup-email"  />
                            <input type="submit" name="submit" value="Sign Up" class="btn-signup" />
                        </form>
                    </div>
                </div>

                <div id="copyright" class="row">
                    <p>Copyright UBT MARKETING PTY LTD 2011-2016 
                    | All Rights Reserved 
                    | Copyright Policty 
                    | Terms pf Use 
                    | Subscription Terms 
                    | Privacy Policy 
                    | Disclaimer
                    </p>
                </div>
            </div>            
        </div>

	</main>

    <a href="#" class="btt fixed">
        <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
    </a>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.12/slideout.min.js"></script>
    <script>
        var slideout = new Slideout({
            'panel': document.getElementById('panel'),
            'menu': document.getElementById('menu'),
            'padding': 300,
            'tolerance': 70,
            'side': 'right'
        });

        document.querySelector('.toggle-button').addEventListener('click', function() {
            slideout.toggle();
            $(this).addClass('hidden');
        });
        document.querySelector('.toggle-button2').addEventListener('click', function() {
            slideout.toggle();
        });

        slideout.on('beforeopen', function() {
            document.querySelector('.fixed').classList.add('fixed-open');
        });

        slideout.on('beforeclose', function() {
            document.querySelector('.fixed').classList.remove('fixed-open');
        });

        slideout.on('close', function(){
            $('.toggle-button').removeClass('hidden');
        });
    </script>

</body>
</html>