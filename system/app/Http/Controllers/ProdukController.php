<?php 

namespace App\Http\Controllers;
use App\Produk;

class ProdukController extends controller{
	function index(){
		$id_user = request()->user()->id;
		$data['list_produk'] = Produk::where('id_user', $id_user );
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk= new Produk;
		$produk-> nama = request('nama');
		$produk-> berat = request('harga');
		$produk-> harga = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with ('success', 'Data Berhasil Ditambahkan');
	}
	function show(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(Produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data)->with ('warning', 'Data Berhasil di edit');
	}
	function update(Produk $produk){
		$produk-> nama = request('nama');
		$produk-> berat = request('harga');
		$produk-> harga = request('berat');
		$produk-> stok = request('stok');
		$produk-> deskripsi = request('deskripsi');
		$produk->save();

		return redirect('produk')->with ('danger', 'Data Berhasil di update');
	}
	function destroy(Produk $produk){
		$produk->delete();

		return redirect('produk')->with ('danger', 'Data Berhasil dihapus');

		}
	function filter(){
		$nama =request('nama');
		$stok = explode(",", request('stok'));
		$data['harga_min']= $harga_min = request('harga_min');
		$data['harga_max']= $harga_max=  request('harga_max');
		//$data['list_produk'] = Produk:: where('nama', 'like', "%$nama%")-> get();
		//$data['list_produk'] = Produk:: wherein('stok', [$stok])-> get();
		//$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])-> get();
		//$data['list_produk'] = Produk:: where('stok', '<>', [$stok])-> get();
		//$data['list_produk'] = Produk:: notwhereNotIn('stok', [$stok])-> get();
		//$data['list_produk'] = Produk:: whereNotBetween('harga', [$harga_min, $harga_max])-> get();
		//$data['list_produk'] = Produk:: whereNotNull('stok')-> get();
		//$data['list_produk'] = Produk:: whereDate('created_at', '2020-11-24')-> get();
		$data['list_produk'] = Produk:: whereBetween('harga', [$harga_min, $harga_max])->WhereNotIn('stok', [3])->WhereYear('created_at', '2020')-> get();

		$data['nama'] = $nama;
		$data['stok'] = request ('stok');
		return view('produk.index', $data);
	} 
}