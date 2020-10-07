<?php
$merk = [
    ["Leptop", "Acer Aspire", 7149000],
    ["Leptop", "Asus E402YA", 3499000],
    ["Leptop", "Asus X441BA", 3750000],
    ["Leptop", "HP ProBook 440 G6", 13699000],
    ["Leptop", "DEEL Inspiron 14", 13099000],
    ["Leptop", "Acer Swift3", 7099000],
    ["Leptop", "Apple MacBook Pro 13", 21599000],
    ["Leptop", "Apple MacBook Air 13", 14210000],
    ["Leptop", "Asus ROG Zephyrus Duo 15", 94999000],
    ["Leptop", "Apple Macbook 512GB", 18350000],
    ["HandPhone", "Vivo Y20", 1950000],
    ["HandPhone", "Xiaomi Redmi 9C", 1475000],
    ["HandPhone", "Nokia 5.3", 2899000],
    ["HandPhone", "Realme 7i", 2849000],
    ["HandPhone", "Realme C15", 1500000],
    ["HandPhone", "Samsung Galaxy A10", 1450000],
    ["HandPhone", "OPPO Reno", 4379900],
    ["HandPhone", "Xiaomi Redmi Note 9", 2209000],
    ["HandPhone", "Vivo Y12", 1610000],
    ["HandPhone", "OPPO A52", 2800000],
    ["iPad", "Apple iPad 10.2", 7299000],
    ["iPad", "Apple iPad 12.9", 16396000],
    ["iPad", "Apple iPad 2 Wifi 16GB", 6150000],
    ["iPad", "Apple iPad Wifi 128GB", 5919000],
    ["iPad", "Apple iPad 4 Wifi ", 8450000],
    ["iPad", "Apple iPad Pro 12.9", 11669000],
    ["iPad", "Apple iPad Air Wifi 128GB", 5919000],
    ["iPad", "Apple iPad Mini", 5460000],
    ["iPad", "Apple iPad Pro", 14900000],
];

// Membuat Pilihan
$temp_arr=[];
foreach ($merk as $key) {
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);

?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Jual Beli Barang Electronik Murah & Terpecaya</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <div class="d-flex mx-auto">
        <h3 class="d-flex mx-auto" id="title">~ Harga Jual Beli Barang Electronik ~</h3>
    </div>
    <div class="d-flex">
        <form class="d-flex mx-auto" action="remidi.php" method="post">
            <select name="filter">
                <option value="">
                    Tampilkan Semua
                </option>
                <?php foreach ($pilihan as $key): ?>
                    <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
                <?php endforeach; ?>      
            </select>
            <div>
                <input type="submit" value="filter">
            </div>
            
        </form>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col-4">TYPE</th>
      <th scope="col-4">BRAND</th>
      <th scope="col-4">HARGA</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody>
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo "Rp. ".$value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col-4">Total Keseluruhan</th>
      <th scope="col-4"></th>
      <th scope="col-4"><?php echo "Rp. ".$grand_total; ?></th>
    </tr>
  </thead>

</table>
        </div>
    </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>