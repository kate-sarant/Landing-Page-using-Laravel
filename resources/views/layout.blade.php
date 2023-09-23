<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   


    @vite(['resources/css/app.css'])
 
    <title>Document</title>
</head>
<body class="font-Source_Sans_Pro ">
    <header class="bg-[url('/public/images/bg.png')] bg-cover w-[100%] lg:h-[750px]  max-lg:h-[544px] bg-no-repeat bg-center text-[#EEEE]">
     
       
        <div>
            
                    <div class=" max-lg:top-[25px] relative lg:top-5 " >
                <!-- weather and time -->
                        <div class="flex max-lg:justify-between lg:left-[17rem] relative lg:w-[50%]">   
                               <div  class="inline text-center pt-5 relative max-lg:left-[25px] max-lg:top-[10px] mr-10 ">
                            <p  class="text-xs text-right font-source_sans_proBold" >ΑΡΚΑΔΙΑ</p>
                            <div class="flex max-lg:text-base xl:text-2xl ">
                            <img src="../images/icons/clock.svg" alt="clock"><p class="w-fit font-proxima_nova">13:28</p>
                            </div>
                        </div>
                        <div  class="inline pt-5 relative max-lg:right-[28px]">
                                <p class="text-right text-xs font-source_sans_proBold">ΚΑΤΑΙΓΙΔΑ</p>
                            <div  class="flex ">

                                <img class="p-1" src="../images/icons/weather-cloud-snow.png" alt="weather icon">
                                <div class="flex max-lg:text-base xl:text-2xl font-proxima_nova space-x-1"><p class="font-proxima_nova">12 </p> <p>&#8451;</p>
                                    <p class="text-[#eeeeee6e]">&#8457;</p>
                                </div> 
                            </div>
                        </div>
                    </div>

                       
                    </div>
                    <!-- sign in/out -->
                    <div class="flex bottom-[35px] w-[100%] lg:justify-end relative max-lg:hidden lg:bottom-4 lg:right-10 ">
                        <div class="flex">
                           <img src="../images/icons/user.svg" alt="user icon">
                           <p>Εγγραφή / Συνδεσή</p>
                        </div> 
                        <div class="ml-3" class="flex">
                            <img src="../images/icons/greek_flag.svg" alt="greek flag svg">
                        </div>
                    <a href="#" >  
                    <img  src="../images/icons/down.svg" alt="svg icon">
                    </a>
                    </div>  

       <!-- -------------------------mobile menu bar start -->
       <div class="lg:hidden group absolute top-2 right-0 z-10">
        <div  class="flex justify-end p-4 relative" >
            <img src="../images/icons/icons-burger.svg" alt="button icon">
            
         </div>

         <div class="group-hover:block hidden relative top-[-36px] z-50">
           
            <nav class="rounded bg-white-f text-font-blue w-[300px] h-[380px]">
                <ul class="flex justify-between h-[45px] pt-2 px-2">
                    <li> <a class="flex"  href="/" ><img  src="../images/icons/icons-generic-close.svg" alt="close icon"></a></li>
                    <div class="pr-2">
                    <li class="flex flex-end ">
                        <img src="../images/icons/greek_flag.svg" alt="greek flag svg">
                            <div class="flex "><a href="#" ><img src="../images/icons/down.svg" alt="svg icon">
                            </div>
                        </a>
                    <li>
                    </div>
                  
                </ul>
               
                <div class="flex justify-center pb-8"> 
                 <img src="../images/icons/icon-user_mobile.svg" alt="user icon">
                 <p>Εγγραφή / Συνδεσή</p>
                </div>
                <ul class="text-[14px] font-bold top-3">
                    <li class="group/item "><a href="#" class="flex justify-between pb-3 pl-2 hover:text-hover-red" ><p class='font-'>Η ΟΜΟΣΠΟΝΔΙΑ</p>
                        <img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a>
                        <ul  class="absolute h-[600px] w-[300px] group-hover/item:visible invisible bg-white-f top-[4px] " >
                            <li class=""><a class="flex  pb-6 "    href="/">
                                <img src="../images/icons/icons-chevron-left.png" alt="arrow left">Επιστροφή</a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red" ><a href ="#" >Ιστορία</a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red" ><a href ="#" >Διοικητικό Συμβούλιο</a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red"><a href ="#" >Πρόεδρος - Βιογραφικό Σημείωμα </a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red"><a href ="#" > Μήνυμα Προέδρου </a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red"><a href ="#" > Districts </a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red"><a href ="#" >Διατελεσαντες Προέδροι </a></li>
                            <li class="flex pb-3 pl-5  hover:text-hover-red"><a href ="#" >Αποστολή - Αξίες </a></li>
                            <li class="fle pb-3 pl-5 hover:text-hover-red"><a href ="#" >Πορεία - Εξέλιξη </a></li>
                            <li class="flex pb-3 pl-5 hover:text-hover-red"><a href ="#" >Ο Έλληνας πρέσβης στην Ουάσιγκτον </a></li>
                            <li class="flex pb-3 pl-5 hover:text-hover-red"><a href ="#" >Ο Πρέσβης ΗΠΑ στην Αθήνα </a></li>
                            <li class="flex pb-3 pl-5 hover:text-hover-red"><a href ="#" >Ο Οικουμενικός Πατριάρχης </a></li>
                            <li class="flex pb-3 pl-5 hover:text-hover-red"><a href ="#" >Ο Αρχιεπίσκοπος Αμερικής </a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="flex  justify-between pb-3 pl-2"><p>ΑΡΚΑΔΩΝ ΕΡΓΑ</p><img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a></li>
                    <li ><a class="flex justify-between pb-3 pl-2 hover:text-hover-red"  href="#"><p>ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</p><img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a></li>
                    <li ><a class="flex justify-between pb-3 pl-2 hover:text-hover-red"   href="#"><p>ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</p><img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a></li>
                    <li ><a class="flex justify-between pb-3 pl-2 hover:text-hover-red"  href="#"><p>ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</p><img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a></li>
                    <li ><a class="flex justify-between pb-3 pl-2 hover:text-hover-red"  href="#"><p>ΕΠΙΚΟΙΝΩΝΙΑ</p><img src="../images/icons/arrow_menu.svg" alt="arow_icon"></a></li>
          

                </ul>
            </div>                                      
              
            </nav>
        </div>
     </div>



                    <!-- nav bar full screen -->
                    <div class="h-[60px] bg-[#FFFFFF] rounded max-lg:hidden m-auto lg:w-[95%] left-[40px] top-[70px] max-lg:absolute">
                      

                        <ul class="flex justify-evenly text-blue-800 xl:text-[14px] lg:text-[10px] font-source_sans_proBold text-center lg:w-[80%] xl:w-[80%] relative lg:left-[170px] xl:left-[240px] pt-5 z-10"> 
                            <li class=" hover:text-hover-red group/item" >
                                <a class="font-source_sans_proBold" href="#">Η ΟΜΟΣΠΟΝΔΙΑ</a>
                                 <div class="group-hover/item:block h-[100%] hidden  mt-4">
                                    <ul  class=" text-font-blue bg-white-f w-[275px] h-[450px] rounded-lg py-5 absolute top-[66px]" >
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Ιστορία</a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Διοικητικό Συμβούλιο</a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Πρόεδρος - Βιογραφικό Σημείωμα </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" > Μήνυμα Προέδρου </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" > Districts </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Διατελεσαντες Προέδροι </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Αποστολή - Αξίες </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Πορεία - Εξέλιξη </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Ο Έλληνας πρέσβης στην Ουάσιγκτον </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Ο Πρέσβης ΗΠΑ στην Αθήνα </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red"><a class="text-source_sans_proBold" href ="#" >Ο Οικουμενικός Πατριάρχης </a></li>
                                        <li class="flex pb-3 pl-5 hover:text-hover-red" ><a class="text-source_sans_proBold" href ="#" >Ο Αρχιεπίσκοπος Αμερικής </a></li>
                                    </ul>
                                </div>
                            </li>
            
            
                            <li class="hover:text-hover-red left">
                                <a  href ="#" >ΑΡΚΑΔΩΝ ΕΡΓΑ</a>
                            </li>
                            <li class="hover:text-hover-red ">
                                <a href ="#" >ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a>
                            </li>
                            <li class="hover:text-hover-red ">
                                <a href ="#" >ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a>
                            </li>
                            <li class="hover:text-hover-red ">
                                <a href ="#" >ΕΠΙΣΚΕΨΗ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
                            </li>
                            <li class="hover:text-hover-red ">
                                <a href ="#" >ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a>
                            </li>
                            <li class="text pr-">
                                <a href ="#" class="relative xl:bottom-1 lg:bottom-2" > 
                                    <!-- mail icon -->
                                    <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path  fill-rule="evenodd" clip-rule="evenodd" d="M20 3H4C2.3 3 1 4.3 1 6V18C1 19.7 2.3 21 4 21H20C21.7 21 23 19.7 23 18V6C23 4.3 21.7 3 20 3ZM4 5H20C20.4 5 20.7 5.2 20.9 5.6L12 11.8L3.1 5.6C3.3 5.2 3.6 5 4 5ZM3 18C3 18.6 3.4 19 4 19H20C20.6 19 21 18.6 21 18V7.9L12.6 13.8C12.4 13.9 12.2 14 12 14C11.8 14 11.6 13.9 11.4 13.8L3 7.9V18Z" fill="black"/>
                                        <mask id="mask0_619_1122" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="3" width="22" height="18">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20 3H4C2.3 3 1 4.3 1 6V18C1 19.7 2.3 21 4 21H20C21.7 21 23 19.7 23 18V6C23 4.3 21.7 3 20 3ZM4 5H20C20.4 5 20.7 5.2 20.9 5.6L12 11.8L3.1 5.6C3.3 5.2 3.6 5 4 5ZM3 18C3 18.6 3.4 19 4 19H20C20.6 19 21 18.6 21 18V7.9L12.6 13.8C12.4 13.9 12.2 14 12 14C11.8 14 11.6 13.9 11.4 13.8L3 7.9V18Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_619_1122)">
                                        <path  fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#002868"/>
                                        </g>
                                        </svg>
                                </a>
                            </li>
            
                           </ul> 


                    </div>
                    <!-- logo -->
                    <div class="">
                    <a href="/" class="flex max-lg:justify-center relative max-lg:bottom-[50px] xl:pl-[90px] lg:pl-[53px] lg:bottom-[107px] lg:justify-start " >
                        <img class="w-[180px] border-8 border-hover-red shadow-md rounded-full h-[180px] max-sm:w-[100px]  max-sm:h-[100px] z-0" src="../images/icons/logo.svg" alt="logo">
                       </a>
                    </div>

                    <!--  header PAF_logo_top -->
                    <div class="flex max-lg:justify-center relative  lg:bottom-40 lg:left-72  max-lg:bottom-10 lg:w-[50%] " >
                        <img src="../images/icons/Components-PAF white.svg" alt="Panarcadian Federation founded since 1931">
                    </div>

                  <!--center logo-map -->
                    <div class="flex justify-center">
                    <div class="bg-[url('/public/images/photo.png')] bg-no-repeat lg:h-[450px] lg:w-[450px] max-lg:h-[300px] max-lg:w-[300px] bg-center border-2 border-white-f relative lg:bottom-28 rounded-full">
                        
                            <div class="flex justify-center lg:pt-6 max-lg:pt-2"><img src="../images/icons/welcome_icon.svg" alt="brand icon"></div>
                            <div class="flex justify-center"><p class="font-source_sans_proBold text-[18px]leading-5 mb-5">Η αποστολή μας</p></div>   
                                

                            <div class="flex justify-center">
                                <div class="max-lg:w-[260px] lg:w-[385px] h-[130px] text-center font-Source_Sans_Pro">
                                <p class="lg:leading-7">Ο Παναρκαδικής Ομοσπονδίας Αμερικής είναι μια πανεθνική μη κερδοσκοπικού αδελφό </p>
                                <p class="lg:leading-7 max-lg:truncate max-lg:text-clip">ελληνικό-αμερικανική οργάνωση τα μέλη της οποίας κατεβαίνουν από την περιοχή της Αρκαδίας στην Πελοπόννησο, στη νότια Ελλάδα …</p>
                            </div>

                            </div> 
                        <div class="flex justify-center relative max-lg:top-0 lg:top-9">
                            <button class="shadow-sm max-lg:w-[140px] max-lg:h-[40px] lg:w-[200px] lg:h-[50px] bg-transparent  border-light-grey border text-center rounded">
                                <a href="#" class="uppercase text-[14px] font-bold flex justify-center">
                                <p class="">περισσοτερα</p>
                                <img  src="../images/icons/button_icon.svg" alt="arrow_icon"/>
                                </a>
                            </button>
                        </div>
                        
                        </div>
                    </div>      
  


        </div>
        </header>


        @yield('content')

        
        
    
        <footer class="bg-font-blue max-lg:h-[650px] lg:h-[440px] ">
            <!-- go up button -->
            <a class="w-[40px] h-[40px] bg-hover-red float-right rounded-[100%] relative right-12" href="#header">
                <img class=" relative left-2 top-2" src="../images/icons/up.svg" alt="icon_up">
            </a>
            <!-- Components-logo -->
            <div class="flex justify-center w-[100%] relative lg:top-[30px]">
                <img class="lg:w-[180px] lg:h-[180px] max-lg:h-[132px] max-lg:w-[132px]" src="../images/icons/Components-logo.svg" alt="Panarcadian Federation log">
            </div>
            <div  class="flex justify-center relative lg:pt-[35px] max-lg:pt-[20px]">
                <img class="max-lg:w-[161px] max-lg:h-[14px]" src="../images/icons/Components-PAF white.svg" alt="Panarcadian Federation founded since 1931">
            </div>
            <!-- social media -->
            <nav class="relative mt-[25px] w-[100%]">
                <ul class="flex justify-center">
                <li class="lg:mr-[30px] max-lg:px-[10px] "> <a href="#"><img class="w-[40px] h-[40px]" src="../images/icons/social_media/facebook.svg" alt="facebook icon"></a></li>
                <li class="lg:mr-[30px] max-lg:px-[10px]"> <a href="#"><img class="w-[40px] h-[40px]"src="../images/icons/social_media/tweeter.svg" alt="tweeter icon"></a></li>
                <li class="lg:mr-[30px] max-lg:px-[10px]"> <a href="#"><img class="w-[40px] h-[40px]" src="../images/icons/social_media/linkedin.svg" alt="linkedin icon"></a></li>
                <li class="lg:mr-[30px] max-lg:px-[10px]"> <a href="#"><img class="w-[40px] h-[40px]"src="../images/icons/social_media/instagram.svg" alt="instagram icon"></a></li>
                <li class="lg:mr-[30px] max-lg:px-[10px]"> <a href="#"><img class="w-[40px] h-[40px]"src="../images/icons/social_media/youtube.svg" alt="youtube icon"></a></li>
                            
                </ul>
                <!-- menu bar -->
            <ul class="max-lg:text-center lg:flex lg:justify-center lg:w-[1101px] text-white-f relative m-auto top-[20px]">
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">Η ΟΜΟΣΠΟΝΔΙΑ</a></li>
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">ΑΡΚΑΔΩΝ ΕΡΓΑ</a></li>
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">ΕΠΩΝΥΜΟΙ ΑΡΚΑΔΕΣ</a></li>
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">ΝΕΑ - ΕΝΗΜΕΡΩΣΗ</a> </li>     
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red"> ΣΤΗΝ ΑΡΚΑΔΙΑ</a> </li>       
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">ΑΝΑΖΗΤΗΣΕΙΣ ΣΤΗΝ ΑΡΚΑΔΙΑ</a> </li>
                    <li class="lg:mr-[20px] max-lg:pb-5 whitespace-nowrap">  <a href="#" class="lg:text-[14px] hover:text-hover-red">ΕΠΙΚΟΙΝΩΝΙΑ</a> </li>
            </ul>
        </nav>

        <div class="flex justify-center text-gray-300 mt-[40px] relative "><p >©2018 Pan Arcadian Federation of America</p></div>
        </footer>
