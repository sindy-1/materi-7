<?php 
namespace App\Http\Controllers;

class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}

	function test($produk, $hargaMin = 0, $hargaMax = 0){
		if($produk== 'celana'){
			echo "Tampilkan produk celana";
		}elseif($produk== 'baju rajut'){
			echo "Produk Sepeda";
		}
		echo "<br>";
 		echo "hargaMin adalah $hargaMin <br>";
		echo "hargaMax adalah $hargaMax <br>";
	}
}

