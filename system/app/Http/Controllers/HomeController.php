<?php

namespace App\Http\Controllers;

class HomeController extends Controller
 {

    function showBeranda(){
        return view('admin.beranda');
    }

    function showKategori(){
        return view('admin.kategori');
    }

    function showProduk(){
        return view('admin.produk');
    }

    function showPromo(){
        return view('admin.promo');
    }

    function showPelanggan(){
        return view('admin.pelanggan');
    }

    function showSupplier(){
        return view('admin.supplier');
    }


}