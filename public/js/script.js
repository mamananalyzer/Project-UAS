function produk(that) {
    if (that.value == "Power Meter") {
            document.getElementById("powermeter").style.display = "block";
            document.getElementById("amr").style.display = "none";
        }
    else if (that.value == "AMR") {
            document.getElementById("amr").style.display = "block";
            document.getElementById("powermeter").style.display = "none";
        }
    else {
            document.getElementById("powermeter").style.display = "none";
            document.getElementById("amr").style.display = "none";
        }
}
function brand(that) {
    if (that.value == "acuvim") {
            document.getElementById("acuvim").style.display = "block";
        }
    else if (that.value == "P2") {
            document.getElementById("ifYes").style.display = "block";
        }
    else {
            document.getElementById("acuvim").style.display = "none";
        }
}


//event pada saat link di klik
$('.page-scroll').on('click', function(){

    //ambil isi href
    var tujuan = $(this).attr('href');

    //tangkap element ybs
    var elemenTujuan = $(tujuan);

    //pindahkan scroll
    $('html, body').animate({
        scrollTop: elemenTujuan.offset().top - 140
    }, 1250, 'easeInOutExpo');

});

//about
// $('window').on('load', function(){
//     $('pKiri').addClass('pShow');
// });

//parralax
$(window).scroll(function(){
    var wScroll = $(this).scrollTop();

    // jumbotron
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    })
    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2.5 +'%)'
    })
    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    })

    $('.carousel-caption img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    })
    $('.carousel-caption h1').css({
        'transform' : 'translate(0px, '+ wScroll/2.5 +'%)'
    })
    $('.carousel-caption p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    })
    //contact
    if(wScroll > $('.portfolio').offset().top - 300) {
        $('portfolio .thumbnail')
        $('.portfolio .thumbnail').addClass('show');
    }

    //about
    if(wScroll > $('.pKiri').offset().top - 200) {
        $('.pKiri').addClass('pShow');
    }
    if(wScroll > $('.pKanan').offset().top - 200) {
        $('.pKanan').addClass('pShow');
    }

});


// invoice
$('#printInvoice').click(function(){
    Popup($('.invoice')[0].outerHTML);
    function Popup(data)
    {
        window.print();
        return true;
    }
});
