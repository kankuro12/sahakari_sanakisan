   <!-- Facts Start -->

   <div class="container-fluid facts my-5 py-5">
       <div class="container py-5">
           <div class="row g-5">
               @for ($i = 1; $i <= 6; $i++)
                   <div class="col-md-4 col-sm-6 col-lg-4 text-center wow fadeIn"
                       data-wow-delay="{{ 0.1 + ($i - 1) * 0.2 }}s">
                       <div class="single">
                           <i class="fas {{ $curdata['icon' . $i] }} fa-3x text-white mb-3"></i>
                           <h1 class="display-4 text-white" data-toggle="counter-up">{{ $curdata['num' . $i] }}</h1>
                           <span class="fs-5 text-white">{{ $curdata['title' . $i] }}</span>
                       </div>
                   </div>
               @endfor

           </div>
       </div>
   </div>

   <!-- Facts End -->
