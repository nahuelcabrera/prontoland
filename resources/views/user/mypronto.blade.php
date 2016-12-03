<!--Perfil de usuario-->
@extends('master')
@section('content')
<div class="avatar">
  auth:avatar
</div>
<br><br><br><br><br>
<video src="video/usetech.mp4" class="videotech" autoplay poster="img/banner1">

</video>
<br><br><br><br><br>
<br><br><br><br><br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><br><br><br><br>
<br><br><br><br><br>
<h4>Haz una publicación en tu timeline</h4>
<br><br>

<form class="makepronto" action="" method="get">

<textarea rows="4" cols="100" id="publication" placeholder="Aquí puedes contarnos algo sobre ti, tu momento, tu pasatiempo, acontecimientos, o simplemente comparte algo interesante, registra tu vida.¡Come On!"></textarea>

<button type="submit" name="button" class="prontobutton1"><img class="prontobutton" src="img/pronto.svg" alt="">Plasmar</button>

</form>



<script type="text/javascript">
var publish = document.getElementById('publication');
console.log(publish);

</script>


@stop
