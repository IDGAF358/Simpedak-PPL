@extends('layouts.owner.app')

@section('content')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Bahan Baku
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <!-- BEGIN: Add Modal Button --->
        <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="button text-white bg-theme-1 shadow-md mr-2">+ Tambah Bahan Baku</a>
        <!-- END: Add Modal Button --->
        <!-- BEGIN: Add Modal Add --->
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content">
                <div class="intro-y box">
                    <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                        <h2 class="font-medium text-base mr-auto">
                            Data Bahan Baku
                        </h2>
                    </div>
                    <div class="p-5" id="vertical-form">
                        <div class="preview">
                            <div>
                                <label>Nama</label>
                                <input type="text" class="input w-full border mt-2" placeholder="Masukkan nama bahan baku">
                            </div>
                            <div class="mt-3">
                                <label>Jumlah</label>
                                <input type="number" class="input w-full border mt-2" placeholder="Masukkan jumlah bahan baku">
                            </div>
                            <div class="mt-3">
                                <label>Satuan</label>
                                <select data-hide-search="true" class="select2 w-full">
                                    <option value="Pieces">Pieces</option>
                                    <option value="Packages">Packages</option>
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Ton">Ton</option>
                                    <option value="Buah">Buah</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label>Gambar</label>
                                <input type="file" class="input w-full border mt-2">
                            </div>
                            <button type="button" class="button bg-theme-1 text-white mt-5">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Begin Modal Add --->
        <div class="dropdown relative ml-auto sm:ml-0">
            <button class="dropdown-toggle button px-2 box text-gray-700">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-box mt-10 absolute w-40 top-0 right-0 z-20">
                <div class="dropdown-box__content box p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:text-green-700 rounded-md"> <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> Export Excel </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:text-red-700 rounded-md"> <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> Export PDF </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BEGIN: Datatable -->
<div class="intro-y datatable-wrapper box p-5 mt-5">
    <table class="table table-report table-report--bordered display datatable w-full">
        <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">NAMA</th>
                <th class="border-b-2 text-center whitespace-no-wrap">GAMBAR</th>
                <th class="border-b-2 text-center whitespace-no-wrap">JUMLAH</th>
                <th class="border-b-2 text-center whitespace-no-wrap">SATUAN</th>
                <th class="border-b-2 text-center whitespace-no-wrap">AKSI</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">Dell XPS 13</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">Dell XPS 13</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">113</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Resep </a>
                        <a class="flex items-center mr-3 text-yellow-700" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<!-- END: Datatable -->
@endsection