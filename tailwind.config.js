/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.css",

  ],
  

  theme: {   
   
    extend: {
      display: ["group-hover"],
     
      cursor: {
        'pointer': 'url("/images/icons/pointinghand.svg"),pointer',
      },    
   

      colors:{
        'hover-red': "#BF0A30",
        'font-blue':'#002868',
        'light-grey':"#B6B6B6",
        'white-f':"#FFFFFF",
        'font-gray':'#333333'
      },
      fontFamily: {
        
        proxima_nova_bold: ['proxima_nova_bold', 'sans'],
        proxima_nova: ["Proxima Nova Regular", "sans"],

        // time and weather
        source_sans_proBold: ["SourceSansPro-Bold", "sans-serif"],
        Source_Sans_Pro:['SourceSansPro','sans-serif']

      },
    
      
    },
  },
  plugins: [],
}