<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->
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

    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());;
});

    </script>


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

    <!-- Scripts for Plus and Minus counter -->

    <script>
      
      $('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    </script>

    <!-- for about us page -->

    <script>

new WOW().init();
$(".rotate-btn-1").click(function(){
  $("#card-1").addClass("flipped");
});
$(".rotate-btn-1.back").click(function(){
  $("#card-1").removeClass("flipped");
});

new WOW().init();
$(".rotate-btn-2").click(function(){
  $("#card-2").addClass("flipped");
});
$(".rotate-btn-2.back").click(function(){
  $("#card-2").removeClass("flipped");
});

new WOW().init();
$(".rotate-btn-3").click(function(){
  $("#card-3").addClass("flipped");
});
$(".rotate-btn-3.back").click(function(){
  $("#card-3").removeClass("flipped");
});

new WOW().init();
$(".rotate-btn-4").click(function(){
  $("#card-4").addClass("flipped");
});
$(".rotate-btn-4.back").click(function(){
  $("#card-4").removeClass("flipped");
});
</script>


<!-- For author profile modals -->

<script>

    $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever')
      // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
      modal.onclick('button')
  })

</script>

<script> 
$('#submit').click(function(e){
        e.preventDefault();
        var sid = $('#un').val();
        var dob = $('#dob').val();
        var luh = {"ajaxurl":"http:\/\/www.lus.ac.bd\/wp-admin\/admin-ajax.php"};
        var token = $('#token').val();
        var redirectUrl = "{{ URL::route('user.registrationForm', '#data#') }}";
        $.ajax({
          url : luh.ajaxurl,
          method: 'POST',
          data: 'action=get-result&student_id='+sid+'&birth_date='+dob,
          success : function(data){
              $.ajax({
                url: "{{ URL::route('user.register-check') }}",
                method: 'POST',
                data: {'datas': data, '_token': token, 'dob' : dob},
                success: function(r) {
                  var link = document.createElement('a');
                  link.href = redirectUrl.replace('#data#', r.name + '+' + r.dob + '+' + r.id + '+' + r.dep);
                  document.body.appendChild(link);
                  link.click();
                }
              })
          }
        });
    })
</script>


  </body>
</html>
