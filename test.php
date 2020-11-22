<? 
  require "assets/getID3/getid3/getid3.php";
  require "core/doctype.php";
?>
<?
$perPage = 8;

// sanitize page to be a number, default to 0 - the "first page"
$page = intval(is_numeric($_GET['page']) ? $_GET['page'] : 0);

$charnum = strlen($file);
$directory = "gallery/my";
if (is_dir($directory)) {
  if ($dh = opendir($directory)) {
    // loop up to and including the requested page
    for ($i = 0; ($file = readdir($dh)) && ($i % $perPage) <= $page; ++$i) {
        // only output if we are on the requested page
        if($file !="." && $file!=".." && ($i % $perPage) == $page) {
          echo '
          <div class="img">
          <a target="_blank" href="gallery/my/'.$file.'">
          <img class="img-responsive" src="gallery/my/'.$file.'">
          </a>
          <div class="desc">'.substr($file, 0, $charnum - 4).'</div>
          </div>';
        }
    }
    closedir($dh);
  }
}
?>
<div id="result">
  <!-- images go here -->
</div>
<button type="button">Load more</button>
<script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="/assets/vendor/counterup/counterup.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/venobox/venobox.min.js"></script>
  <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="/assets/vendor/typed.js/typed.min.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
<script>
  $(document).ready(function() {
  $("button").click(function(){
    // try to get current page, or start off with 0 and increment by one.
    var page = (parseInt($(this).data('page')) || 0) + 1; 
    // save current page as data state on the button
    $(this).data('page', page);

    // we call the PHP script and pass a GET variable which indicates
    // which page we want to load.
    $.get('test.php?'+ $.param({page: page}), function(data) {
      // append the result from your PHP script to #result element
      $('#result').append(data);
    });
  });
});
</script>
