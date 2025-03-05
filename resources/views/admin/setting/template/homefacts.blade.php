   <!-- Facts Start -->

   {{-- <div class="container-fluid facts my-5 py-5">
       <div class="container py-5">
           <div class="row g-5">
               @for ($i = 1; $i <= 6; $i++)
                   <div class="col-md-4 col-sm-6 col-lg-4 text-center wow fadeIn"
                       data-wow-delay="{{ 0.1 + ($i - 1) * 0.2 }}s">
                    <div class="single">

                        <h1 data-toggle="counter-up"></h1>
                        <span class="fs-5 text-white"></span>
                    </div>   </div>
               @endfor

           </div>
       </div>
   </div> --}}
   <div _ngcontent-vjb-c94="" class="fact-container">
       <div _ngcontent-vjb-c94="" class="container">
           <div _ngcontent-vjb-c94="" class="row">
               @for ($i = 1; $i <= 6; $i++)
                   <div _ngcontent-vjb-c94="" class="col-lg-4 col-md-6 col-sm-6 col-12">
                       <div _ngcontent-vjb-c94="" class="profile-card">
                           <div _ngcontent-vjb-c94="" class="icon text-white"><img _ngcontent-vjb-c94=""
                                   src="{{ asset($curdata['icon' . $i]) }}" alt="Members"></div>
                           <div _ngcontent-vjb-c94="" class="profile-content">
                               <h6 _ngcontent-vjb-c94="">{{ $curdata['title' . $i] }}</h6>
                               <h5 _ngcontent-vjb-c94="" class="countUp">{{ $curdata['num' . $i] }}</h5>
                           </div>
                       </div>
                   </div>
               @endfor

           </div>
       </div>
   </div>
