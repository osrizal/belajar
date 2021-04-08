<?php 
function tampil(){
    echo "tampil";

}

function nama($nm){
    echo $nm;
}

// nama("zul osrizal");
// nama("Putra");
// nama("Putri");



function tambah($angka1, $angka2, $angka3){
    echo $angka1 + $angka2 + $angka3;


}
// tambah(2, 3, 4);

// function kurang($angka1, $angka2, $angka3){
//     echo $angka1 - $angka2 - $angka3;

// }
// kurang(7, 4, 2);



// function menampilkan($tampil){

//     echo "nama saya ". $tampil;
    
// }
// menampilkan("zul osrizal");


// function umur($umur){
//     echo "umur saya". $umur;

// }
// umur(24);


function perkalian($angka1, $angka3, $angka2){
    echo $angka1 * $angka2 * $angka3;

}
// perkalian(2, 3, 4);


function umur($a){
    if ($a>18){
        echo "sudah dewasa". $a; 
    }
    
    else {
        echo "belum deawasa". $a;

    }
}

// umur(24);


// function perulangan($b){
//     for($i=0; $i <=$b ;$i++ ){
//         echo $i;
//     }
// }

// // perulangan(100);

function persegi($p){
    echo $p * $p;
    
}
//  persegi(16); 
 
 
 function genap_ganjil($c){
       if ($c %2==1){
        echo "ini adalah ganjil". $c;
       }
       else {
           echo "ini adalah genap" . $c;
       }

 }
genap_ganjil(3);
    
?>