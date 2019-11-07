<style>

    @media print {
      a[href]:after {
        content: none !important;
      }
    }
</style>
    <?php
    
    $ActualLink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
    ?>
    
    <link rel="stylesheet" href="sharetastic.css"/>
    <script src="jquery.min.js"></script>
    <script src="sharetastic.js"></script>
    <meta property="og:title" content="<?php echo $Title ?>" />
    <meta property="og:description" content="<?php echo $Description ?>" />
    <meta property="og:url" content="<?php echo $ActualLink ?>" />
    <meta property="og:image" content="http://" />
    