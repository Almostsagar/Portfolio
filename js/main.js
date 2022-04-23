$(document).ready(function () {
    $(".button").click(function () {
        var name = $(this).attr('data-filter');
        if (name == 'all') {
            $(".shot-thumbnail").show('2000');
        } else {
            $(".shot-thumbnail").not('.' + name).hide('1000');
            $(".shot-thumbnail").filter('.' + name).show('1000');
        }
    })
    $(".navigation a").click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    })
})
// const link = document.getElementById("li1")
// link.href = "https://duckduckgo.com/?q=a+tag+inside+a+tag+html&ia=web";
// link.target = '_blank';

const scrollProgress = document.getElementById('scroll-progress');
const height =
  document.documentElement.scrollHeight - document.documentElement.clientHeight;

window.addEventListener('scroll', () => {
  const scrollTop =
    document.body.scrollTop || document.documentElement.scrollTop;
  scrollProgress.style.width = `${(scrollTop / height) * 100}%`;
});


