<!-- Header -->
<style>
    .row>* {
    flex-shrink: 0;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
    }
    
    .header_Name_logo {
	    width: 4%;
    }
    
    
    	@media (max-width: 768px) {
            .header_Name {
		        min-height: 45px;
		    }
		    
		    .header_Name_logo {
		        width: 20%;
		    }
		    
		    .header_Name_title {
			    display: none;
		    }
		    .header_Name_title_mobile {
			    display: block !important;
			    font-family:FreesiaUPC;
		    }
	}
	
</style>
<!--Note: The Jain International School Heading-->
<center>
<div class="header_Name"
  style="display:flex; align-content:center; justify-content:center ;background-color:#FFBF00; color:#f8c300; ">
    

  <img style="width: 5.5%; height:20%;margin-top: 1%;margin-right:3%;margin-left:8%;margin-bottom: 1%;" src="/images/logo.png"
      alt="JIS-logo">
 

  <div>
    <h1 class="" style="color:#223C60; font-family:FreesiaUPC; font-size: 3.4vw;margin-top: 3%;">THE JAIN
      INTERNATIONAL SCHOOL</h1>
  </div>

  <img style=" margin-left:2%;margin-right:10%;width: 5.5%; height:80%; margin-top: 1%;margin-bottom: 1%;border-radius: 50%;" src="/images/trustee_logo.png"
      alt="trustee_logo">
 

</div>
</center>
<!---Header Ending-->



<!-- navbar -->
<header class="header clearfix" id="header">
  <div class="header-wrap clearfix">
    <div class="container" style="width:89% ;margin-left:5%;margin-right:4%">
      <div class="row">
        <div class="btn-menu"><img src="/Header/burgermenu.png" /></div>
      </div>
    </div>
          
    <div class="col-md-12 new_tab" style="display:flex; align-items: center; justify-content:center;margin-top:-30px">
      <div class="nav-wrap">
        <nav class="mainnav" id="mainnav" style="padding-top:20px">
          <ul class="menu">
            <li><a href="/index.php">Home</a></li>
            <li><a href="/about-us.php">About Us</a>
              <ul class="submenu">
                <li><a href="/about-us.php">Overview</a></li>
                <li><a href="/messages.php">Messages </a></li>
                <li><a href="/management.php">Management</a></li>
                <li><a href="/staff-details.php">Staff Details</a></li>
               <!-- <li><a href="/educational-model.php">Educational Model</a></li>-->
              </ul>
            </li>
            <li><a href="#">Academics</a>
              <ul class="submenu">
                <li><a href="/academics/kindergarten.php">Kindergarten</a></li>
                <li><a href="/academics/primary-school.php">Primary School</a></li>
                <li><a href="/academics/secondary-school.php">Secondary School</a></li>
                <li><a href="/academics/senior-secondary.php">Senior Secondary</a></li>
                <li><a href="/academics/academic-calender.php">Academic Calendar</a></li>
                <!--<li><a href="/booklist.php">Book List</a></li>-->
                <li><a href="/academics/tc.php">TC</a></li>
              </ul>
            </li>
            <li><a href="/life-at-jis.php">Life at JIS</a></li>
            <li><a href="#">Facilities</a>
              <ul class="submenu">
                <li><a href="/facilities/cafeteria.php">Cafeteria</a></li>
                <!--<li><a href="/facilities/hostel.php">Hostel</a></li>-->
                <li><a href="/facilities/library.php">Library</a></li>
                <li><a href="/facilities/medical.php">Medical</a></li>
                <li><a href="/facilities/transport.php">Transport</a></li>
              </ul>
            </li>
            <li><a href="#">Beyond Academics</a>
              <ul class="submenu">
                <li><a href="/beyond-academics/social-outreach.php">Social Outreach </a></li>
                <!--<li><a href="/beyond-academics/independence-day.php">Independence Day</a></li>-->
                <!--<li><a href="/beyond-academics/in-venture-ceremony.php">Investiture Ceremony</a></li>-->
                <li><a href="/beyond-academics/fastract-your-future.php">Fast Track your Future</a></li>
                <li><a href="/beyond-academics/clubs.php">Clubs</a></li>
                <li><a href="/beyond-academics/sports.php">Sports</a></li>
                <li><a href="/beyond-academics/events-and-activities.php">Events &amp; Activities</a></li>
                <li><a href="/beyond-academics/counselling.php">Counselling</a></li>
                <!--<li><a href="/beyond-academics/videos.php">Videos</a></li>-->
              </ul>
            </li>
            <li><a href="/parents-corner.php">Parents Corner</a></li>
            <li><a href="#">Achievements</a>
              <ul class="submenu">
                <li><a href="/media-speaks/achievements.php">Photos</a></li>

                <li><a href="/media-speaks/media-coverage.php">Media Coverage</a></li>
              </ul>
            </li>
            <!--<li><a href="/gallery.php">Gallery</a></li>-->
            <li><a href="/blog/all.php">Blogs</a></li>
            <li><a href="/Badjate.php">Badjate Group</a></li>
          </ul>
          
        </nav>
      
      </div>
    </div>
  </div>
  </div>
  </div>
</header>
<!--Navigation Bar Ending-->


<style>

    /* Media Queries
-------------------------------------------------------------- */



@media only screen and (max-width: 1366px) {
	#header .header-wrap .show-search {
		display: none;
	}
}

/* Smaller than standard 1200 */
@media only screen and (max-width: 1199px) {
	
}

/* Smaller than standard 992 */
@media only screen and (max-width: 991px) {
	#mainnav {
		display: none;
	}

	.btn-menu {
		display: block ;
	}
	
	
/* this is just to show the button of burger menu*/
	.btn-menu > img{
    position: absolute;
    height: 23px;
    width: 23px;
    border-radius: 5px;
    /*box-shadow: 10px 10px 5px; */
    margin-top: -90%;
    margin-left: 94%;
    float: right;
   
    }
    
    .header {
    background: grey;
    position: absolute;
    border-bottom: 3px solid #65b84f;
    width: 100%;
    height: 0px;
    min-height: 0px;
    z-index: 3;
}

	.header .header-wrap .logo {
		float: left;
		margin: 15px 0px 15px 0px;
	}

	/*.btn-menu {
		margin: 30px 0;
	}*/

	.flat-information > li {
		margin-left: 20px;
	}

	.top .top-navigator ul li {
		padding: 7px 15px 8px 16px;
	}

	.flat-row,
	.flat-row.flat-video,
	.page-title,
	.flat-row.portfolio-slides,
	.main-content {
		padding: 50px 0;
	}

	.flat-row.pad-top95px.pad-bottom40px {
		padding-bottom: 0;
	}

	.wrap-form-event {
		padding: 50px 15px
	}

	.about-us.style1 {
		padding: 40px 0 40px;
	}

	.field-large input[type="text"], 
	.field-large input[type="password"], 
	.field-large input[type="datetime"], 
	.field-large input[type="datetime-local"], 
	.field-large input[type="date"], 
	.field-large input[type="month"], 
	.field-large input[type="time"], 
	.field-large input[type="week"], 
	.field-large input[type="number"], 
	.field-large input[type="email"], 
	.field-large input[type="url"], 
	.field-large input[type="search"], 
	.field-large input[type="tel"], 
	.field-large input[type="color"] {
	    height: 50px;
	}

	h1,
	.title-section.style3 .title,
	.flat-countdown-event .title-countdown,
	.page-title .page-title-heading h1,
	.blog-single .entry .main-post .title-post a {
		font-size: 22px;
		line-height: 24px;
	}

	#video-controls .title,
	.about-us .title-about-us {
		font-size: 20px;
		line-height: 22px;
	}

	#video-controls a {
		width: 50px;
		height: 50px;
		line-height: 50px;
		font-size: 18px;		
	}

	.switcher-container h2 a,
	.go-top,
	.flat-event-slide .flex-direction-nav a {
		width: 35px;
		height: 35px;
		line-height: 35px;
	}

	.switcher-container h2 i {
		font-size: 18px;
		margin-top: 0;
	}

	.switcher-container h2 a {
		left: -35px;
	}

	.flat-divider.d55px,
	.flat-divider.d88px,
	.flat-divider.d90px,
	.flat-divider.d33px,
	.flat-divider.d75px,
	.flat-divider.d20px,
	.flat-divider.d60px,
	.flat-divider.d65px,
	.flat-divider.d45px,
	.flat-divider.d30px,
	.flat-divider.d70px {
		height: 0;
	}

	.wrap-contactform-home1,
	.wrap-blog-fullwidth,
	.flat-login {
		padding: 0 15px;
	}

	.title-section,
	.flat-testimonials-slider #flat-testimonials-flexslider {
		margin-bottom: 40px;
	}

	.flat-about-us .about-us-img .v1, 
	.flat-about-us .about-us-img .v2, 
	.flat-about-us .about-us-img .v3 {
		position: relative;
		width: 50%;
		float: left;
	}


	.flat-about-us .about-us-img .v1,
	.flat-about-us .about-us-img .v2,
	.flat-about-us .about-us-img .v3,	
	.wrap-form-event,
	.flat-team.style1 .descritption blockquote:before {
		left: 0;
		top: 0;
	}

	.flat-teammember .team-image img {
		top: 0px;
		left: 0;
	}

	.flat-contact-form.fillter-courses .wrap-type-input .wrap,
	.flat-contact-form.fillter-courses .all-categories button {
		float: none;
	}

	.flat-event-slide .flex-direction-nav .flex-next {
		right: 0;
	}

	.flat-event-slide .flex-direction-nav .flex-next {
		top: 50%;
		margin-top: -25px;
	}

	.flat-contact-form.fillter-courses .wrap-type-input .wrap,
	.main-content.blog-single-sidebar .entry .feature-post img,
	.flat-list.left,
	.course-list .list-content,
	.course-list .thumb {
		padding-right: 0;
	}

	.flat-list.right,
	.flat-information-box.inf4 {
		padding-left: 0;
	}

	.flat-contact-form.border-radius select,
	.flat-contact-form.border-white .wrap.courses-keyword input[type="text"],
	.wrap-form-event,
	.widget.widget_mc4wp input[type="email"],
	.flat-portfolio .item.w50,
	.flat-contact-form.border-radius input {
		width: 100%;
	}

	.flat-portfolio .item {
		width: 50%;
	}

	.widget.widget_mc4wp input[type="submit"] {
		position: absolute;
	}

	.widget.widget_mc4wp input[type="submit"] {
		right: 30px;
	}

	.copyright,
	.flat-socials.text-right,
	.single-image.style1,
	.single-image,
	.flat-iconbox {
		text-align: center;
	}

	ul.flat-socials li:first-child {
		margin-left: 0;
	}

	.title-section.cl-white.style3.v3,
	.flat-event.style1,
	.blog-single .entry .main-post {
		margin-bottom: 0;
	}

	.copyright {
		padding: 36px 0 15px;
	}

	.bottom ul.flat-socials li {
		padding: 15px 0 30px;
	}

	.header .header-wrap:after,
	.flat-about-us .about-us-img .v1 {
		display: none;
	}

	.flat-contact-form.fillter-courses .all-categories {
		padding-bottom: 25px;
	}

	.flat-contact-form.fillter-courses .all-categories button,
	.wrap-form-event button,
	.blog-single .entry .main-post {
		padding: 17px 20px;
	}

	button, input[type="button"], 
	input[type="reset"], 
	input[type="submit"] {
		padding: 19px 99px 17px 90px;
	}

	.flat-testimonials-slider #flat-testimonials-flexslider:before {
		top: 0;
	}

	.footer-widgets .widget,
	.flat-iconbox.style1,
	.flat-iconbox,
	.flat-courses.style1 {
		margin-bottom: 30px;
	}

	.single-image.style1 img,
	.single-image img {
		margin: 0 0 0;
	}

	.flat-event .event-wrapper .meta .location:before {
		left: 115px;
	}

	.flat-testimonials-flex .flex-control-nav {
		right: 0;
	}

	.flat-testimonials-flex .flex-control-nav {
		top: 100px;
	}

	.flat-row.pad-top0px.pad-bottom0px,
	.about-us.pad-top55px {
		padding: 0;
	}

	.flat-one-four {
		width: 50%;
	}

	.flat-row.pad-top0px.pad-bottom0px.mag-top-199px {
		margin-top: 50px;
	}

	.flat-team.style1 {
	    padding: 30px 0px 30px 20px;
	}

	.flat-information-box.inf1,
	.flat-information-box.inf2,
	.flat-information-box.inf4 {
		padding-right: 0;
	}

	.course-list .thumb {
		margin-bottom: 15px;
	}

	.fillter-courses.style1 .categories-courses:before, 
	.fillter-courses.style1 .courses-level:before {
	    right: 40px;
	    top: 15px;
	}

	.flat-portfolio.v1 .flex-control-nav {
	    width: 90%;
	}

	.flat-teammember .team-image img {
		position: relative;
	}

	.flat-grid.margin55px {
		margin: 0 0;
	}

	.flat-login .create-account .link-submit-wrap a {
		font-size: 13px;
	}
	
}

/* Tablet Landscape */
 @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {

}

/* Tablet Portrait Size */
@media only screen and (min-width: 768px) and (max-width: 991px) {
	
}

/* All Mobile Sizes */
@media only screen and (max-width: 767px) {
	.blog .entry .feature-post,
	.blog .entry .main-post,
	.wrap-contactform-home1 .input-wrap,
	.wrap-contactform-home3 .wrap-type-input,
	.wrap-contactform-home3 .textarea-wrap {
		width: 100%;
	}

	.flat-one-four {
		width: 50%;
	}

	.blog .entry .feature-post,
	.blog .entry .main-post,
	.course-list .thumb {
		float: none;
	}

	.flat-courses {
		text-align: center;
		margin-bottom: 30px;
	}

	.flat-team.style2 {
		margin: 0 15px 0 70px;
	}

	.flat-team.style2 {
		padding: 15px 15px 15px 50px;
	}

	.flat-team.style2 .team-image img {
		left: 0;
	}

	.testimonials-flexslides1.flat-testimonials-flex.style2 .flex-direction-nav {
		display: block;
	}

	.flex-direction-nav,
	.row-bg-whiteblack:after,
	.entry.images-left .main-post:before,
	.entry.images-right .main-post:after {
		display: none;
	}

	.flat-testimonials-slider #flat-testimonials-carousel,
	.flat-event.style1 .event-wrapper .meta .location,
	.wrap-contactform-home3 .textarea-wrap,
	.course-sidebar {
		padding-left: 0;
	}

	.wrap-contactform-home3 .wrap-type-input,
	.content-box .content {
		padding-right: 0;
	}

	.flat-countdown-event {
		padding: 50px 15px 65px 15px;
	}

	.flat-countdown-event .circle {
		width: 80px;
		height: 80px;	
		margin-right: 10px;	
		padding-top: 5px;
	}

	.flat-countdown-event .circle .numb,
	.flat-iconbox.center.style4 .flat-counter div,
	.aquarius h2 {
		font-size: 22px;
	}

	.course-widget-featured ul li {
		overflow: hidden;
	}

	.flat-event .event-wrapper {
		overflow: visible;
	}

	.entry.images-right .main-post {
		padding-left: 15px;
	}

	.flat-courses .courses-price p {
		font-size: 18px;
	}

	.flat-divider.d50px {
		height: 0;
	}

	.single-image.style1,
	.image,
	.course-list > ul > li,
	.flat-event .event-wrapper,
	.content-box {
		margin-bottom: 30px;
	}

	.wrap-contactform-home3 button,
	.flat-row.pad-top95px.pad-bottom50px {
		padding: 15px 25px;
	}

	.wrap-contactform-home3 button {
		font-size: 14px;
	}

	.list-course {
		margin-right: 30px;
    	display: flex;
    	-webkit-justify-content: center;
    	justify-content: center;
	}

	.list-course,
	.course-sidebar {
		padding-top: 40px;
	}

	.main-content.blog-single-sidebar .entry .main-post,
	.main-content.blog-single-sidebar .section-comment {
		margin-right: 0;
	}

	.widget.widget-instagram .instagram-thumb .thumb {
		width: 90px;
	}

	.fillter-courses .categories-courses:before, 
	.fillter-courses .courses-level:before {
		right: 30px;
		top: 5px;
	}

	.flat-contact-form.fillter-courses .all-categories button, 
	.wrap-form-event button, 
	.blog-single .entry .main-post {
		padding: 12px 20px;
	}

	.flat-contact-form.border-radius select, 
	.flat-contact-form.border-radius input {
		height: 50px;
	}

	.fillter-courses .categories-courses:before, 
	.fillter-courses .courses-level:before {
		right: 30px;
		top: 11px;
	}

	.flat-contact-form.border-white select, 
	.flat-contact-form.border-white textarea, 
	.flat-contact-form.border-white input[type="text"]{
		font-size: 12px;
		line-height: 10px;
	}

	.flat-contact-form.fillter-courses .all-categories button, 
	.wrap-form-event button, 
	.blog-single .entry .main-post {
		padding: 17px 40px;
	}

	.content-box .content p {
		padding-bottom: 0;
	}

	.flat-grid.margin20px {
	    margin: 0 -15px;
	}

	.wrap-form-event {
		position: relative;
		top: -15px;
	}

}

/* Mobile Landscape Size */
@media only screen and (min-width: 480px) and (max-width: 767px) {

}

/* Mobile Portrait Size */
@media only screen and (max-width: 479px) {
	.flat-portfolio .item,
	.col-xs-6,
	.your-rating .rating {
		width: 100% !important;
	}

	.your-rating span {
		padding: 0;
	}

	.flat-row,
	.blog-single .section-comment {
		padding: 35px 0;
	}

	.flat-courses,
	.flat-iconbox,
	.top .top-navigator,
	.author-post .flat-socials,
	.course-author-post .flat-socials {
		text-align: left;
	} 

	.flat-iconbox.style1 {
		text-align: center;
	}

	.flat-countdown-event .circle {
		margin-right: 2px;
	}

	.list-course {
		margin-right: 55px;
	}

	.flat-countdown-event .circle,
	.flat-contact-form.border-radius select,
	.blog-single .feature-post { 
		margin-bottom: 20px;
	}

	.flat-information > li.phone {
		margin-left: 0;
	}

	.top .language,
	.flat-row.pad-top85px.pad-bottom85px {
		padding: 15px 0 10px;
	}

	.top-navigator {
		border-top: 1px solid #eeeeee
	}

	.widget.widget_mc4wp {
		padding: 32px 15px 15px;
	}

	.widget.widget_mc4wp input[type="submit"] {
		padding: 17px 15px 19px 15px;
	}

	.blog-single .entry .main-post .entry-post ul,
	.course-single .course-entry .content-desc ul {
		padding-left: 25px;
	}

	.author-post .flat-socials,
	.course-author-post .flat-socials {
		margin-top: 26px;
	}

	.author-post .author .author-meta,
	.course-author-post .author .author-meta {
		padding-top: 0;
	}

	.flat-event .event-wrapper,
	.blog-pagination .flat-pagination li.next {
		padding-right: 0;
	}

	.course-rating .average-rating {
		margin-right: 0;
	}

	.course-rating .average-rating,
	.course-comment-respond .wrap-type-input .input-wrap,
	.flat-one-four {
		width: 100%;
	}

	.course-comment-post .comment .comment-avatar img,
	.comment-post .comment .comment-avatar img,
	.course-comment-respond .wrap-type-input .input-wrap.name {
		float: none;
	}

	.blog-pagination .flat-pagination li.prev {
		padding-left: 0;
	}

	.blog-pagination .flat-pagination li.prev,
	.blog-pagination .flat-pagination li,
	.blog-pagination .flat-pagination li.active {
		margin-left: 0;
	}

	.flat-contact-form.border-radius.style1 select, 
	.flat-contact-form.border-radius.style1 input {
		height: 50px;
	}

	.fillter-courses.style1 .categories-courses:before, 
	.fillter-courses.style1 .courses-level:before {
	    right: 30px;
	    top: 7px;
	}

	.flat-countdown-event {
	    padding: 50px 0 65px 0;
	}

}

@media (max-width: 320px) {	
	
}

/* Retina Devices */
	@media 
	only screen and (-webkit-min-device-pixel-ratio: 2),
	only screen and (   min--moz-device-pixel-ratio: 2),
	only screen and (   -moz-min-device-pixel-ratio: 2),
	only screen and (     -o-min-device-pixel-ratio: 2/1),
	only screen and (        min-device-pixel-ratio: 2),
	only screen and (                min-resolution: 192dpi),
	only screen and (                min-resolution: 2dppx) {
	
	.flat-accordion .toggle-title.active:after {
		background: url("../images/icon/sub%402x.png");
		background-size: 26px 10px;
	}

	.flat-accordion .toggle-title:after {
		background: url("../images/icon/add%402x.png");
		background-size: 26px 26px;
	}

	.widget_search .search-form .search-submit {
		background: url("../images/icon/search-icon%402x.png");
		background-size: 30px 30px;
	}
}
</style>