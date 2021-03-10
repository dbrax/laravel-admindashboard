<div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">




    <div class="px-4 md:px-10 mx-auto w-full">
      <div>
        <!-- Card stats -->
        <div class="flex flex-wrap">

            @foreach($default_stats as $card)

    
          
          <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
            >
              <div class="flex-auto p-4">
                <div class="flex flex-wrap">
                  <div
                    class="relative w-full pr-4 max-w-full flex-grow flex-1"
                  >

                    <h5 class="text-gray-500 uppercase font-bold text-xs">
                        {{$card['title']}}
                    </h5>
                    <span class="font-semibold text-xl text-gray-800">
                      {{$card['modal_count']}}
                    </span>
                  </div>
                  @if($hide_card_icon==0) 

                  <div class="relative w-auto pl-4 flex-initial">
                       <div
                      class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                    >
                  <i class="far fa-chart-bar"></i>
                    </div>


                  </div>

                  @endif   



                </div>
               
     <p class="text-sm text-gray-500 mt-4">
               <!--   <span class="text-green-500 mr-2">
                    <i class="fas fa-arrow-up"></i> 3.48%
                  </span>
                  <span class="whitespace-no-wrap">
                    Since last month
                  </span> -->

                </p>


              </div>
            </div>
          </div>

          @endforeach


      
  
        </div>
      </div>
    </div>



    




  </div>


  