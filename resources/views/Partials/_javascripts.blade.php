<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="{{asset('js/sticky.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/jquery-3.1.1.min.js')}}"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

    <!-- Select2 javaScript -->
    
    <script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>

    <script>
      
      $(window).scroll(function(){

        if($(this).scrollTop() >= 100){

          $("body").addClass("sleek");
        }
        else{

          $("body").removeClass("sleek");
        }

      });
    </script>

  </body>
</html>
