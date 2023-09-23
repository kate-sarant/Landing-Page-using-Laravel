

<div class="lg-h[650px] max-lg:mb-[30px]">
    
    <div class="pt-[62px]">
        <div class="flex justify-center font-bold text-font-blue "><p class="max-lg:font-[14px] font-source_sans_proBold lg:font-[12px]">Επικοινωνια</p>
        </div>
     <center>   <p class='my-5 text-hover-red'>{{session('success')}}</p></center>
        
        <div class="flex justify-center max-lg:hidden" >
            <hr class="text-[#eeee] w-[740px] shadow-sm shadow-white-f">
        </div>

      
        <div class="flex justify-center">
            <form  action="{{ route('form') }}" method="POST" class="lg:w-[619px] max-lg:w-[90%] h-[450px] lg:mb-[80px]">
               @csrf
               <!-- fullname -->
                <div class="xl:w-[610px] xl:h-[65px] max-lg:[w-90%] my-2">
                @if ($errors->has('fullname'))
                <span class="text-red-500 text-[14px]  float-right">{{ $errors->first('fullname') }} </span>
                @endif

                    <label  class="text-xs" for="fullname">Ονοματεπώνυμο</label>
                    <input class="{{$errors->has('fullname') ?'text-bg-red':'' }}
                    capitalize pl-4 w-[100%] h-[46px] rounded border-light-grey border shadow-sm shadow-light-grey"
                     type="text" 
                     name='fullname'
                     id='fullname'
                     >
                    
                </div>
                <!-- phone num -->
                <div class="xl:w-[610px] xl:h-[65px] max-lg:[w-90%] my-2">
                @if ($errors->has('phone'))
                <span class="text-red-500 text-[14px]  float-right">{{ $errors->first('phone') }} </span>
                                        @endif

                    <label class="text-xs"  for="phone">Τηλέφωνο</label>
                    <input class="
                     {{$errors->has('number') ?'is-danger':'' }}
                     pl-8 w-[100%] h-[46px]  rounded border-light-grey border shadow-sm shadow-light-grey"
                     type="number" 
                     name='phone'
                     id='phone'
                     >
                   
                    <img class='relative bottom-8 left-2' src="../images/form_icons/phone.svg" alt="mail icon">
                
                </div>
                <!-- email -->
                <div class="xl:w-[610px] xl:h-[65px] max-lg:[w-90%] my-2">
                               @if ($errors->has('email'))
                                            <span class="text-red-500 text-[14px]  float-right">{{ $errors->first('email') }}</span>
                                        @endif
                    <label  class="text-xs" for="email">Email</label>
                    <input class="
                  
                    pl-8 w-[100%] h-[46px] rounded border-light-grey border shadow-sm shadow-light-grey" 
                    name='email'
                    id='email'
                    type="email"
                    >
                
                    <img class='relative bottom-8 left-2' src="../images/form_icons/mail.svg" alt="mail icon">
                    
                </div>
                    <!-- message -->
                <div class="xl:w-[610px] xl:h-[138px] max-lg:[w-90%]">
                @if ($errors->has('message'))
                                            <span class="text-red-500 text-[14px]  float-right">{{ $errors->first('message') }}</span>
                                        @endif
                    <label  class="text-xs" for="message">Μήνυμα</label>
                    <textarea  class="

                    pl-4 w-[100%] h-[120px] rounded border-light-grey border shadow-sm shadow-light-grey" 
                    for='msg'

                    minlength='3'
                    id='message'
                    value ="{{old('message')}}"
                    name="message" 
                
                    ></textarea>
                </div>
                <div class="flex justify-center max-lg:hidden mx-[10px] mt-[35px] mb-[15px]" >
                    <hr class="text-[#eeee] w-[740px] shadow-sm shadow-white-f">
                </div>
                    <!-- submit btn -->
                <button  class='
                relative top-[20px] font-source_sans_proBold font-[14px] bg-hover-red text-white float-right w-[240px]
                 h-[50px] rounded max-lg:w-[130px] max-lg:h-[50px]shadow-sm' type="submit" name="contact_form">
                    <div class='flex justify-evenly'>
                    <p>ΑΠΟΣΤΟΛΗ</p>
                    <img src="../images/icons/button_icon.svg" alt="arrow_icon"/>
                    </div>
                </button>

            
            </form>
        </div>
            
 </div>

</div>
