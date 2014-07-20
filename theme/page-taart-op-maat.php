<?php
/**
 * Template Name: taart op maat
*/
 ?>
<?php get_header(); ?>

     
    <h1 class="title-opmaat"><span class="hide">taart op maat</span></h1>
            <form action="" id="bestel">
            <ul class="opmaat-container">
                <li class="red first" id="stap1">
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap1.png" alt="">
                    <label>
                        <input type="radio" checked name="type" value="slagroom" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-slagroom.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="type" value="zwitserse" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-zwitserse.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="type" value="chocolade" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-chocolate.png" alt="">
                    </label>
                    <label>
                        <input type="radio" name="type" value="chipolata" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-chipolata.png" alt="">
                    </label>

                    <img class="personen" src="<?php bloginfo('template_url'); ?>/img/tom-aantal-personen.png" alt="">

                    <select name="personen" id="personen">
                        <option value="1">1 persoon (1,-)</option>
                        <option value="2">2 personen (1,-)</option>
                        <option value="3">3 personen (1,-)</option>
                        <option value="4">4 personen (1,-)</option>
                        <option value="5">5 personen (1,-)</option>
                    </select>
                </li>
                <li class="green disable" id="stap2">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap2.png" alt="">

                    <select name="setje" id="setje">
                        <option value="1">Text setje (7,-)</option>
                        <option value="2">Text setje (7,-)</option>
                        <option value="3">Text setje (7,-)</option>
                        <option value="4">Text setje (7,-)</option>
                        <option value="5">Text setje (7,-)</option>
                    </select>
                    <img class="vanaf" src="<?php bloginfo('template_url'); ?>/img/tom-vanaf12personen.png" height="26" width="164" alt="">
                    
                    <div class="tom-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-img.png" height="64" width="127" alt="">
                    </div>

                    <a href="#" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
                        <div class="popup-content">
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                             <img src="<?php bloginfo('template_url'); ?>/img/next.png" class="slidesjs-next slidesjs-navigation" height="20" width="19" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="slidesjs-previous slidesjs-navigation" height="20" width="19" alt="">
                            </div>

                        </div>
                    </a>

                    <a href="#" class="btn-overslaan" rel="3"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
                </li>
                <li class="orange disable" id="stap3">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap3.png" alt="">


                  <a class="upload-image btn btn-success fileinput-button" href="#"><img src="<?php bloginfo('template_url'); ?>/img/btn-uploadfoto.png" height="43" width="137" alt="">
                        <input id="fileupload" type="file" name="file">
                    </a> 

                    <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img2.png" height="67" width="129" alt=""></div>

                     <a href="#" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
 <div class="popup-content">
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                             <img src="<?php bloginfo('template_url'); ?>/img/next.png" class="slidesjs-next slidesjs-navigation" height="20" width="19" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="slidesjs-previous slidesjs-navigation" height="20" width="19" alt="">
                            </div>

                        </div>
                     </a>

                    <a href="#" class="btn-overslaan" rel="4"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
                </li>
                <li class="blue disable" id="stap4">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap4.png" alt="">
                    
                    <input class="text-input" maxlength="15"type="text" name="text" id="text" placeholder="(max. 15 letters)">

                    <div class="btn-ok"><img src="<?php bloginfo('template_url'); ?>/img/btn-ok.png" height="38" width="41" alt=""></div>

                    <label>
                        <input type="radio" checked value="chocolade" name="letterssmaak" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-chocoladeletter.png" alt="">
                    </label>


                    <label>
                        <input type="radio" value="marsepijn" name="letterssmaak" id="">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-marsepijn.png" height="18" width="164" alt="">
                    </label>
                     <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img3.png" height="67" width="129" alt=""></div>

                     <a href="#" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="
                    ">
                     <div class="popup-content">
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                             <img src="<?php bloginfo('template_url'); ?>/img/next.png" class="slidesjs-next slidesjs-navigation" height="20" width="19" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="slidesjs-previous slidesjs-navigation" height="20" width="19" alt="">
                            </div>
                        </div>
                     </a>

                    <a href="#" class="btn-overslaan" rel="5"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
           



                </li>
                <li class="yellow last disable" id="stap5">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap5.png" alt="">

                     <select name="custom" id="custom">
                        <option value="1">spiderman (7,-)</option>
                        <option value="2">spiderman</option>
                        <option value="2">spiderman</option>
                        <option value="2">spiderman</option>
                        <option value="2">spiderman</option>
                    </select>

                     <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img4.png" height="67" width="129" alt=""></div>

                     <a href="#" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
                         <div class="popup-content">
                            <div class="slide">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/img/slide-image.png" height="337" width="409" alt="">
                             <img src="<?php bloginfo('template_url'); ?>/img/next.png" class="slidesjs-next slidesjs-navigation" height="20" width="19" alt="">
                            <img src="<?php bloginfo('template_url'); ?>/img/prev.png" class="slidesjs-previous slidesjs-navigation" height="20" width="19" alt="">
                            </div>

                        </div>
                     </a>

                    <a href="#" class="btn-overslaan" rel="bestel"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>


                </li>
            </ul>
            </form>

            <div class="popup-overlay popup-slide">
                    
                    <div class="popup-container ">
                        
                        <img class="popup-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
                        
                        <div class="content-container">
                            
                            

                        </div>

                       

                    </div>

                </div>


                <div class="popup-overlay popup-bestel">
                    
                    <div class="popup-container popup-slide">
                        
                        <img class="popup-close" src="<?php bloginfo('template_url'); ?>/img/info-close.png" alt="">
                        

                        <div class="content-container">
                            <form action="">
                               <div class="price">
                                   Totaal prijs
                                   <span class="output">euro <span id="price-output">25,00</span></span>
                               </div>
                                <div class="gegevens">
                                    <h2>uw gegevens</h2>
                                    <div class="inp-wrapper">
                                        <label for="naam">Naam</label>
                                        <input type="text" id="naam" name="naam" />
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="tel">tel. nr</label>
                                        <input type="text" id="tel" name="tel" />
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="email">email</label>
                                        <input type="text" id="email" name="email" />
                                    </div>
                                    <div class="bezorgen-container">
                                    <label><input type="radio" checked name="bezorgen" value="ophalen"> Ophalen</label>
                                    <label><input type="radio" name="bezorgen" value="bezorgen"> Bezorgen (4.50)</label>
                                    <label><input type="radio" name="bezorgen" value="diemen"> diemen</label>
                                    <label><input type="radio" name="bezorgen" value="ijsburg"> ijsburg</label>
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="datum">datum</label><input id="datum" type="text" name="date">
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="tijd">tijd</label>
                                         <select name="tijd" id="tijd">
                                            <option value="1">stussen 10:00 en 15:00</option>
                                            <option value="2">stussen 10:00 en 15:00</option>
                                            <option value="2">stussen 10:00 en 15:00</option>
                                            <option value="2">stussen 10:00 en 15:00</option>
                                            <option value="2">stussen 10:00 en 15:00</option>
                                        </select>
                                    </div>
                                    <div class="betalen">Betalen met Ideal <img src="<?php bloginfo('template_url'); ?>/img/ideal.png" height="29" width="33" alt=""></div>

                                </div>
                                <div class="adres-wrapper disable">
                                    <div class="disable-wrapper"></div>
                                    <h2>bezorg adres</h2>
                                    <input type="text" id="postcode" name="postcode" placeholder="postcode">
                                    <input type="text" id="postcode" name="huisnummer" placeholder="huisnummer">
                                    <input type="text" id="postcode" name="plaats" placeholder="plaats">
                                </div>

                                <a href="#" class="btn-bestel"><img src="<?php bloginfo('template_url'); ?>/img/btn-bestel.png" height="47" width="107" alt=""></a>
                            </form>
                        </div>

                       

                    </div>

                </div>


           
            <div class="clear"></div>

<?php get_footer(); ?>