<?php
/*
Template Name: Contact Page for Hungary
*/
?>
<?php get_header(); ?>

<div id="content" class="pg-about-content">

 <!-- Title Banner of Page with Big Image -->
   <div id="pg-about-banner-container">
    <div class="row">
	 <div id="pg-about-banner"></div>
    </div> 
   </div>

	<div id="title-banner" class="large-centered columns">
		<h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
	</div>
 <!-- Beginning of Content  -->   
	<div id="inner-about-content">

	<form action="http://go.pregelamericas.com/l/95432/2016-10-05/2hyhzk" method="post">
<p>Forduljon hozzánk e-mailjével bizalommal</p>
<div class="row">
<div class="medium-6 columns"><label>Keresztnév
<input name="first_name" required="required" type="text" placeholder="Keresztnév" />
</label></div>
<div class="medium-6 columns"><label>Vezetéknév
<input name="last_name" required="required" type="text" placeholder="Vezetéknév" />
</label></div>
</div>
<div class="row">
<div class="medium-6 columns"><label>Cég név
<input name="business" required="required" type="text" placeholder="Cég név" />
</label></div>
<div class="medium-6 columns"><label>Email
<input name="email" required="required" type="email" placeholder="Email" />
</label></div>
</div>
<div class="row">
<div class="medium-6 columns"><label>Telefon
<input name="phone" required="required" type="text" placeholder="Telefon" />
</label></div>
<div class="medium-6 columns"><label>Város
<input name="city" required="required" type="text" placeholder="Város" />
</label></div>
</div>
<div class="row">
<div class="medium-6 columns"><label>Megye
<input name="state" required="required" type="text" placeholder="Megye" />
</label></div>
<div class="medium-6 columns"><label>Ország
<input name="country" required="required" type="text" placeholder="Ország" />
</label></div>
</div>
<div class="row">
<div class="medium-12 columns"><label>Honnan hallott rólunk?
<input name="source" type="text" placeholder="Honnan hallott rólunk?" />
</label></div>
</div>
<div class="row">
<div class="medium-12 columns"><label>Hogyan segíthetünk?
<input name="comments" required="required" type="text" placeholder="Hogyan segíthetünk?" />
</label></div>
</div>
<div class="row">
<div class="medium-12 columns">

<a style="text-decoration: underline;" data-open="PrivacyModal">Privacy Policy Disclosure</a>

<input id="checkbox1" name="privacy_policy" required="required" type="checkbox" /><label for="checkbox1">I agree to the terms and conditions after having read the <a data-open="PrivacyModal">Privacy policy disclosure.</a></label>

</div>
</div>
<div style="position: absolute; left: -9999px; top: -9999px;"><label for="pardot_extra_field">Comments</label>
<input id="pardot_extra_field" name="pardot_extra_field" type="text" /></div>
<button class="success button large" style="margin-top: 10px;" type="submit" value="submit" required="required">Küldés</button>

</form>
<div id="PrivacyModal" class="reveal" data-reveal="">

<strong>Statement pursuant to art. 13 of Legislative Decree D.lgs 196/2003 </strong><strong>(formerly art. 10 Law 675/96)</strong>

<strong> </strong>


<strong>PREGEL SPA</strong>, as independent Data Controller, hereby informs you, as person concerned, that:



<p>the personal data (common data) entered and stored in this website <strong><u>are here in this website for the purpose of</u></strong>:</p>


<ul>
 	<li><strong>managing assessment of the establishment of a future partnership relationship as</strong> <strong>Agent</strong><strong>;</strong></li>
 	<li><strong>managing assessment of the establishment of a future sales relationship as </strong><strong>Customer</strong><strong>;</strong></li>
</ul>


<p>these data are processed by our designated personnel (personnel designated by <strong> PREGEL SPA</strong> in charge of personal data processing) and are stored electronically on dedicated web servers. These data are exclusively processed for the aforementioned purposes. <strong><u>Other scopes of communication or disclosure are not allowed.</u></strong></p>





<p>The rights enshrined in art. 7 of Legislative Decree D.lgs 196/2003 (formerly art. 13 of L. 675/96) remain constantly valid over time, i.e. your right to have your personal data updated, corrected, integrated, erased, anonymized and your right to object to having your personal data processed and your right to access your personal data according to the times and procedures established by law.</p>



<p>You may exercise the aforementioned rights by writing directly to the Data Controller or Data Processor at the following address :</p>


<strong>PREGEL SPA, via Comparoni 64 - 42122 Reggio Emilia (RE) - Italy.</strong>



<strong>CONSENT FOR PERSONAL DATA PROCESSING</strong>

<strong>Your declaration of <u>having carefully read this statement</u> and of granting your <u>consent to having your personal data</u> processed by means of this website is made by <u>ticking the “Privacy statement and consent for personal data processing” Box and by clicking on the send button to enable the tick-box.</u></strong>

<button class="close-button" type="button" data-close="">
×
</button>

</div>

 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->

<?php get_footer(); ?>
