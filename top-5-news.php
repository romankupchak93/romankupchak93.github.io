<?php require "config.php";
//require 'core/header.php';
//require 'core/nav.php';
$sql1=''; 
$content='';
$title='';
$id=$_GET['id'];
if($id>0){
	$sql1=" AND id={$id}";
	}
$sql = "SELECT top 3 * FROM tis_content
WHERE catid = 2 AND state=1 {$sql1}
ORDER BY ordering asc";
$res = sqlsrv_query($conn3, $sql);
while ($row = sqlsrv_fetch_object($res)) {
$content .= '<div class="shadow-content card col-md6">';
$content .= '<div class="card-body p-0">'.str_replace('"images/','"https://sofiyam-news.tis.if.ua/images/', $row->introtext).'</div>';
$content .= '<div class="card-footer text-muted"><h4>'.$row->title.'</h4><h5><i>'.date_format($row->created, 'd.m.Y').'</i></h5>';
$content .= '<hr class="style3"></div></div>';

}
$sql = "SELECT * FROM tis_content
WHERE catid = 8 AND state=1
ORDER BY ordering asc";
$res = sqlsrv_query($conn3, $sql);
while ($row = sqlsrv_fetch_object($res)) {
$title .= '<a href="?id='.$row->id.'">'.$row->title.'</a><br>';
}	
?>

<div class="row">
<div class="column" id="main-news" style="width: 100%"><?=$content?></div>
<!--    <div class="column col-xs-8" id="main">--><?//=$content?><!--</div>-->
<!--    <div class="column col-xs-4" id="sidebar">--><?//=$title?><!--</div>-->
</div>
<?

?>
    <style>
        p {
            margin: 0;
        }
<? if ($id>0) { ?>
.shadow-content.about-us {
    display: none;
    }
.title {
    display: none;
}
<?}?>
    </style>
<style>
/*.row {*/

/*    margin-right: 0px;*/
/*    margin-left: 0px;*/

/*}*/
hr.style3 {
	border: none;
	/*border-top: 1px dashed #8c8b8b;*/
}

hr.style14 {
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
  background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
}
.image-border{
	width:100%
}
#sidebar>a{
	margin-top: 14px;

display: block;
}
</style>
