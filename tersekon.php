<?php
class database{
    var $host = "localhost";
    var $username = " root";
    var $password = "";
    var $database = "akademik";
    var $koneksi = "";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
		if (mysqli_connect_errno()) {
			echo "Koneksi database gagal: ".mysqli_connect_error();
		}
    }
    function tampilkan_data(){
        $data = mysqli_query ($this->koneksi, "SELECT * FROM mahasiswass");
        while ($row = mysqli_fetch_array($data)){
            $hasil [ ] = $row;
        }
        return $hasil;
    }
    function tambah_data($nim,$nama,$email,$hp,$prodi){
		mysqli_query($this->koneksi,"INSERT INTO mahasiswass VALUES ('{$nim}','{$nama}','{$email}','{$hp}','{$prodi}')");
	}
}
?>