<?php include('array.php');
$root = '../';
include($root."blocks/meta.php");
include($root."blocks/header_moscow.php");
include($root."blocks/breadcrumbs.php");?>

<div class="container">
  <div class="row" itemtype="http://schema.org/ItemList" itemscope>
     <h1>Деревянный погонаж оптом</h1>
     <p>Наше предприятие ЗАО «Агро-оптим», торговая марка «Ключ585» работает с 1998 года в н.п. Неверково, Владимирской области. Мы специализируемся на переработке дерева от круглого леса до сращивания древесины и выпуске из неё различного погонажа. Погонаж производится на хорошем оборудовании (Opticut, Dimter, строгальный Weinig и др.), что в совокупности с многолетним опытом позволяет получать высококачественные изделия по приемлимым ценам.</p>
     <p><a href="/prays-list/PILOMATERIALYI-prays.pdf" class="button-style open-modal">Скачать прайс лист</a></p>

    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 gallery">
<?php foreach ($pogonazh_table as  $value) { $count=count($pogonazh[$value]['table']);?>
<table class="table rates pogonazh">
    <tbody>
      <tr>
        <td rowspan="<?php echo $count;?>"><a href="/derevyannyy-pogonazh/<?php echo $value; ?>"><img src="/img/pogonazh/vid/<?php echo $pogonazh[$value]['img'][0]; ?>" alt="<?php echo $pogonazh[$value]['name']; ?>" width="130" /></a></td>
        <td rowspan="<?php echo $count;?>" width="40%"><a href="/derevyannyy-pogonazh/<?php echo $value; ?>"><?php echo $pogonazh[$value]['name']; ?></a></td>
  <?php $br='<tr>'; foreach ($pogonazh[$value]['table'] as $key => $row) { if ($key==$count) $br=''; ?>
        <td><span class="razmer"><?php echo $row[0]; ?></span></td>
        <td><span class="price"><?php echo $row[1]; ?></span><span class="mp"> руб./м.п.</span></td>
      </tr><?php echo $br; ?>
  <?php } ?>
      </tbody>
</table>
<?php } ?>

    </div>

    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 dostavka">
      <div class="greyline"> 
        <h2>Доставка</h2>
        <h3>По всей России</h3>
        <p>В зависимости от объема заказа, доставка осуществляется транспортной компанией или машиной.</p>
        <h3>Москва и область</h3>
        <p>Доставляем в любую точку Москвы и области. Также, осуществляем отгрузку по адресу Москва, ул. Электродная, д.2, стр. 28</p>
      </div>
      <div class="darkline"> 
        <h2>Условия оплаты</h2>
        <p>По договоренности.</p>
      </div>
    </div>     
  </div>
  
	<div class="row">
  		<div class="gallery2">
<?php 
$host = $_SERVER['HTTP_HOST'];
$self = explode("/", $_SERVER['PHP_SELF']);
define('HTTP_URL', 'http://'.$host.'/'.$self[1].'/img/');
$images = scandir('./img');
if (false !== $images) {
    $imgarray = preg_grep('/\\.(?:jpe?g)$/', $images);
	foreach($imgarray as $row) { 
?>  
			<a class="fancybox-thumb2" rel="gallery1" href="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>">
			<img src="<?php echo HTTP_URL,htmlspecialchars(urlencode($row));?>" width="150" class="img-responsive" alt=""/></a>
<?php }} ?>
		</div>
	</div>	
		
</div>    

<?php include($root."blocks/footer.php"); ?>