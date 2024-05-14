@extends('_layouts.main') 

@section('content')
<main>
    <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
        <!-- Breadcrumb Start -->
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="text-title-md2 font-bold text-black dark:text-white">
                Tables
            </h2>

            <nav>
                <a
                    href="/movies/create"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"
                >
                    Create
                </a>
            </nav>
        </div>
        <!-- Breadcrumb End -->

        <!-- ====== Table Section Start -->
        <div class="flex flex-col gap-10">
            <!-- ====== Table Two Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">id</p>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                        <p class="font-medium">name</p>
                    </div>
                    <br>
                    <div class="col-span-3 flex items-center">
                        <p class="font-medium">description</p>
                    </div>
                    
                </div>

                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                               
                            </div>
                            <p class="text-sm font-medium text-black dark:text-white">
                                1
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                    <img src="src/images/movie/movie-01.jpg" alt="Product" />
                        <p class="text-sm font-medium text-black dark:text-white">
                        
                        </p>
                    </div>
                    <br>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        JoJo's Bizarre Adventure adalah anime petualangan yang tidak selalu berlatar di satu tempat.
                        Anime juga selalu memiliki cara yang unik dalam memperkenalkan karakter baru atau kekuatan baru. Hal yang membuat anime ini semakin unik adalah kebanyakan protagonis dalam seri ini selalu diperkenalkan sebagai antagonis. Namun, mereka berubah setelah mereka berhasil dikalahkan oleh para keturunan Joestar.



                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class=""></a>
                            <a href="" class=""></a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                               
                            </div>
                            <p class="text-sm font-medium text-black dark:text-white">
                                2
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                    <img src="src/images/movie/movie-02.jpg" alt="Product" />
                        <p class="text-sm font-medium text-black dark:text-white">
                        
                        </p>
                    </div>
                    <br>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Serial anime bergenre supranatural ini menceritakan seorang siswi SMP bernama Hiyori Iki.
                        Serial anime yang diadaptasi dari manga Jepang karya Adachitoka ini sudah tayang di Jepang sejak 2014.



                        </p>
                    </div>
                    <div class="col-span-1 flex items-center">
                        <div class="flex items-center space-x-1">
                            <a href="" class=""></a>
                            <a href="" class=""></a>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-6 border-t border-stroke px-4 py-4.5 dark:border-strokedark sm:grid-cols-8 md:px-6 2xl:px-7.5">
                    <div class="col-span-3 flex items-center">
                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center">
                            <div class="w-12 rounded-md">
                            </div>
                            <p class="text-sm font-medium text-black dark:text-white">
                                3
                            </p>
                        </div>
                    </div>
                    <div class="col-span-1 items-center sm:flex">
                    <img src="src/images/movie/movie-03.jpg" alt="Product" />
                        <p class="text-sm font-medium text-black dark:text-white">
                        
                        </p>
                    </div>
                    <br>
                    <div class="col-span-3 flex items-center">
                        <p class="text-sm font-medium text-black dark:text-white">
                        Wind Breaker, sebuah judul anime terbaru bergenre aksi yang bertema sekolah ini diadaptasi dari manga dengan judul serupa ciptaan Satoru Nii. 
                        Pada Wind Breaker ini berfokus pada Haruka Sakura yang tak ingin berurusan dengan orang lemah, ia hanya tertarik pada orang yang kuat.  Sakura kemudian masuk ke SMA Furin yang sudah dikenal sebagai sekolah yang sering tawuran.
                        </p>
                    </div>
                    
                    
                    
                    
                    
                    </div>
                </div>
            </div>

            <!-- ====== Table Two End -->
        </div>
        <!-- ====== Table Section End -->
    </div>
</main>
@endsection