<!DOCTYPE html>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap');
    h1 {
        font-family: 'Noto Serif', serif;
        text-align: center;
        color: #FFFFFF;
        background-color: #4682B4;
    }

    @import url('https://fonts.googleapis.com/css2?family=Bitter:wght@300&display=swap');
    table {
    font-family: 'Bitter', serif;
    width: 1050px;
    border-collapse: collapse;
    margin: 50px auto;
    background-color: #F5FFFA;
    }

    th {
        background: #4682B4;
        color: #FFFFFF;
        font-weight: bold;
    }

    td, th {
        padding: 20px;
        border: 1px solid #ccc;
        text-align: center;
        font-size: 16px;
    }
 
</style>
</head>  

<body style ="background-color:#87CEEB;">
<h1>Data Karyawan</h1>

<!-- hitung haji -->
<?php
$senior = array(5000000, 5000000, 5000000, 5000000, 5000000);
$amateur = array(3500000, 3500000, 3500000, 3500000, 3500000);
$junior = array(2000000, 2000000, 2000000, 2000000, 2000000);
$partsenior = array();
$partamateur = array();
$partjunior = array();

for($x = 0; $x <= 4; $x++) {
    $partsenior[$x] = $senior[$x]/2;
    $partamateur[$x] = $amateur[$x]/2;
    $partjunior[$x] = $junior[$x]/2; 
}

// karyawan (abstract, parent)
abstract class karyawan {
    public $nama;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract public function intro() : string;
}

//nama karyawan (child)
class fulltime extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class parttime extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class senior extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class amateur extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

class junior extends karyawan {
    public function intro() : string {
        return $this->nama;
    }
}

$full = new fulltime("Full time");
$part = new parttime("Part time");
$status = array($full->intro(), $part->intro());

$seniorlvl = new senior("Senior");
$amateurlvl = new amateur("Amateur");
$juniorlvl = new junior("Junior");
$level = array($seniorlvl->intro(), $amateurlvl->intro(), $juniorlvl->intro());

$gender = array("Pria", "Pria", "Wanita", "Pria", "Wanita");
$dob = array("Malang - 08/11/1995", "Bogor - 23/08/1996", "Medan - 09/11/1996", "Binjai - 08/11/1998", "Bandung - 12/12/1999");

$array = [
array("1","Neba", "$dob[0]", "$gender[0]", "$level[0]", "$status[0]", "$senior[0]"),
array("2","Gonna", "$dob[1]", "$gender[1]", "$level[1]", "$status[1]", "$partamateur[0]"),
array("3","Gibb", "$dob[2]", "$gender[2]", "$level[2]", "$status[0]", "$junior[2]"),
array("4","Yuu", "$dob[3]", "$gender[3]", "$level[2]", "$status[1]", "$partjunior[3]"),
array("5","App", "$dob[4]", "$gender[4]", "$level[1]", "$status[0]", "$amateur[4]")
];
 
echo "<table border='1'";
echo "<tr><th>No</th><th>Nama Karyawan</th><th>Tempat Tanggal Lahir</th><th>Jenis Kelamin</th><th>Level Karyawan</th><th>Status</th><th>Gaji Karyawan</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>