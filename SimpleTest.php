<?php
    //TestCase adalah kelas dasar yang digunakan untuk menulis tes dalam PHPUnit.
    use PHPUnit\Framework\TestCase;

    //Ini adalah penyertaan (require_once) dari berkas "Wordcount.php" yang akan diuji. 
    //Kelas "Wordcount" harus ada dalam berkas ini.
    require_once "Wordcount.php";

    //kelas pengujian yang menggantung pada kelas TestCase dari PHPUnit. 
    //Semua metode pengujian akan didefinisikan di dalam kelas ini.
    class SimpleTest extends TestCase
    {
        //metode pengujian yang akan menguji metode countWords dari kelas "Wordcount".
        public function testCountWords()
        {
            //pembuatan instance objek dari kelas "Wordcount". Anda siap untuk menguji metodenya.
            $Wc = new Wordcount();

            //menyiapkan data uji untuk metode countWords. Dalam hal ini, kalimat "My name is Joko" mengandung 4 kata.
            $TestSetence = "My name is Joko"; // 4 kata ...
            // memanggil metode countWords dari objek $Wc dan menyimpan hasilnya dalam variabel $WordCount.
            $WordCount = $Wc->countWords($TestSetence);
        

        //menggunakan metode assertEquals dari kelas TestCase untuk membandingkan hasil yang diperoleh dari pemanggilan countWords  
        //dengan nilai yang diharapkan. Dalam contoh ini, Anda mengharapkan hasilnya adalah 4 kata.
        $this->assertEquals(4, $WordCount);
        }
    }
?>