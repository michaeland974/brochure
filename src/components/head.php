<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $view->get_title()?></title>
 
  <!-- Global styles -->
  <link rel="stylesheet" <?php echo "href={$view->get_dir_path()}/reset.css"?> >
  <link rel="stylesheet" <?php echo "href={$view->get_dir_path()}/global.css"?> >
  <link rel="stylesheet" <?php echo "href={$view->get_dir_path()}/nav.css"?> >
  <link rel="stylesheet" <?php echo "href={$view->get_dir_path()}/sitemap.css"?> >

  <!-- Page styles -->
  <link rel="stylesheet" <?php echo "href={$view->get_dir_path()}/{$view->get_page_stylesheet()}"?> >

  <!-- Global scripts -->
  <script <?php echo "src={$view->get_dir_path()}/scripts/listener.js"?> defer></script>

</head>
<body>
  
