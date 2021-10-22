<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
    <a class="navbar-brand" href="<?= base_url(); ?>"><i class="fas fa-globe"></i> Rumah Web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <?php if($title=='Home') { ?>
            <li class="nav-item active"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
        <?php } else { ?>
            <li class="nav-item"><a href="<?= base_url(''); ?>" class="nav-link">Home</a></li>
        <?php } ?>
        
        <?php if($title=='Data User') { ?>
            <li class="nav-item active"><a href="<?= base_url('data'); ?>" class="nav-link">Data User</a></li>
        <?php } else { ?>
            <li class="nav-item"><a href="<?= base_url('data'); ?>" class="nav-link">Data User</a></li>
        <?php } ?>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
      	<a href="<?= base_url('login'); ?>" class="btn btn-primary btn-sm mx-1">Login</a>
      	<a href="<?= base_url('register'); ?>" class="btn btn-outline-primary btn-sm mx-1">Register</a>
      </form>
    </div>
    </div>
  </nav>
</header>