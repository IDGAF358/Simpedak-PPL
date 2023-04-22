@extends('layouts.owner.app')

@section('content')
<div class="intro-y flex flex-col sm:flex-row items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Data Bahan Jadi
    </h2>
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <!-- BEGIN: Add Modal Button --->
        <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview" class="button text-white bg-theme-1 shadow-md mr-2">+ Tambah Bahan Jadi</a>
        <!-- END: Add Modal Button --->
        <!-- BEGIN: Add Modal Add --->
        <div class="modal" id="header-footer-modal-preview">
            <div class="modal__content modal__content--lg relative"> 
                <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Data Bahan Jadi
                    </h2>
                </div>
                <div class="p-5" id="vertical-form">
                    <div class="preview">
                        <div>
                            <label>Nama</label>
                            <input type="text" class="input w-full border mt-2" placeholder="Masukkan nama bahan jadi">
                        </div>
                        <div class="mt-3">
                            <label>Jumlah</label>
                            <input type="number" class="input w-full border mt-2" placeholder="Masukkan jumlah bahan jadi">
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
                            <label>Harga</label>
                            <div class="relative mt-2">
                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">Rp</div> <input type="number" class="input px-12 w-full border col-span-4" placeholder="Masukkan harga barang jadi">
                                <div class="absolute top-0 right-0 rounded-r w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600">.00</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label>Resep <span class="text-gray-500">(Jika tidak perlu resep, boleh dikosongi)</span> </label>
                            <div class="flex gap-2">
                                <select data-hide-search="true" class="select2 w-full">
                                    <option value="Susu Sapi">Susu Sapi</option>
                                    <option value="Strawberry">Strawberry</option>
                                </select>
                                <input type="number" class="input border h-10" placeholder="Masukkan jumlah bahan jadi">
                                <button class="button inline-block mr-1 mb-2 border border-theme-1 text-theme-1" onclick="addInput()">+</button>
                            </div>
                            <div class="input-container"></div>
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
        <!-- END: Add Modal Add --->
        <!-- BEGIN: Add Modal Receipt --->
        <div class="modal" id="receipt-modal-preview">
            <div class="modal__content modal__content relative"> 
                <a data-dismiss="modal" href="javascript:;" class="absolute right-0 top-0 mt-3 mr-3"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i> </a>
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Resep Susu Strawberry
                    </h2>
                </div>
                <div class="p-5" id="vertical-form">
                    <ul class="flex flex-col">
                        <li class="flex gap-3"><i data-feather="disc"></i> Susu 5 Liter</li>
                        <li class="flex gap-3"><i data-feather="disc"></i> Susu 5 Liter</li>
                        <li class="flex gap-3"><i data-feather="disc"></i> Susu 5 Liter</li>
                        <li class="flex gap-3"><i data-feather="disc"></i> Susu 5 Liter</li>
                        <li class="flex gap-3"><i data-feather="disc"></i> Susu 5 Liter</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Modal Receipt --->
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
                <th class="border-b-2 text-center whitespace-no-wrap">HARGA</th>
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
                        <div class="intro-x w-10 h-10 image-fit"></div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5">
                            <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                        </div>
                        <div class="intro-x w-10 h-10 image-fit -ml-5"></div>
                    </div>
                </td>
                <td class="text-center border-b">113</td>
                <td class="w-40 border-b">
                    <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                </td>
                <td class="text-center border-b">Rp100.000,00</td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        <a class="flex items-center mr-3" href="javascript:;" data-toggle="modal" data-target="#receipt-modal-preview"> <i data-feather="book-open" class="w-4 h-4 mr-1"></i> Resep </a>
                        <a class="flex items-center mr-3 text-yellow-700" href=""> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<!-- END: Datatable -->
@push('script')
    <script>
        function addInput() {
            const inputContainer = document.querySelector('.input-container');
            const newInput = document.createElement('div');
            newInput.className="flex gap-2";
            newInput.innerHTML = `<select data-hide-search="true" class="select2 w-full border">
                                    <option value="Susu Sapi">Susu Sapi</option>
                                    <option value="Strawberry">Strawberry</option>
                                </select>
                                <input type="number" class="input border h-10" placeholder="Masukkan jumlah bahan jadi">
                                <button class="button inline-block mr-1 mb-2 border border-theme-6 text-theme-6" onclick="removeElement(this)">-</button>`;
            window.requestAnimationFrame(() => {
                // panggil fungsi Select2 pada elemen select yang baru saja ditambahkan
                $('.select2').select2();
            });
            inputContainer.appendChild(newInput);
        }

        function removeElement(button) {
            const parent = button.parentElement.parentElement;
            parent.removeChild(button.parentElement);
        }
    </script>
@endpush
@endsection