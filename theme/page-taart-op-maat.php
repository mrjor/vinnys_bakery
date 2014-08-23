<?php
/**
 * Template Name: taart op maat
*/
 ?>
<?php get_header(); ?>
    <div ng-controller="formCtrl">
    
    <h1 class="title-opmaat"><span class="hide">taart op maat</span></h1>
            <form action="" id="bestel">
            <ul class="opmaat-container">
                <li class="red first" id="stap1">
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap1.png" alt="">
                    <label ng-repeat="item in smaak">
                        <input ng-model="inp.smaak" type="radio" checked name="type" ng-value="item" id="">
                        <img ng-src="<?php bloginfo('template_url'); ?>/img/tom-{{item.val}}.png" alt="">
                    </label>

                    

                    <img class="personen" src="<?php bloginfo('template_url'); ?>/img/tom-aantal-personen.png" alt="">

                    <select ng-model="inp.personen" name="personen" id="personen" ng-options="aantal.val for aantal in persoonkeuses">
                        <option value="">Selecteer aantal personen</option>

                    </select>
                </li>
                <li class="green" ng-class="{enable:inp.personen.pers > 11 && inp.smaak != '' && !skip2, disable:inp.personen.pers < 11 || inp.personen == '' || inp.smaak =='' || skip2}" id="stap2">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap2.png" alt="">

                    <select name="setje" id="setje" ng-model="inp.taartset" ng-options="set.val for set in taartset">
                        <option value="">Selecteer taart set</option>
                    </select>
                    <img class="vanaf" src="<?php bloginfo('template_url'); ?>/img/tom-vanaf12personen.png" height="26" width="164" alt="">
                    
                    <div class="tom-img">
                        <img src="<?php bloginfo('template_url'); ?>/img/tom-img.png" alt="">
                    </div>

                    <a href="" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
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

                    <a href="" class="btn-overslaan" rel="3" ng-click="skip2=true"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
                </li>
                <li class="orange" ng-class="{enable:inp.personen.pers < 11 && inp.smaak != '' && !skip3 || !skip3 && skip2, disable:inp.smaak == '' || inp.personen == '' || inp.personen.pers > 11 || skip3 || skip2 && skip3}" id="stap3">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap3.png" alt="">


                  <a class="upload-image btn btn-success fileinput-button" href="#"><img src="<?php bloginfo('template_url'); ?>/img/btn-uploadfoto.png" height="43" width="137" alt="">
                        <input id="fileupload" type="file" name="files[]" multiple>
                    </a> 
                    <div ng-show="fileError" class="error">Er is iets mis gegaan, probeer het nog eens</div>
                    <div ng-show="inp.foto != '' && !fileError" class="error">Uw foto is geupload</div>

                    <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img2.png" alt=""></div>

                     <a href="" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
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

                    <a href="" class="btn-overslaan" ng-click="skip3=true" rel="4"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
                </li>
                <li class="blue" ng-class="{enable:inp.foto != '' && !skip4 || inp.taartset != '' && !skip4 || skip3 && !skip4, disable:inp.taartset == '' || inp.foto == '' || skip4}" id="stap4">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap4.png" alt="">
                    
                    <input class="text-input" maxlength="15" type="text" name="text" id="text" ng-model="thisText" placeholder="(max. 15 letters)">

                    <a href="" class="btn-ok" ng-click="set_text(thisText)"><img src="<?php bloginfo('template_url'); ?>/img/btn-ok.png" height="38" width="41" alt=""></a>

                    <label ng-repeat="item in texttype">
                        <input type="radio" ng-model="inp.texttype" ng-value="item" name="letterssmaak" id="">
                        <img ng-src="<?php bloginfo('template_url'); ?>/img/tom-{{item.val}}.png" alt="">
                    </label>
                    
    
                     <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img3.png" alt=""></div>

                     <a href="" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="
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

                    <a href="" class="btn-overslaan" ng-click="skip4=true" rel="5"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>
           



                </li>
                <li class="yellow last" ng-class="{enable:inp.text != '' && inp.texttype != '' && inp.taartset == '' && inp.foto =='' || inp.taartset == '' && inp.foto =='' && skip4  , disable:inp.foto != '' || inp.taartset != '' || inp.text == '' || inp.texttype == '' }" id="stap5">
                    <div class="disable-wrapper"></div>
                    <img class="staptitle" src="<?php bloginfo('template_url'); ?>/img/title-stap5.png" alt="">

                     <select name="custom" id="custom" ng-model="inp.custom" ng-options="item.val for item in custom">
                            <option value="">Selecteer een taart</option>

                    </select>

                     <div class="tom-img"><img src="<?php bloginfo('template_url'); ?>/img/tom-img4.png" alt=""></div>

                     <a href="" class="btn-voorbeeld"><img src="<?php bloginfo('template_url'); ?>/img/tom-bekijk-voorbeelden.png" height="31" width="170" alt="">
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

                    <a href="" class="btn-overslaan" ng-click="skip5=true" rel="bestel"><img src="<?php bloginfo('template_url'); ?>/img/tom-overslaan.png" height="39" width="162" alt=""></a>


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
                            <form action="" ng-show="!orderConfirmed" name="formOrder">
                               <div class="price" ng-show="!overleg">
                                   Totaal prijs
                                   <span class="output"><span id="price-output">{{prijs | currency : '€ '}},-</span></span>
                               </div>
                                <div class="gegevens">
                                    <h2>uw gegevens</h2>
                                    <div class="inp-wrapper">
                                        <label for="naam">Naam</label>
                                        <input type="text" id="naam" name="naam" ng-model="form.naam" ng-class="{true: 'error_form'}[submitted && !form.naam]" required/>
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="tel">tel. nr</label>
                                        <input type="text" id="tel" ng-pattern="patern.phone" ng-model="form.tel" name="tel" required/ ng-class="{true: 'error_form'}[submitted && !form.tel]">
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="email">email</label>
                                        <input type="text" ng-model="form.email" ng-pattern="patern.email" id="email" name="email" required ng-class="{true: 'error_form'}[submitted && !form.email]"/>
                                    </div>
                                    <div class="bezorgen-container">
                                        <label ng-repeat="item in bezorgen">
                                            <input type="radio" ng-model="form.bezorgen" name="bezorgen" value="{{item.val}}"> {{item.val}} <span ng-show="item.val == 'bezorgen'">({{bezorgenPrijs | currency : ''}})</span>
                                        </label>
                                        <div class="message" ng-show="{true: 'error_form'}[submitted && !form.bezorgen]">Selecteer een bezorg locatie</div>
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="datum">datum</label><input required ng-model="form.datum" id="datum" type="text" name="date" ng-class="{true: 'error_form'}[submitted && !form.datum]">
                                    </div>
                                    <div class="inp-wrapper">
                                        <label for="tijd">tijd</label>
                                        <select ng-model="form.tijd" requred  ng-options="tijd.val for tijd in tijden" name="tijd" id="tijd">
                                            <option value="">Kies een bezorgtijd</option>
                                        </select>
                                        <div class="message message_pos"  ng-show="{true: 'error_form'}[submitted && !form.tijd]">U moet een bezorgtijd uitkiezen</div>
                                    </div>
                                    <div class="betalen" ng-show="!overleg">Betalen met Ideal <img src="<?php bloginfo('template_url'); ?>/img/ideal.png" height="29" width="33" alt=""></div>

                                </div>
                                <div class="adres-wrapper" ng-class="{disable:form.bezorgen != 'bezorgen'}">
                                    <div class="disable-wrapper"></div>
                                    <h2>bezorg adres</h2>
                                    <input type="text" ng-model="form.postcode" ng-class="{true: 'error_form'}[submitted && !form.postcode && form.bezorgen == 'bezorgen']" ng-required="form.bezorgen == 'bezorgen'"   ng-pattern="patern.postcode" id="postcode" name="postcode" placeholder="postcode">
                                    <input type="text" ng-model="form.huisnummer" ng-class="{true: 'error_form'}[submitted && !form.huisnummer && form.bezorgen == 'bezorgen']" ng-required="form.bezorgen == 'bezorgen'" id="huisnummer" name="huisnummer" placeholder="huisnummer">
                                    <input type="text" ng-model="form.plaats" ng-class="{true: 'error_form'}[submitted && !form.plaats && form.bezorgen == 'bezorgen']" ng-required="form.bezorgen == 'bezorgen'"  id="plaats" name="plaats" placeholder="plaats">
                                </div>

                                <div ng-show="inp.foto != ''" class="foto"><img width="200" ng-src="<?php bloginfo('template_url'); ?>/server/php/files/{{inp.foto.val}}" alt=""></div>

                                <a href="" class="btn-bestel" ng-click="bestel()"><img src="<?php bloginfo('template_url'); ?>/img/btn-bestel.png" height="47" width="107" alt=""></a>
                            </form>

                            <div class="bedankt" ng-show="orderConfirmed">
                                <h2>Bedankt uw bestelling is verzonden!</h2>
                            </div>
                        </div>

                       

                    </div>

                </div>


           
            <div class="clear"></div>

        </div>

<?php get_footer(); ?>