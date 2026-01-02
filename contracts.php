
<?php
$page_title = 'Контрактное производство';
$repeat_block = "repeat-block";
include_once('template-parts/repeat-block.php');
include_once('template-parts/production-block.php');
include_once('template-parts/seo-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php');?>

<style>
  .production {
    margin-bottom: 100px;
  }
  .seo-container {
    padding-left: 10px;
  }
  .input-group-wrapper {
    margin-bottom: 1.675rem;
  }

  @media (max-width: 576px) {
    .production {
      margin-bottom: 43px;
    }

    .seo-container {
      padding-left: 0;
    }

    .input-group-wrapper {
      margin-bottom: 10px;
    }    
  }
</style>