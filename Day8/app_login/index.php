<?php 

include('model/m_database.php');
include('model/m_loaitin.php');
include('model/m_user.php');
include('model/m_tintuc.php');

$action = filter_input(INPUT_GET,'action');
if (empty($action)) {
    $action = 'laytinmoi';
   
  }
$loaitin = loaitinDB::getalloaitin();
// kỷ thuật phân trang
$tintuc = tintucDB::getalltintuc();
$tongsotin = count($tintuc);
$sotrang = ceil($tongsotin/5);

$batdau = filter_input(INPUT_GET, 'batdau');
if (empty($batdau)) {
   $batdau = 0;
}
// điều hướng
switch ($action) {
  case 'laytinmoi':
    $tintucmoi = tintucDB::get_tintucmoi(addslashes($batdau),addslashes(5));
    break;
  case 'theoloaitin':
    $idloaitin = filter_input(INPUT_GET, 'idloaitin');
    $tintucmoi = tintucDB::get_tinby_idloaitin($idloaitin);
    break;
  default:
    # code...
    break;
}

 ?>
<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
a{
  text-decoration: none;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1">Logo</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Values</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">News</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Clients</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Partners</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <?php foreach ($loaitin as $key => $value): ?>
    <a class="w3-bar-item w3-button w3-hover-black" href="?action=theoloaitin&idloaitin=<?php echo $value->getidloaitin() ?>"><?php echo $value -> gettheloai(); ?></a>
  <?php endforeach ?>
  
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">
  <?php foreach ($tintucmoi as $key => $value): ?>
    
    <div class="w3-row w3-padding-64">
      <div class="w3-twothird w3-container">
        <a href="tinchitiet.php?action=chitiet&idtintuc=<?php echo $value->getidtintuc(); ?>"><h1 class="w3-text-teal"><?php echo $value -> gettieude(); ?></h1></a>
        <p><?php echo $value -> gettomtat(); ?></p>
      </div>
      <div class="w3-third w3-container">
        <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
        <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
      </div>
    </div>
  <?php endforeach ?>
  

  

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <?php for ($i=0; $i < $sotrang ; $i++):?>
      <a class="w3-button w3-black" href="?batdau=<?php echo $i*5; ?>"><?php echo ($i+1); ?></a>
    
    <?php endfor; ?>
      <a class="w3-button w3-hover-black" href="#">»</a>
      
    </div>
  </div>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

</body>
</html>
