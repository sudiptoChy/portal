<!DOCTYPE html>
<html>
<head>
	<title>testing</title>
</head>
<body>
	<div class="row">
	 	<div class="col-md-12">
	 	<ul class="dropdown-menu">
          <li><a href="/posts">Posts</a></li>
          <li><a href="#">Categories </a></li>
          <li><a href="#">Tags</a></li>
          <li><a id="logout" href="">Log out</a></li>
        </ul>
        </div>
     </div>



  <form id="frmlogout" method="POST" action="http://www.lus.ac.bd/wp-admin/admin-ajax.php?action=get-result&student_id=1512020006&birth_date=1997-1-2">
    {!! csrf_field() !!}
  </form>

    <script>
      document
      .getElementById('logout')
      .addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('frmlogout').submit();
      });
    </script>
</body>
</html>
	
	 
