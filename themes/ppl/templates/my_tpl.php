<?php
/* Template Name: homepage */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv='X-UA-Compatible' content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Rubik:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js-->
    <!-- [if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<! [endif]-->
	  <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics → -->
	<script async src=”https://www.googletagmanager.com/gtag/js?id=UA-153426364-1”></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){
		dataLayer.push(arguments);
		}
		gtag(‘js’, new Date());

		gtag(‘config’, ‘UA-153426364-1’);
	</script>

 </head>

  <body>

    <header id="ScrollTop" class="wrapper">
      <div class="pcNavigation">
        <nav class="navigationPC">
          <ul class="navigation__ul">
            <li class="navigation__li">
              <div class="navigation__logotype">
                <a href="#" class="navigation__logotype_a">
                  <img src="<?php plusPpl_img('/img/svg/LogoText.svg')?>" alt="Logotype" class="navigation__logotype_img" /></a>
              </div>
            </li>
            <li>
              <div class="navigation__menuBtn">
                <span class="navigation__menuBtn_bottom"></span>
              </div>
            </li>
          </ul>
          <button class="navigation__joinNow_btn">join now</button>
        </nav>
      </div>
    </header>
    <main>
      <section class="firstSection">
        <?php if(wp_is_mobile()) { ?>
          <img class="mobile-first-back wow fadeIn" data-wow-delay="1s" src="<?= get_bloginfo('template_url') ?>/assets/img/svg/GrayScreenRightMobile.png">
        <?php } ?>
        <div class="firstScreenBlock__center">
          <div class="firstScreenBlock wrapper">
            <div class="logo-block wow fadeIn" <?php if(wp_is_mobile()) { ?> data-wow-delay="2s" <?php } ?> >
              <div class="firstScreenBlock__logotype">
                <img src="<?php plusPpl_img('/img/svg/Logo.svg')?>" alt="Logotype" class="firstScreenBlock__logotype_img" />
              </div>
              <h1 class="firstScreenBlock__h"><?php the_field('hero_title'); ?></h1>
              <p class="firstScreenBlock__p"> You are <?php if(wp_is_mobile()){?> <img class="plus-mobile" src="<?= get_bloginfo('template_url') ?>/assets/img/mobile-plus.svg"> <?php } else{ ?>+<?php } ?></p>
            </div>
            <p class="firstScreenBlock__p_medium wow fadeIn" <?php if(wp_is_mobile()) { ?> data-wow-delay="3s" <?php } ?>> <?php the_field('hero_subtitle'); ?> </p>
            <p class="firstScreenBlock__p_end wow fadeIn" <?php if(wp_is_mobile()) { ?> data-wow-delay="4s" <?php } ?> > <?php the_field('hero_pretitle'); ?> </p>
          </div>
        </div>
        <a href="#Scroll" class="firstSection__scrollDown wrapper"> Scroll down </a>
        <a href="#Scroll" class="firstSection__scrollDownMobail wrapper"> </a>
        <!-- МОБИЛЬНАЯ НАВИГАЦИЯ -->

      </section>
      <section id='Scroll' class="SectionToPpl wrapper">
        <div class="mobailNavigation wrapper">
          <nav class="navigation">
			<div class="header-logo-wrap">
				<img src="http://ppl.coelix.live/wp-content/themes/ppl/assets/img/svg/logoFixedMobail.svg" class="lol">
			</div>  
            <div class="navFlex">
              <ul class="navigation__ulMobail">
                <li>
                  <div class="navigation__menuBtnMobail">
                    <span class="navigation__menuBtnMobail_bottomMobail"></span>
                  </div>
                </li>
                <li>
                  <div class="tooltip">
                    <div class="navigation__copyBtn">
                      <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                    </div>
                  </div>
                </li>
              </ul>
              <button class=" navigation__joinNow_btnMobail"> join now </button>
            </div>
          </nav>
        </div>
        <div class="SectionToPpl__flex wow">
          <h2 class="SectionToPpl__h"> Say Hello </h2>
          <div class="SectionToPpl__logotype">
            <img src="<?php plusPpl_img('/img/LogoToPPLSection2.png')?>" alt="Logotype" />
          </div>
			<?php // if( have_rows('hello_title') ): ?>
          		<p class="SectionToPpl__p"> <?php the_field('hello_title'); ?></p>
			<?php //	endif; ?>
			<?php if( have_rows('hello_list') ): ?>
			
			  <ul class="SectionToPpl__ul row ">
				 <?php while ( have_rows('hello_list') ) : the_row(); ?>
					<li class="SectionToPpl__li">
					  <p class="SectionToPpl__li_p"> <?php  the_sub_field('text'); ?> </p>
					</li>
				<?php endwhile; ?>
			  </ul>
			
			<?php	endif; ?>
          <div class="sliderContainer">
            <div class="sliderSectionPPL__btn_prev"></div>
            <div class="sliderSectionPPL">
              <div class="sliderSectionPPL__p">
                <p class=" sliderSectionPPL__p"> Plus PPL have difficulty buying clothes online. And they are frustrated! </p>
              </div>
              <div class="sliderSectionPPL__p">
                <p class=" sliderSectionPPL__p"> They wish that offer brave ppl will help easily buy clothes... </p>
              </div>
              <div class="sliderSectionPPL__p">
                <p class=" sliderSectionPPL__p"> Help your followers & they will be thankful! </p>
              </div>
            </div>
            <div class="sliderSectionPPL__btn_next"></div>
          </div>
          <p class="SectionToPpl__endText"> <?php the_field('hello_subtitle'); ?></p>
        </div>
      </section>
      <section class="sectionHelp wrapper " id="section_anchor2">
        <h2 class="sectionHelp__h"><?php the_field('help_title'); ?></h2>
        <p class="sectionHelp__p"><?php the_field('help_subtitle'); ?></p>
		  <?php if( have_rows('help_list') ): ?>
        <ul class="sectionHelp__ul row">
			<?php while ( have_rows('help_list') ) : the_row(); ?>
			  <li class="sectionHelp__li">
				<img src="<?php  the_sub_field('img'); ?>" alt="" class="sectionHelp__li_img" />
				<h3 class="sectionHelp__li_h"><?php  the_sub_field('title'); ?></h3>
				<p class="sectionHelp__li_p"><?php  the_sub_field('text'); ?></p>
			  </li>
			<?php endwhile; ?>
        </ul>
		  <?php	endif; ?>
      </section>
      <section class="sectionForm wrapper">
        <div class="sectionForm__flex wow slideInLeft">
          <h2 class="sectionForm__h"> Join Now </h2>
          <form action="#" method="POST" class="sectionForm__form-v">
            <p>
              <label> &nbsp;&nbsp;First name <br />
                <input type="text" name="name" class="sectionForm__form_input " placeholder="First name" />
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;Last name <br />
                <input type="text" name="last_name" class="sectionForm__form_input " placeholder="Last name" />
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;Email <br />
                <input type="email" name="mail" class="sectionForm__form_input " placeholder="Email" />
              </label>
            </p>
            <button type="submit" class="sectionForm__form_button btnSignUp ">Sign UP</button>
            <button class="sectionForm__form_buttonInsta btnInsta "> Sign UP via Instagram </button>
          </form>
        </div>
      </section>
      <section class="whySignUp" id="section_anchor3">
        <div class="whySignUp__boxes wrapper wow slideInRight">
          <h2 class="whySignUp__h"><?php the_field('why_title'); ?></h2>
			<?php if( have_rows('why_list') ): ?>
			  <ul class="whySignUp__ul row">
				  <?php while ( have_rows('why_list') ) : the_row(); ?>
					<li class="whySignUp__li">
					  <img src="<?php  the_sub_field('img'); ?>" alt="" class="whySignUp__li_img" />
					  <p class="whySignUp__li_p"><?php  the_sub_field('text'); ?></p>
					</li>
				 <?php endwhile; ?>
			  </ul>
			 <?php	endif; ?>
          <div class="whySignUp__circle">
            <p class="whySignUp__circle_p"> Signed Up </p>
            <p id="counterNew" data-count="" class="counterNewClass">0</p>
          </div>
        </div>
      </section>
      <section class="motivation " id="section_anchor4">
        <div class="motivation__motivationBox wrapper wow slideInLeft">
          <h2 class="motivation__h"><?php the_field('plant_title'); ?></h2>
			<?php if( have_rows('plant_list') ): ?>
			  <ul class="motivation__ul row">
				  <?php while ( have_rows('plant_list') ) : the_row(); ?>
					<li class="motivation__li">
					  <p class="motivation__li_p"><?php  the_sub_field('text'); ?></p>
					</li>
				  <?php endwhile; ?>
			  </ul>
			<?php	endif; ?>
        </div>
      </section>
      <section class="sectionForm sectionFormTwo wrapper ">
        <div class="sectionForm__flex sectionFormTwo__flex wow slideInRight">
          <h2 class="sectionForm__h sectionFormTwo__h"><?php the_field('change-title'); ?></h2>
          <p class="sectionFormTwo__p"><?php the_field('change-text'); ?></p>
          <form action="#" method="POST" class="sectionForm__form-v">
            <label> &nbsp;&nbsp;&nbsp;First name <br />
              <input type="text" name="name" class="sectionForm__form_input" placeholder="First name" />
            </label>
            <label> &nbsp;&nbsp;&nbsp;Last name <br />
              <input type="text" name="last_name" class="sectionForm__form_input" placeholder="Last name" />
            </label>
            <label> &nbsp;&nbsp;&nbsp;Email <br />
              <input type="email" name="mail" class="sectionForm__form_input sectionForm__form_inputLast" placeholder="Email" />
            </label>
            <button type="submit" class="sectionForm__form_button btnSignUp">Sign UP</button>
            <button class="sectionForm__form_buttonInsta btnInsta"> Sign UP via Instagram </button>
          </form>
        </div>
      </section>
    </main>
    <footer id="footer" class="footer">
      <div class="footer__footerBox wrapper ">
        <div class="footer__logotype">
          <img src="<?php plusPpl_img('/img/footerLogotype.png')?>" alt="" />
        </div>
        <ul class="footer__ul">
          <li class="footer__li">
            <h3 class="footer__li_h">Navigation</h3>
          </li>
          <li class="footer__li">
            <p class="footer__li_p">Why it is necessary</p>
          </li>
          <li class="footer__li">
            <p class="footer__li_p">Solutions and technology</p>
          </li>
          <li class="footer__li">
            <p class="footer__li_p">Plus community</p>
          </li>
          <li class="footer__li">
            <p class="footer__li_p">Our vision</p>
          </li>
          <li class="footer__li">
            <p class="footer__li_p">Terms and Conditionals</p>
          </li>
        </ul>
        <ul class="footer__ul">
          <li class="footer__li">
            <h3 class="footer__li_h">Contacts</h3>
          </li>
          <li class="footer__li">
            <p  id="footerFollow" class="footer__li_p footer__instaIcon">Follow us on</p>
          </li>
          <li class="footer__li">
            <p id="footerEmailp" class="footer__li_p">Email: <br>
              <a id="footerEmail"  href="mailto:info@plusppl.com">info@plusppl.com</a></p>
          </li>
        </ul>
      </div>
      <div class="footer__footerBoxMobile">
        <div class="footer__logotype">
          <img src="<?php plusPpl_img('/img/svg/logoMobailFooter.svg')?>" alt="LogotypeImg" />
        </div>
        <a href="#" class="footer__li_p footer__instaIcon">Follow us on</a>
        <a href="mailto:info@plusppl.com" class="footer__li_mail">Contact: Info@plusppl.com</a>
        <a href="#ScrollTop" class="footer__scrollTopMobile"> Scroll to top </a>
        <p class="footer__AllRight2019"> ©All rights reserved PlusPPL 2019 </p>
      </div>
      <a href="#ScrollTop" class="footer__scrollTop"> Scroll to top </a>
      <p class="footer__AllRight"> ©All rights reserved PlusPPL 2019 </p>
      <p class="footer__AllRight footer__AllRightMobile"> Terms and Conditionals </p>
    </footer>
    <!-- МОДАЛКА ДЛЯ РЕГИСТРАЦИИ-->
    <div class="modalContainer ">
      <div class="modalContainer__containerBox">
        <div class="modalContainer__join">
          <button class="modalContainer__join_closer"></button>
          <section class="sectionForm wrapper">
            <div class="sectionForm__flex">
              <h2 class="sectionForm__h sectionForm__h_rose"> Join Now </h2>
              <form action="#" method="POST" class="joinFormMobail sectionForm__form-v">
                <p>
                  <label> &nbsp;&nbsp;First name <br />
                    <input type="text" name="name" class="joinInput" placeholder="First name" />
                  </label>
                </p>
                <p>
                  <label> &nbsp;&nbsp;Last name <br />
                    <input type="text" name="last_name" class="joinInput" placeholder="Last name" />
                  </label>
                </p>
                <p>
                  <label> &nbsp;&nbsp;Email <br />
                    <input type="email" name="mail" class="joinInput" placeholder="Email" />
                  </label>
                </p>
                <button type="submit" class=" btnSignUp btnSignUp__join">Sign UP</button>
                <button class="sectionForm__form_buttonInsta btnInsta btnInsta__join"> Sign UP via Instagram </button>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- МОДАЛКА ДЛЯ PLUS PPL-->
    <div class="modalContainerPPL d-n">
      <div class="modalContainerPPL__main wrapper">
        <section class="modalContainerPPL__containerBoxPPL">
          <button class="modalContainer__join_closer closerModalContainerFirst"></button>
          <h3 class="modalContainerPPL__h">Welcome to Plus PPL!</h3>
          <p class="modalContainerPPL__p"> We're working hard to put finishing touches onto plus ppl. </p>
          <p class="modalContainerPPL__textGray"> Lots of thought and effort invested to help you, so please help us create better technology for you and your followers. </p>
          <form action="#" class="modalContainerPPL__form ">
            <p class="modalContainerPPL__form_p"> Which stores do you shop online? </p>
            <ul class="modalContainerPPL__form_ul row">
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox1" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox1"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox2" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox2"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox3" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox3"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox4" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox4"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox5" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox5"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox6" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox6"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox7" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox7"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox8" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox8"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkbox9" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkbox9"></label>
              </li>
            </ul>
            <div class="modalContainerPPL__form_BoxButton">
              <button class="modalContainerPPL__form_buttonMoreShops"> More shops </button>
              <button class="modalContainerPPL__form_buttonSelect"> select at least one store </button>
            </div>
          </form>
        </section>
        <section class="modalContainerPPL__numberFollowers">
          <button class="modalContainer__join_closer closerModalContainerFirst"></button>
          <h2 class="modalContainerPPL__numberFollowers_h"> The number of your followers on Instagram </h2>
          <form action="#" class="modalContainerPPL__form ">
            <p class="modalContainerPPL__numberFollowers_p">optional</p>
            <ul class="modalContainerPPL__numberFollowers_ul row">
              <li class="modalContainerPPL__numberFollowers_li">
                <input type="checkbox" id="checkboxFollowersOptional1" class="modalContainerPPL__numberFollowers_button checkboxFollowers"></input>
                <label for="checkboxFollowersOptional1">Less than 1000</label>
              </li>
              <li class="modalContainerPPL__numberFollowers_li">
                <input type="checkbox" id="checkboxFollowersOptional2" class="modalContainerPPL__numberFollowers_button checkboxFollowers"></input>
                <label for="checkboxFollowersOptional2">Less than 1000</label>
              </li>
              <li class="modalContainerPPL__numberFollowers_li">
                <input type="checkbox" id="checkboxFollowersOptional3" class="modalContainerPPL__numberFollowers_button checkboxFollowers"></input>
                <label for="checkboxFollowersOptional3">Less than 1000</label>
              </li>
              <li class="modalContainerPPL__numberFollowers_li">
                <input type="checkbox" id="checkboxFollowersOptional4" class="modalContainerPPL__numberFollowers_button checkboxFollowers"></input>
                <label for="checkboxFollowersOptional4">Less than 1000</label>
              </li>
            </ul>
            <p class="modalContainerPPL__numberFollowers_textForm"> The main mailbox you use for shopping online: </p>
            <ul class="modalContainerPPL__form_ul row">
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers1" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers1"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers2" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers2"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers3" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers3"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers4" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers4"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers5" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers5"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers6" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers6"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers7" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers7"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers8" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers8"></label>
              </li>
              <li class="modalContainerPPL__form_li">
                <input type="checkbox" id="checkboxFollowers9" class="modalContainerPPL__form_button checkbox"></input>
                <label for="checkboxFollowers9"></label>
              </li>
            </ul>
            <button type="submit" class="modalContainerPPL__form_buttonCenter"> 2 clicks and you're done </button>
          </form>
        </section>
        <section class="modalContainerPPL__lastPopap">
          <button class="modalContainer__join_closer closerModalContainerFirst"></button>
          <h2 class="modalContainerPPL__lastPopap_h">Thank you!</h2>
          <h3 class="modalContainerPPL__lastPopap_h3"> You've helped make Plus ppl a better product for you and for your followers </h3>
          <p class="modalContainerPPL__lastPopap_p"> Now sit comfortably and we will let you know about the progress and the upcoming launch </p>
          <a href="#" class="modalContainerPPL__lastPopap_a"> Back </a>
        </section>
      </div>
    </div>
    <!-- СКРЫТОЕ МЕНЮ -->
    <div class="navigation__menu">
      <div class="navigation__menu_obertka">
        <div class="menuBoxes__closerAndLogo">
          <button class="navigation__menu_buttonCloser"></button>
          <div class="navigation__menu_logotype">
            <img src="<?php plusPpl_img('/img/svg/LogoMenu.svg')?>" alt="" class="navigation__menu_logotypeImg" />
            <img src="<?php plusPpl_img('/img/svg/LogoMobailMenu.svg')?>" alt="" class="navigation__menu_logotypeImgMobail">
          </div>
        </div>
        <div class="menuBoxes__photoAndJoin">
          <div class="navigation__menu_divImg">
            <img src="<?php plusPpl_img('/img/faceMenu.png')?>" alt="" class="navigation__menu_img" />
          </div>
          <button class="navigation__joinNow_btn navigation__menu_button">JOIN NOW</button>
        </div>
        <ul class="navigation__menu_ul">
          <li class="navigation__menu_li">
            <a href="#Scroll" class="navigation__menu_p">Why it is necessary</a>
          </li>
          <li class="navigation__menu_li">
            <a href="#section_anchor2" class="navigation__menu_p">Solutions and Technology</a>
          </li>
          <li class="navigation__menu_li">
            <a href="#section_anchor3" class="navigation__menu_p">Plus Community</a>
          </li>
          <li class="navigation__menu_li">
            <a href="#section_anchor4" class="navigation__menu_p">Our vision</a>
          </li>
        </ul>
        <div class="navigation__menu_backGround">
        </div>
      </div>
    </div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.10/clipboard.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
