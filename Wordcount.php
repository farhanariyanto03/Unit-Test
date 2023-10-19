<?php
    //deklarasi kelas dengan nama "Wordcount". Kode dalam kelas ini akan digunakan untuk menghitung jumlah kata dalam kalimat
    class Wordcount
    {
        //deklarasi metode publik dengan nama "countWords". 
        //Metode ini menerima satu parameter, yaitu $sentence, yang merupakan string yang akan dihitung jumlah katanya.
        public function countWords($sentence)
        {
            // fungsi PHP yang digunakan untuk memecah string menjadi array, dengan pemisah yang ditentukan. 
            //Di sini, string $sentence akan dipisahkan berdasarkan spasi (spasi adalah pemisah).
            return count(explode(" ", $sentence));
        }
    }
?>

<?php
    //Unit test adalah jenis pengujian perangkat lunak yang bertujuan untuk menguji komponen perangkat lunak secara terisolasi, 
    //biasanya unit-unit kecil atau fungsi-fungsi dalam kode. 
    //Tujuan utama dari unit test adalah untuk memverifikasi bahwa setiap bagian kecil dari kode bekerja sesuai yang diharapkan.
?>