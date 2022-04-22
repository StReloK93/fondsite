@extends('app')
@section('content') 

   <div class="site-section-cover overlay bg-light" style="background-image: url('/images/2.jpg')" data-aos="fade">
      <div class="container">
         <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-10">

            <div class="box-shadow-content">
               <div class="block-heading-1">
                  <h1 class="mb-4" data-aos="fade-up" data-aos-delay="100">"NKMK jamg'armasi" DM rahbariyati</h1>
               </div>
            </div>
            </div>
         </div>
      </div>
   </div>
   <section class="site-section" id="blog-section">
      <aside class="container">
         <main class="row">
            <div class="col-12 text-center mb-5">
               <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
                     <h2>Rahbariyat</h2>
               </div>
            </div>
         </main>
         <main class="row">
            <!-- card -->
            @foreach ($peoples as $item)
               <div class="col-md-3 col-lg-3" data-aos="fade-up" data-aos-delay="">
                  <h5>
                     @if ($item->id == $id)
                     <span>{{$item->title}}</span>
                     @else
                     <a href="/rahbariyat/{{$item->id}}">{{$item->title}}</a>
                     @endif
                  </h5>
               </div>
            @endforeach

            @foreach ($peoples as $item)
            @if($item->id == $id)
            <section class="site-section">
               <div class="container">
                 <div class="row">
                   <div class="mx-auto blog-content">
                     <p class="text-center"><img src="{{$item->image}}" alt="Image" class="img-fluid"></p>
                     {!!$item->description!!}
                   </div>
                   
                 </div>
               </div>
             </section>
             @endif
            @endforeach
         </main>
      </aside>
   </section>
@endsection
