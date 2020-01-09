$( document ).ready(function() {


! function(e) {
    var t = {};

    function n(o) {
        if (t[o]) return t[o].exports;
        var r = t[o] = {
            i: o,
            l: !1,
            exports: {}
        };
        return e[o].call(r.exports, r, r.exports, n), r.l = !0, r.exports
    }
    n.m = e, n.c = t, n.d = function(e, t, o) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: o
        })
    }, n.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function(e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var o = Object.create(null);
        if (n.r(o), Object.defineProperty(o, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var r in e) n.d(o, r, function(t) {
                return e[t]
            }.bind(null, r));
        return o
    }, n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "js/", n(n.s = 0)
}([function(e, t) {
    $(function() {
        $(".sliderSectionPPL").slick({
            centerMode: !0,
            centerPadding: "60px",
            slidesToShow: 1,
            autoplay: !0,
            prevArrow: $(".sliderSectionPPL__btn_prev"),
            nextArrow: $(".sliderSectionPPL__btn_next")
        });
        var e = document.querySelector(".navigation__menu"),
            t = document.querySelector(".navigation__menuBtn"),
            n = document.querySelector(".navigation__menuBtnMobail"),
            o = document.querySelector(".navigation__menu_buttonCloser"),
            r = document.querySelector(".whySignUp__circle_pi"),
            i = (document.querySelector(".whySignUp"), !1),
            a = document.querySelector(".modalContainer"),
            c = document.querySelector(".navigation__joinNow_btn"),
            l = document.querySelector(".navigation__joinNow_btnMobail"),
            s = document.querySelector(".modalContainer__join_closer"),
            d = document.querySelector(".modalContainer__containerBox"),
            u = document.querySelector(".navigation__menu_button"),
            v = document.querySelector(".navigation__menu_backGround");
        c.addEventListener("click", function() {
			if(e.state != 'popup'){
	 			 history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
			}
            a.classList.add("active")
        }), l.addEventListener("click", function() {
			if(e.state != 'popup'){
	 			 history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
			}
            a.classList.add("active")
        }), u.addEventListener("click", function() {
            a.classList.add("active");
        }), s.addEventListener("click", function() {
            a.classList.remove("active");
			history.replaceState(stateObj, "", "");
        }), a.addEventListener("click", function(e) {
            history.target == d && a.classList.remove("active");
			history.replaceState(stateObj, "", "");
        }), t.addEventListener("click", function(t) {
			if(e.state != 'popup'){
	 			 history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
			}
            0 == i && (e.classList.add("active"), v.classList.add("activeBack"), v.style.opacity = "1")
        }), n.addEventListener("click", function() {
            //menu opening
            if(e.state != 'popup'){
	 			 history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
			}
            e.classList.add("active");
            $('body').css('overflow', 'hidden');

        }), o.addEventListener("click", function(t) {
            //menu closing
            e.classList.add("not-active");
            $('body').css('overflow', 'visible');

        }), e.addEventListener("animationend", function(t) {
            i ? (e.classList.remove("not-active"), e.classList.remove("active"), v.classList.remove("activeBack"), i = !1) : i = !0
        }), e.addEventListener("click", function(t) {
            t.target == u && e.classList.add("not-active")
        });

        var p = $(".firstSection__scrollDown"),
            _ = $(".footer__scrollTop"),
            m = $(".firstSection__scrollDownMobail"),
            y = $(".footer__scrollTopMobile");
        p.on("click", function(e) {
            e.preventDefault();
            var t = $(e.target).attr("href"),
                n = $(t);
            $("html, body").animate({
                scrollTop: n.offset().top - 10
            }, 1e3)
        }), y.on("click", function(e) {
            e.preventDefault();
            var t = $(e.target).attr("href"),
                n = $(t);
            $("html, body").animate({
                scrollTop: n.offset().top - 90
            }, 1e3)
        }), _.on("click", function(e) {
            e.preventDefault();
            var t = $(e.target).attr("href"),
                n = $(t);
            $("html, body").animate({
                scrollTop: n.offset().top - 90
            }, 1e3)
        }), m.on("click", function(e) {
            e.preventDefault();
            var t = $(e.target).attr("href"),
                n = $(t);
            $("html, body").animate({
                scrollTop: n.offset().top
            }, 1e3)
        }), $('.footer__li a').click(function(e){
          e.preventDefault();
          var t = $(e.target).attr("href"),
              n = $(t);
          $("html, body").animate({
              scrollTop: n.offset().top
          }, 1e3)
        });
        $(".navigation__copyBtn");
        var g = document.location.href;
        new Clipboard(".navigation__copyBtn", {
            text: function() {
                return g
            }
        });


        //var b = !0;
        // $(window).on("scroll", function(e) {
        //     var t, n = $(e.target).scrollTop(),
        //         o = $(".navigation"),
        //         r = ($(".navFlex"), document.createElement("img"));
        //
        //     n && (t = document.querySelector(".lol")), n > 580 ? (o.addClass("scrolled"), o.addClass("wrapper"), b && (b = !1, r.setAttribute("src", "http://ppl.coelix.live/wp-content/themes/ppl/assets/img/svg/logoFixedMobail.svg"), r.style.width = "144px", r.style.height = "30px", r.style.marginLeft = "10px", r.classList.add("lol"), o[0].insertAdjacentElement("afterbegin", r))) : (o.removeClass("scrolled"), o.removeClass("wrapper")), n > 580 && t && (t.style.display = "block"), n < 580 && t && (t.style.display = "none");
        //
        //     $('.lol').wrap('<div class="header-logo-wrap" />');
        // }),
})
if( $(window).width() < 800 ){
  var prevScrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var prevScrollDir = false;
  var prevDir = false;
  $(window).scroll(function() {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop < prevScrollTop){
      // upscroll code
      	if(prevDir !== 'up'){


        if(prevScrollDir !== 'down'  ){
		$('.mobailNavigation .header-logo-wrap').slideDown();
      }

		prevDir = prevScrollDir;
       prevScrollDir = 'up';
			}
      // }
      // else if('prevScrollDir')

    } else {
		  // downscroll code
		 if(prevDir !== 'down'){
        if(prevScrollDir !== 'up'){
		$('.mobailNavigation .header-logo-wrap').slideUp();
      }
		prevDir = prevScrollDir;
       prevScrollDir = 'down';
		 }
    }
	  setTimeout(function(){
 prevScrollTop = scrollTop;
}, 500);


  });
}

        $(window).on("scroll", function(e) {
            var t = $(e.target).scrollTop(),
                n = $(".navigationPC");
            t > 60 ? (n.addClass("scrolledPC"), n.addClass("wrapper")) : n.removeClass("scrolledPC")
        })


//mobile nav menu click
$('.navigation__menu_obertka .navigation__menu_li a').on('click', function(e){
  e.preventDefault();
  $('body').css('overflow', 'visible');
  document.querySelector(".navigation__menu").classList.add("not-active");
  var target = $(this.getAttribute('href'));
  $('html, body').animate({
    scrollTop: target.offset().top - 90
}, 300);
});

$('.sectionForm__form button').click(function(e){
      e.preventDefault();
	  if(e.state != 'popup'){
	 	 history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
	  }
      $('.modalContainer').addClass('active');
});

$('.first-form').on('submit', function(e){
	e.preventDefault();

	var mail = $('.first-form .formEmail2').val();
	var first_name = $('.first-form .formName2').val();
	var second_name = $('.first-form .formLastName2').val();
	$('.joinFormMobail .formName').val(first_name);
	$('.joinFormMobail .formLastName').val(second_name);
	$('.joinFormMobail .formEmail').val(mail);


  $('.modalContainerPPL__containerBoxPPL, .modalContainerPPL').addClass('active');
  $('.modalContainer').removeClass('active');
});

$('.sectionFormTwo__flex .sectionForm__form-v').on('submit', function(e){
	e.preventDefault();

	var mail2 = $('.sectionFormTwo .second-mail').val();
	var first_name2 = $('.sectionFormTwo .fName').val();
	var second_name2 = $('.sectionFormTwo .lName').val();
	$('.joinFormMobail .formName').val(first_name2);
	$('.joinFormMobail .formLastName').val(second_name2);
	$('.joinFormMobail .formEmail').val(mail2);


  $('.modalContainerPPL__containerBoxPPL, .modalContainerPPL').addClass('active');
  $('.modalContainer').removeClass('active');
});

//first popup submit
$('.modalContainer__join .joinFormMobail').on('submit', function(e){
  e.preventDefault();
  if(e.state!= 'popup'){
    history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
  }

  $('.modalContainerPPL__containerBoxPPL, .modalContainerPPL').addClass('active');
  $('.modalContainer').removeClass('active');
});
//second popup submit
$('.modalContainerPPL__form.secondPopup').on('submit', function(e){
  e.preventDefault();
  if(e.state != 'popup'){
    history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
  }
  console.log('second submit');
  $('.modalContainerPPL__numberFollowers').addClass('active');
  $('.modalContainerPPL__containerBoxPPL').removeClass('active');
});
//check if at least one store selected
$('.modalContainerPPL__containerBoxPPL .modalContainerPPL__form.secondPopup .checkbox').on('change', function(){
  var button = $('.modalContainerPPL__form.secondPopup .modalContainerPPL__form_buttonSelect');
  if($('.modalContainerPPL__containerBoxPPL .modalContainerPPL__form.secondPopup .checkbox:checked').length){
    button.prop('disabled', false);
	$('.secondPopup .modalContainerPPL__form_buttonSelect').text("Ok, I'm done");
  }
  else{
    button.prop('disabled', 'disabled');
	$('.secondPopup .modalContainerPPL__form_buttonSelect').text("Select at least one store");
  }
});

//show more stores
$('.modalContainerPPL__form_BoxButton .modalContainerPPL__form_buttonMoreShops').click(function(e){
	e.preventDefault();
	$('.secondPopup .storeBlock:last-of-type').toggleClass("show");
	var text = $(this).text();
    $(this).text( text == "Less shops" ? "More shops" : "Less shops");
});

//third popup submit
$('.modalContainerPPL__numberFollowers .modalContainerPPL__form').on('submit', function(e){
  e.preventDefault();
  //console.log('SMTH OPPENED');
  if(e.state != 'popup'){
   history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
  }
  $('.modalContainerPPL__numberFollowers').addClass('active');
  $('.modalContainerPPL__containerBoxPPL').removeClass('active');

});

//check if third popup is filled
$('.modalContainerPPL__form input.modalContainerPPL__numberFollowers_button, .modalContainerPPL__form_button[name="mails"]').on('change', function(){
  var followers = $('.modalContainerPPL__numberFollowers_button[name="followers"]:checked').length;
  var mails = $('.modalContainerPPL__form_button[name="mails"]:checked').length;
  //console.log(followers, mails);

  var button = $('.modalContainerPPL__form.thirdPopup .modalContainerPPL__form_buttonCenter');
  if(followers){
    button.prop('disabled', false);
	  $('.thirdPopup .modalContainerPPL__form_buttonCenter').text("Ok, I'm done");

  }
  else{
    button.prop('disabled', 'disabled');
	 $('.thirdPopup .modalContainerPPL__form_buttonCenter').text("2 clicks and you're done");
  }
});
//last popup
// $('.modalContainerPPL__numberFollowers .modalContainerPPL__form button').click(function(e){
//   e.preventDefault();
//   if(e.state != 'popup'){
// 	  history.pushState({state: 'popup'}, 'Popup opened', '?state=popup');
//   }
//
// });

$('.modalContainerPPL__lastPopap .modalContainerPPL__lastPopap_a').click(function(e){
      e.preventDefault();
      $('.modalContainerPPL__lastPopap , .modalContainerPPL').removeClass('active');
	  //history.replaceState(stateObj, "", "");
});
$('.modalContainer__join_closer').click(function(e){
      e.preventDefault();
	  //history.replaceState(stateObj, "", "");
      $('.modalContainerPPL__containerBoxPPL , .modalContainerPPL , .modalContainerPPL__numberFollowers, .modalContainerPPL__lastPopap').removeClass('active');
});

$('.modalContainerPPL__form_li label').click(function(e){
      $(this).closest('li').toggleClass('checked');
});




    // a = document.querySelector(".modalContainer"),
    // s = document.querySelector(".modalContainer__join_closer"),
    // d = document.querySelector(".modalContainer__containerBox"),

    var counterValue = 1422 + (Math.floor(new Date().valueOf() / 3600000)-1576195200000/3600000)*2;
    $('#counterNew').attr('data-count', counterValue);

    $(window).scroll(function() {
      $('#counterNew').each(function() {

      var Pos = $(this).offset().top;
      var topOfWindow = $(window).scrollTop();
      var windowHeight = $(window).height();
      var bottomOfWindow = windowHeight - (windowHeight / 3);

      if (Pos < topOfWindow + bottomOfWindow && (!($("#counterNew").hasClass("done")))) {

      console.log('done');
        $(this).addClass('done');
        var $this = $(this),
          countTo = $this.attr('data-count').replace(/,/g, '');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        }, {
          duration: 6000,
          easing: 'linear',
          step: function() {
            $this.text(numberWithCommas(Math.floor(this.countNum)));
          },
          complete: function() {
            $this.text(numberWithCommas(this.countNum));
          }
        });
        }
      });


});

$(window).scroll(function() {
if (checkVisible($('.sectionForm')) || checkVisible($('.sectionFormTwo .sectionForm__form-v')) ) {
  $( '.navigation__joinNow_btnMobail' ).css( "opacity", "0" );
}
else {
  $( '.navigation__joinNow_btnMobail' ).css( "opacity", "1" );
}

});

//ajax send register form
$('.modalContainerPPL__form_buttonCenter').on('click',function(){

  var action = 'register_action';

  var reg_mail  = $('.formEmail').val();
  var reg_name  = $('.formName').val();
  var reg_lastname  = $('.formLastName').val();
  var reg_shops  = []; // NEEED TO ADD CHECKED CHANGE OF THEM
  $('.modalContainerPPL__form.secondPopup .modalContainerPPL__form_li.checked input').each(function(){
    reg_shops.push( $(this).val() );
  });
  var reg_inst  = [];
  $('.modalContainerPPL__form.thirdPopup .modalContainerPPL__numberFollowers_li input:checked').each(function(){
    reg_inst.push( $(this).val() );
  });
  var reg_mails = [];
  $('.modalContainerPPL__form.thirdPopup .modalContainerPPL__form_li.checked input').each(function(){
    reg_mails.push( $(this).val() );
  });

  var ajaxdata = {

  action: 'register_action',
  mail: reg_mail,
  name: reg_name,
  lastname: reg_lastname,
  shops: reg_shops,
  inst: reg_inst,
  mails: reg_mails,

  };

  jQuery.post( ajaxurl, ajaxdata, function(res){ // ajaxurl must be defined previously
    var result = JSON.parse(res);
    console.log(result);
    if(!result.success){
      $('.register-errors').text(result.message);
      //switch to first popup
      $('.modalContainerPPL__numberFollowers').removeClass('active');
      $(".modalContainer").addClass('active');
    }
    else{
      $('.register-errors').text('');
      $('.modalContainerPPL__numberFollowers').removeClass('active');
      $('.modalContainerPPL__lastPopap').addClass('active');
    }
    //jQuery("#error-message").html(res);
  });
});



function checkVisible( elm, eval ) {
    eval = eval || "visible";
    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elm).offset().top,
        elementHeight = $(elm).height();
    if (eval == "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
    if (eval == "above") return ((y < (vpH + st)));
}


}]);
new WOW().init();

window.onpopstate = function (e) {
  if ( history.state!= 'popup' ) {
    $('.modalContainerPPL__numberFollowers').removeClass('active');
    $('.modalContainerPPL__lastPopap').removeClass('active');
	$('.modalContainerPPL').removeClass('active');
	$('.modalContainer__join').removeClass('active');
	$('.modalContainer').removeClass('active');
    $('.navigation__menu').removeClass('active');
    $('body').css('overflow', 'visible');
	history.replaceState(stateObj, "", "");
  }
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
	});
$(window).resize(function() {
    windowWidth = $(window).width();
}).trigger('resize');
$(window).load(function() {
const headerHeightTop = $('.mobailNavigation .navigation').offset().top;
//console.log('top2', headerHeightTop);
// setInterval(function() {
//   console.log('top2', $('.mobailNavigation .navigation').offset().top);
// }, 300);
          let flag1 = true;
        $(window).on("scroll", function(event) {
          let target = $(event.target);
          let scrolledPixels = target.scrollTop();
          let header = $(".navigation");
			const headerHeight = $('.navigation').outerHeight();

          let navigation = $(".navFlex");
          let lol;
          var logoImg = document.createElement("img");
          if (scrolledPixels) {
            lol = document.querySelector(".lol");
			//console.log(scrolledPixels);

          }
          if (scrolledPixels > headerHeightTop) {
            header.addClass("scrolled");
            header.addClass("wrapper");
			$('.mobailNavigation').height(headerHeight);
            if (flag1) {
              flag1 = false;

              logoImg.setAttribute(
                "src",
                 "http://1629939.dissmay.web.hosting-test.net/wp-content/themes/plusPPL/assets/img/svg/logoFixedMobail.svg"
              );
              logoImg.style.width = "144px";
              logoImg.style.height = "30px";
              logoImg.style.marginLeft = "10px";
              logoImg.classList.add("lol");
//               header["0"].insertAdjacentElement("afterbegin", logoImg);

              //wrap logo with extra div (to perform smooth animation)
//               if($('.header-logo-wrap').length === 0){
//                 $('.lol').wrap('<div class="header-logo-wrap" />');
//               }
            }
          } else {
            header.removeClass("scrolled");
            header.removeClass("wrapper");
          }

          if (scrolledPixels > headerHeightTop) {
            if (lol) {

              lol.style.height = "28px";
            }
          }
          if (scrolledPixels < headerHeightTop) {
            if (lol) {
              //console.log('display none triggered');
              lol.style.height = "0";
			  lol.style.transition = "none";
            }
          }
        });

        $(window).on("scroll", function(e) {
            var t = $(e.target).scrollTop(),
                n = $(".navigationPC");
            t > 60 ? (n.addClass("scrolledPC"), n.addClass("wrapper")) : n.removeClass("scrolledPC");
        });

});
