<?php 
  $karyawan = array(
    array(
      'No'=>1,
      'Nama'=>'Alifa',
      'TTL'=>'12-10-1998',
      'Jenis Kelamin'=>'Perempuan',
      'Level'=>'Amateur',
      'Status'=>'Fulltime',
      'Gaji'=>3500000,
    ),

    array(
      'No'=>2,
      'Nama'=>'Arif',
      'TTL'=>'11-11-1997',
      'Jenis Kelamin'=>'Laki-laki',
      'Level'=>'Junior',
      'Status'=>'Fulltime',
      'Gaji'=>2000000,
    ),

    array(
      'No'=>3,
      'Nama'=>'Anisa',
      'TTL'=>'13-07-1998',
      'Jenis Kelamin'=>'Perempuan',
      'Level'=>'Senior',
      'Status'=>'Parttime',
      'Gaji'=>5000000*0.5,
    ),

    array(
      'No'=>4,
      'Nama'=>'Rifki',
      'TTL'=>'22-01-1996',
      'Jenis Kelamin'=>'Laki-laki',
      'Level'=>'Senior',
      'Status'=>'Fulltime',
      'Gaji'=>5000000,
    ),

    array(
      'No'=>5,
      'Nama'=>'Kiki',
      'TTL'=>'26-03-1999',
      'Jenis Kelamin'=>'Laki-laki',
      'Level'=>'Amateur',
      'Status'=>'Parttime',
      'Gaji'=>3500000*0.5,
    )
  );

  abstract class Karyawan
  {
    public $karyawan;

    abstract public function gajiKaryawan() : int;
  }

  class Fulltime extends Karyawan
  {
    public $karyawan;

    public function gajiKaryawan() : int
    {
      foreach ($GLOBALS['karyawan'] as $k) {
        if ($k['Level']=='Junior') {
        return 2000000;
      } elseif ($k['Level']=='Amateur') {
        return 3500000;
      } elseif ($k['Level']=='Senior') {
        return 5000000;
      }
      }
    }
  }

  class Parttime extends Karyawan
  {
    public $karyawan;

    public function gajiKaryawan() : int
    {
      foreach ($GLOBALS['karyawan'] as $k) {
        if ($k['Level']=='Junior') {
        return 2000000*0.5;
      } elseif ($k['Level']=='Amateur') {
        return 3500000*0.5;
      } elseif ($k['Level']=='Senior') {
        return 5000000*0.5;
      }
      }
    }
  }

  $fulltime = new Fulltime();
  $parttime = new Parttime();
  
  foreach ($karyawan as $k) {
    $k['Gaji'] = $fulltime->gajiKaryawan();
  }
  #$karyawan[]['Gaji'] = $fulltime->gajiKaryawan();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Karyawan</title>
</head>
<body style="padding: 100px 30px; margin: 20px; background:lightblue">
  <h1 style="text-align:center;">Data Karyawan</h1>
<table border="1" width="900" align="center" height="400px"> 
  <tr style="height: 40px;">
    <td style="text-align:center"><strong>No</strong></td>
    <td style="text-align:center"><strong>Nama</strong></td>
    <td style="text-align:center"><strong>TTL</strong></td>
    <td style="text-align:center"><strong>Jenis Kelamin</strong></td>
    <td style="text-align:center"><strong>Level</strong></td>
    <td style="text-align:center"><strong>Status</strong></td>
    <td style="text-align:center"><strong>Gaji</strong></td>
  </tr>
  <?php foreach($karyawan as $k){
    ?>
    <tr style="height: 30px;">
      <td style="text-align:center"><?php echo $k['No']; ?></td>
      <td style="text-align:center"><?php echo $k['Nama']; ?></td>
      <td style="text-align:center"><?php echo $k['TTL']; ?></td>
      <td style="text-align:center"><?php echo $k['Jenis Kelamin']; ?></td>
      <td style="text-align:center"><?php echo $k['Level']; ?></td>
      <td style="text-align:center"><?php echo $k['Status']; ?></td>
      <td style="text-align:center"><?php echo $k['Gaji']; ?></td>
    </tr>
  <?php } ?>
</table>
</body>
</html>
