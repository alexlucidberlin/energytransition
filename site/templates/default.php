
<?php snippet('header') ?>
  <div class="wrap content">

    <?php snippet('sidebar') ?>

    <section id="main" class="main-content" role="main">
      <?php echo $page->text()->kirbytext() ?>
    </section>

  </div> <?php // wrap content ?>

<?php snippet('footer') ?>
</div> <?php // container ?>
