const linksInternos = document.querySelectorAll('.menu a[href^="#"]');


linksInternos.forEach(link=> {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        const href = event.currentTarget.getAttribute('href');
        const div = document.querySelector(href);
        const topo = div.offsetTop
        window.scrollTo({
            top: topo,
            behavior: 'smooth'
        })
    })
})
console.log(linksInternos)

const buttonClear = document.querySelector(".clear");

function clearButton() {
    buttonClear.addEventListener("click", (e)=> {
        document.querySelectorAll(".form-group input").forEach(e => 
            e.value = ""
            
        )
        
    })
}

clearButton()

    
if ($(window).width() > 992) {
    $(window).scroll(function(){  
       if ($(this).scrollTop() > 40) {
          $('#navbar_top').addClass("fixed-top");
          // add padding top to show content behind navbar
          $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
        }else{
          $('#navbar_top').removeClass("fixed-top");
           // remove padding top from body
          $('body').css('padding-top', '0');
        }   
    });
  }
