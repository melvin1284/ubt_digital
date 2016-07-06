
		<div>Footer Section</div>

	</main>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/0.1.12/slideout.min.js"></script>
    <script>
      var slideout = new Slideout({
        'panel': document.getElementById('panel'),
        'menu': document.getElementById('menu'),
        'padding': 256,
        'tolerance': 70,
        'side': 'right'
      });

       // Toggle button
      document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
      });
    </script>

</body>
</html>