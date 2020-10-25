<?php

	if($bLinguaIt)
	{
		
?>


  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo $generaurl; ?>it"><img id="logo" class="rounded" src="<?php echo $generaurl; ?>ico/logo.png" alt=""></a>
        <a class="navbar-brand" href="<?php echo $generaurl; ?>it">Ceramica Giusti</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'home'){echo('active');}?>" href="<?php echo $generaurl; ?>it">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'about'){echo('active');}?>" href="<?php echo $generaurl; ?>it/about#page">CHI SIAMO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'gallery'){echo('active');}?>" href="<?php echo $generaurl; ?>it/gallery#page">WORKSHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'corsi'){echo('active');}?>" href="<?php echo $generaurl; ?>it/corsi#page">CORSI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'contacts'){echo('active');}?>" href="<?php echo $generaurl; ?>it/contacts#page">CONTATTI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="return false"><img class="ico rounded" src="<?php echo $generaurl; ?>ico/it.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $en_url; if ($page == 'home'){echo('/en');} if ($page != 'home'){echo('#page');} ?>"><img class="ico rounded" src="<?php echo $generaurl; ?>ico/gb.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	
    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">STUDIO CERAMICO GIUSTI</h1>
          <h2 class="masthead-subheading mb-0">Bottega Scuola di Ceramica</h2>
        </div>
      </div>
	</header>

<?php
		
    }
				
?>
    
<?php

	if($bLinguaEn)
	{
		
?>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
	    <a class="navbar-brand" href="<?php echo $generaurl; ?>en"><img id="logo" class="rounded" src="<?php echo $generaurl; ?>ico/logo.png" alt=""></a>
        <a class="navbar-brand" href="<?php echo $generaurl; ?>en">Giusti Ceramic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'home'){echo('active');}?>" href="<?php echo $generaurl; ?>en">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'about'){echo('active');}?>" href="<?php echo $generaurl; ?>en/about#page">ABOUT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'gallery'){echo('active');}?>" href="<?php echo $generaurl; ?>en/gallery#page">WORKSHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'corsi'){echo('active');}?>" href="<?php echo $generaurl; ?>en/corsi#page">COURSES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php if ($page == 'contacts'){echo('active');}?>" href="<?php echo $generaurl; ?>en/contacts#page">CONTACTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $it_url; if ($page != 'home'){echo('#page');} ?>"><img class="ico rounded" src="<?php echo $generaurl; ?>ico/it.svg" alt=""></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" onclick="return false"><img class="ico rounded" src="<?php echo $generaurl; ?>ico/gb.svg" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">STUDIO CERAMICO GIUSTI</h1>
          <h2 class="masthead-subheading mb-0">Ceramic Art Studio</h2>
        </div>
      </div>

    </header>
<?php
		}
				
?>