<!DOCTYPE html>
<html>
  <head>
    @yield('externals')
    <title>Secugraphy</title>
    <link rel = "stylesheet" href = "{{ asset('css/app.css') }}"/>
    <title>CodeBaker</title>
     <link rel="shortcut icon" href="https://fund.dev/codebaker.ico"/>
    <nav class = "teal">
      <div class="nav-wrapper container ">
        <a  class="brand-logo "><span class="knocks-lab4" style="margin-top : 5px !important;"></span><span>{CodeBaker}</span></a>
      </div>
    </nav>
  </head>
  <body>
    <main>
      <div class = "container" id = "app">
        @yield('content')
      </div>
         <div class="center animated fadeIn" id = "logo" style="display : none;">
        <img src="https://fund.dev/codebaker.png" width="400" />
       </div>
    </main>
  </body>
  <footer class="page-footer  teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">{CodeBaker}</h5>
          <p class="grey-text text-lighten-4 " style="font-family: sans-serif; word-break: break-word; font-weight: 300">Emplementing a simple approaches to encrypt and dycript the text with a different complixty levels.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">
          <a class="grey-text text-lighten-3" target = "_blank" href="https://github.com/mamr-moussa/secugraphy">
            <span class = "knocks-brand84"></span> Github Repository
          </a>
          </h5>
          <p style="font-family: sans-serif;">Workspace</p>
          <ul id = "footer_list">
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/assets/js/app.js" style="font-size: 120%; font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand119 knocks_icon"></span> <span style="font-family: sans-serif;">Script</span>
              </a>
            </li>
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/public/js/map.js" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-sitemap red-text knocks_icon"></span> <span style="font-family: sans-serif;">Characters Map</span>
              </a>
            </li>
                        <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/assets/sass/app.scss" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand44 red-text knocks_icon"></span> <span style="font-family: sans-serif;">Stylesheets</span>
              </a>
            </li>
            <li>
              <a href ="https://github.com/mamr-moussa/secugraphy/blob/master/resources/views/welcome.blade.php" style="font-size: 120%;font-weight: 200;" class = "white-text" target="_blank">
                <span class = "knocks-brand110 red-text knocks_icon"></span> <span style="font-family: sans-serif;">Templates</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright green">
      <div class="container " style="font-family: sans-serif;">
        © 2018 Copyright Knocks Development Team.
      </div>
    </div>
  </footer>
   @yield('tail')
  <script src="{{asset('js/app.js')}}"></script>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$('#app').fadeOut(function(){
  			$('#logo').fadeIn(function(){
  				setTimeout(()=>{
  					$('#logo').fadeOut(function(){
  					$('#app').fadeIn();
  				})
  				},1000)
  			})
  		})
  	})
  </script>
</html>
