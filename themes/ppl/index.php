<?php
/* Template Name: main
 * Template Post Type: page
 */
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

	<!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MCRZDQG');
    </script>
    <!-- End Google Tag Manager -->

	<!-- Hotjar Tracking Code for Plusppl.com -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1615853,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
         fbq('init', '2706173259462330');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
        src="https://www.facebook.com/tr?id=2706173259462330&ev=PageView
        &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

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
				<img src="https://plusppl.com/wp-content/themes/ppl/assets/img/svg/logoFixedMobail.svg" class="lol">
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
      <?php if( have_rows('hello_list') ): ?>
          <div class="sliderContainer">
            <div class="sliderSectionPPL__btn_prev"></div>
            <div class="sliderSectionPPL">
              <?php while ( have_rows('hello_list') ) : the_row(); ?>
                <div class="sliderSectionPPL__p">
                  <p class=" sliderSectionPPL__p"> <?php  the_sub_field('text'); ?> </p>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="sliderSectionPPL__btn_next"></div>
          </div>
          <?php	endif; ?>
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
<!-- 			js-form -->
          <form action="#" method="POST" class="sectionForm__form-v first-form ">
            <p>
              <label> &nbsp;&nbsp;First name <br />
                <input type="text" name="name" class="sectionForm__form_input formName2" placeholder="First name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;Last name <br />
                <input type="text" name="last_name" class="sectionForm__form_input formLastName2" placeholder="Last name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;Email <br />
                <input type="email" name="mail" class="sectionForm__form_input formEmail2" placeholder="Email" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
              </label>
            </p>
            <button type="submit" class=" btnSignUp btnSignUp__join">Sign UP</button>
            <a href="https://plusppl.com/wp-login.php?loginSocial=facebook" rel="nofollow" aria-label="Login via <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" class="sectionForm__form_buttonInsta btnInsta "> Sign UP via Facebook </a>
			<a href="<?= home_url('/wp-login.php?loginSocial=google/'); ?>" class="sectionForm__form_buttonInsta btnInsta btnGoogle__join"> Sign UP via Google </a>
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
          <form action="#" method="POST" class="sectionForm__form-v ">
            <p>
              <label> &nbsp;&nbsp;&nbsp;First name <br />
                <input type="text" name="name" class="sectionForm__form_input fName" placeholder="First name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;&nbsp;Last name <br />
                <input type="text" name="last_name" class="sectionForm__form_input lName" placeholder="Last name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
              </label>
            </p>
            <p>
              <label> &nbsp;&nbsp;&nbsp;Email <br />
                <input type="email" name="mail" class="sectionForm__form_input sectionForm__form_inputLast second-mail" placeholder="Email" required
                      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
              </label>
            </p>
            <button type="submit" class=" btnSignUp btnSignUp__join">Sign UP</button>
            <a href="https://plusppl.com/wp-login.php?loginSocial=facebook" rel="nofollow" aria-label="Login via <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" class="sectionForm__form_buttonInsta btnInsta "> Sign UP via Facebook </a>
			<a href="<?= home_url('/wp-login.php?loginSocial=google/'); ?>" class="sectionForm__form_buttonInsta btnInsta btnGoogle__join"> Sign UP via Google </a>
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
            <a href="#Scroll" class="footer__li_p">Why it is necessary</a>
          </li>
          <li class="footer__li">
            <a href="#section_anchor2" class="footer__li_p">Solutions and technology</a>
          </li>
          <li class="footer__li">
            <a href="#section_anchor3" class="footer__li_p">Plus community</a>
          </li>
          <li class="footer__li">
            <a href="#section_anchor4" class="footer__li_p">Our vision</a>
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
                <p class="register-errors"></p>
                <p>
                  <label> &nbsp;&nbsp;First name <br />
                    <input type="text" name="name" class="joinInput formName" value="" placeholder="First name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
                  </label>
                </p>
                <p>
                  <label> &nbsp;&nbsp;Last name <br />
                    <input type="text" name="last_name" class="joinInput formLastName" value="" placeholder="Last name" maxlength="32" pattern="[A-Za-z ]{1,32}" required/>
                  </label>
                </p>
                <p>
                  <label> &nbsp;&nbsp;Email <br />
                    <input type="email" name="mail" class="joinInput formEmail" value="" placeholder="Email" required
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                  </label>
                </p>
                <button type="submit" class=" btnSignUp btnSignUp__join">Sign UP</button>
                <a href="https://plusppl.com/wp-login.php?loginSocial=facebook" rel="nofollow" aria-label="Login via <b>Facebook</b>" data-plugin="nsl" data-action="connect" data-provider="facebook" class="sectionForm__form_buttonInsta btnInsta "> Sign UP via Facebook </a>
                <a href="<?= home_url('/wp-login.php?loginSocial=google/'); ?>" class="sectionForm__form_buttonInsta btnInsta btnGoogle__join"> Sign UP via Google </a>
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
          <form action="#" class="modalContainerPPL__form secondPopup">
            <p class="modalContainerPPL__form_p"> Which stores do you shop online? </p>

            <?php
            $counter == 0;
            if( have_rows('stores') ):
                while ( have_rows('stores') ) : the_row();
                ?>
                <ul class="modalContainerPPL__form_ul row storeBlock <?php if($counter==0){echo "show";} ?>">
                  <?php
                    if( have_rows('stores_block') ):
                        while ( have_rows('stores_block') ) : the_row();
                        $counter++;
                        ?>
                        <li class="modalContainerPPL__form_li">
                          <input name="stores" type="checkbox" id="checkbox<?php echo $counter; ?>" value="<?php the_sub_field('store_item'); ?>" class="modalContainerPPL__form_button checkbox">
                          <label for="checkbox<?php echo $counter; ?>"><?php the_sub_field('store_item'); ?></label>
                        </li>
                        <?php
                        endwhile;
                    else :
                    endif;
                    ?>
                    </ul>
                    <?php
                endwhile;
            else :
            endif;
            ?>
            <div class="modalContainerPPL__form_BoxButton">
              <button class="modalContainerPPL__form_buttonMoreShops"> More shops </button>
              <button class="modalContainerPPL__form_buttonSelect" type="submit" disabled> select at least one store </button>
            </div>
          </form>
        </section>
        <section class="modalContainerPPL__numberFollowers">
          <button class="modalContainer__join_closer closerModalContainerFirst"></button>
          <h2 class="modalContainerPPL__numberFollowers_h"> The number of your followers on Instagram </h2>
          <form action="#" class="modalContainerPPL__form thirdPopup">
            <p class="modalContainerPPL__numberFollowers_p">optional</p>
            <ul class="modalContainerPPL__numberFollowers_ul row">
              <?php
              $counter == 0;
              if( have_rows('instagram') ):
                  while ( have_rows('instagram') ) : the_row();
                  $counter++;
                  ?>
                    <li class="modalContainerPPL__numberFollowers_li">
                      <input type="radio" name="followers" id="checkboxFollowersOptional<?php echo $counter; ?>" value="<?php the_sub_field('instagram_item'); ?>" class="modalContainerPPL__numberFollowers_button checkboxFollowers"></input>
                      <label for="checkboxFollowersOptional<?php echo $counter; ?>">Less than 1000</label>
                    </li><?php
                  endwhile;
              else :
              endif;
              ?>
            </ul>
            <p class="modalContainerPPL__numberFollowers_textForm"> The main mailbox you use for shopping online: </p>
            <ul class="modalContainerPPL__form_ul row">
              <?php
              $counter == 0;
              if( have_rows('mailbox') ):
                  while ( have_rows('mailbox') ) : the_row();
                  $counter++;

                  ?>
                  <li class="modalContainerPPL__form_li">
                    <input name="mails" type="checkbox" id="checkboxFollowers<?php echo $counter; ?>" value="<?php the_sub_field('mailbox_item'); ?>" class="modalContainerPPL__form_button checkbox"></input>
                    <label for="checkboxFollowers<?php echo $counter; ?>"><?php the_sub_field('mailbox_item'); ?></label>
                  </li>
                  <?php
                  endwhile;
              else :
              endif;

              ?>
            </ul>
            <div id="error-message"></div>
            <button type="submit" class="modalContainerPPL__form_buttonCenter" disabled> 2 clicks and you're done </button>
            <?php wp_nonce_field('vb_new_user','vb_new_user_nonce', true, true ); ?>
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
