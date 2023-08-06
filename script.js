//toggle icon navbar
let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    menuIcon.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
//scroll sections
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => 
{
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height){
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
            //active sessions for animations on scroll
            sec.classList.add('show-animate');
        }
        else{
            sec.classList.remove('show-animate');6
        }
    });
    //sticky header
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
}
//for project section hover effect
// const video_thumbs = document.querySelectorAll(".thumb-video");

// video_thumbs.forEach((video_thumbs) => {
//     video_thumbs.addEventListener("mouseover",function(){
//         this.style.opacity = 1;
//         this.play();
//         this.playbackRate = 2.0;
//     });
// });
// video_thumbs.forEach((video_thumbs) => {
//     video_thumbs.addEventListener("mouseleave",function(){
//         this.style.opacity = 0;
//         this.pause();
//     });
// });
//Jquery for go through each long title to short it with "..."
$(".video-card-title").each(function(){
    if($(this).text().length > 50) {
        $(this).html($(this).text().substring(0,75) + "...");
    }
});