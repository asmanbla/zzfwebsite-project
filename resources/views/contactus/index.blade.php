<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- CSS -->
    <style>

.social-media-links {
    display: flex;
    gap: 10px;
}
.social-icon-link {
    display: inline-flex;
    width: 32px; /* Ubah ukuran sesuai kebutuhan */
    height: 32px;
}
.icon {
    width: 100%;
    height: auto;
}

.map-container {
    position: relative;
    padding-bottom: 56.25%; /* Ratio 16:9 */
    height: 0;
    overflow: hidden;
    max-width: 100%;
    background: #eee;
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0;
}

.contact_us_6 * {
  font-family: Nunito, sans-serif;
}

.contact_us_6 .text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  line-height: 25px;
}

.contact_us_6 .responsive-cell-block {
  min-height: 75px;
}

.contact_us_6 input:focus,
.contact_us_6 textarea:focus {
  outline-color: initial;
  outline-style: none;
  outline-width: initial;
}

.contact_us_6 .container-block {
  min-height: 75px;
  width: 100%;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  display: block;
}

.contact_us_6 .responsive-container-block {
  min-height: 75px;
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.contact_us_6 .responsive-container-block.big-container {
  padding-top: 10px;
  padding-right: 30px;
  width: 35%;
  padding-bottom: 10px;
  padding-left: 30px;
  background-color: #03a9f4;
  position: absolute;
  height: 950px;
  right: 0px;
}

.contact_us_6 .responsive-container-block.container {
  position: relative;
  min-height: 75px;
  flex-direction: row;
  z-index: 2;
  flex-wrap: nowrap;
  align-items: center;
  justify-content: center;
  padding-top: 0px;
  padding-right: 30px;
  padding-bottom: 0px;
  padding-left: 30px;
  max-width: 1320px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
}

.contact_us_6 .container-block.form-wrapper {
  background-color: white;
  max-width: 450px;
  text-align: center;
  padding-top: 50px;
  padding-right: 40px;
  padding-bottom: 50px;
  padding-left: 40px;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 4px 20px 7px;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
  margin-top: 90px;
  margin-right: 0px;
  margin-bottom: 60px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.contactus-head {
  font-size: 36px;
  line-height: 52px;
  font-weight: 900;
}

.contact_us_6 .text-blk.contactus-subhead {
  color: #9c9c9c;
  width: 300px;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  display: none;
}

.contact_us_6 .responsive-cell-block.wk-desk-6.wk-ipadp-6.wk-tab-12.wk-mobile-12 {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 26px;
  margin-left: 0px;
  min-height: 50px;
}

.contact_us_6 .input {
  width: 100%;
  height: 50px;
  padding-top: 1px;
  padding-right: 15px;
  padding-bottom: 1px;
  padding-left: 15px;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #eeeeee;
  border-right-color: #eeeeee;
  border-bottom-color: #eeeeee;
  border-left-color: #eeeeee;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  font-size: 16px;
  color: black;
}

.contact_us_6 .textinput {
  width: 98%;
  min-height: 150px;
  padding-top: 20px;
  padding-right: 15px;
  padding-bottom: 20px;
  padding-left: 15px;
  border-top-width: 2px;
  border-right-width: 2px;
  border-bottom-width: 2px;
  border-left-width: 2px;
  border-top-style: solid;
  border-right-style: solid;
  border-bottom-style: solid;
  border-left-style: solid;
  border-top-color: #eeeeee;
  border-right-color: #eeeeee;
  border-bottom-color: #eeeeee;
  border-left-color: #eeeeee;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  font-size: 16px;
}

.contact_us_6 .submit-btn {
  width: 98%;
  background-color: #03a9f4;
  height: 60px;
  font-size: 20px;
  font-weight: 700;
  color: white;
  border-top-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 0px;
  border-left-width: 0px;
  border-top-style: outset;
  border-right-style: outset;
  border-bottom-style: outset;
  border-left-style: outset;
  border-top-color: #767676;
  border-right-color: #767676;
  border-bottom-color: #767676;
  border-left-color: #767676;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-right-radius: 40px;
  border-bottom-left-radius: 40px;
}

.contact_us_6 .form-box {
  z-index: 2;
  margin-top: 0px;
  margin-right: 48px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.input-title {
  text-align: left;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 10px;
  font-size: 14px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  color: #9c9c9c;
}

.contact_us_6 ::placeholder {
  color: #dadada;
}

.contact_us_6 .mob-text {
  display: block;
  text-align: left;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 25px;
  margin-left: 0px;
}

.contact_us_6 .responsive-cell-block.wk-tab-12.wk-mobile-12.wk-desk-12.wk-ipadp-12 {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.contact_us_6 .text-blk.contactus-subhead.color {
  color: white;
}

.contact_us_6 .map-box {
  max-width: 800px;
  max-height: 520px;
  width: 100%;
  height: 520px;
  background-color: #d9d9d9;
  background-image: url("https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/sc23.png");
  background-size: cover;
  background-position-x: 50%;
  background-position-y: 50%;
}

.contact_us_6 .map-part {
  width: 100%;
  height: 100%;
}

.contact_us_6 .text-blk.map-contactus-head {
  font-weight: 900;
  font-size: 22px;
  line-height: 32px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  color: #03a9f4;
}

.contact_us_6 .text-blk.map-contactus-subhead {
  max-width: 300px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 20px;
  margin-left: 0px;
}

.contact_us_6 .social-media-links.mob {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 30px;
  margin-left: 0px;
  width: 230px;
  display: flex;
  justify-content: flex-start;
}

.contact_us_6 .link-img {
  width: 30px;
  height: 30px;
  margin-top: 0px;
  margin-right: 25px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .link-img.image-block {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.contact_us_6 .social-icon-link {
  margin: 0 25px 0 0;
  padding: 0 0 0 0;
}

@media (max-width: 1024px) {
  .contact_us_6 .responsive-container-block.container {
    justify-content: center;
  }

  .contact_us_6 .map-box {
    position: absolute;
    top: 0px;
    max-height: 320px;
  }

  .contact_us_6 .map-box {
    max-width: 100%;
    width: 100%;
  }

  .contact_us_6 .responsive-container-block.container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .map-part {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .mob-text {
    display: block;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 60px;
    margin-bottom: 40px;
    margin-left: 0px;
  }

  .contact_us_6 .link-img {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    display: flex;
    justify-content: space-evenly;
  }

  .contact_us_6 .social-media-links.mob {
    justify-content: space-evenly;
  }

  .contact_us_6 .responsive-cell-block.wk-desk-7.wk-ipadp-12.wk-tab-12.wk-mobile-12 {
    text-align: center;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex-direction: row;
  }

  .contact_us_6 .text-blk.contactus-subhead {
    display: block;
  }

  .contact_us_6 .mob-text {
    text-align: center;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-container-block.container {
    flex-wrap: wrap;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 0px;
    margin-bottom: 40px;
    margin-left: 0px;
  }
}

@media (max-width: 768px) {
  .contact_us_6 .submit-btn {
    width: 100%;
  }

  .contact_us_6 .input {
    width: 100%;
  }

  .contact_us_6 .textinput {
    width: 100%;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 80px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.input-title {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .form-box {
    padding-top: 0px;
    padding-right: 20px;
    padding-bottom: 0px;
    padding-left: 20px;
  }

  .contact_us_6 .container-block.form-wrapper {
    padding-top: 50px;
    padding-right: 15px;
    padding-bottom: 50px;
    padding-left: 15px;
  }

  .contact_us_6 .mob-text {
    display: block;
  }

  .contact_us_6 .responsive-container-block.container {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 200px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 220px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .form-box {
    margin-top: 220px;
    margin-right: 0px;
    margin-bottom: 50px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.contactus-head {
    font-size: 32px;
    line-height: 40px;
  }
}

@media (max-width: 500px) {
  .contact_us_6 .container-block.form-wrapper {
    padding-top: 50px;
    padding-right: 15px;
    padding-bottom: 50px;
    padding-left: 15px;
  }

  .contact_us_6 .container-block.form-wrapper {
    margin-top: 60px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-cell-block.wk-ipadp-6.wk-tab-12.wk-mobile-12.wk-desk-6 {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 15px;
    margin-left: 0px;
  }

  .contact_us_6 .responsive-container-block {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 35px;
    margin-left: 0px;
  }

  .contact_us_6 .text-blk.input-title {
    font-size: 12px;
  }

  .contact_us_6 .text-blk.contactus-head {
    font-size: 26px;
    line-height: 35px;
  }

  .contact_us_6 .input {
    height: 45px;
  }
}

/* responsive css */
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
</style>
</head>
<body>
<div class="contact_us_6">
  <div class="responsive-container-block container">
  <form class="form-box" id="contact-form">
  <div class="container-block form-wrapper">
    <div class="mob-text">
      <p class="text-blk contactus-head">
        Get in Touch
      </p>
      <p class="text-blk contactus-subhead">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
      </p>
    </div>
    <div class="responsive-container-block" id="i2cbk">
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
        <p class="text-blk input-title">
          NAME
        </p>
        <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
      </div>
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
        <p class="text-blk input-title">
          EMAIL
        </p>
        <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
      </div>
      <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
        <p class="text-blk input-title">
          WHAT DO YOU HAVE IN MIND ?
        </p>
        <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
      </div>
    </div>
    <button type="button" class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2" onclick="sendToWhatsApp()">
      Submit
    </button>
  </div>
</form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">
        <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
          Reach us at
        </p>
        <div class="social-media-links mob">
    <!-- Gmail Icon -->
    <a class="social-icon-link" href="mailto:assecyuda@gmail.com" id="gmail-link">
        <svg class="icon icon-gmail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M27,27c-0.276,0-0.5-0.224-0.5-0.5v-13c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v13 C27.5,26.776,27.276,27,27,27z" fill="#000000"/>
            <path d="M5,27c-0.276,0-0.5-0.224-0.5-0.5v-13C4.5,13.224,4.724,13,5,13s0.5,0.224,0.5,0.5v13 C5.5,26.776,5.276,27,5,27z" fill="#000000"/>
            <path d="M16,14.432c-0.099,0-0.197-0.029-0.282-0.087L3.553,6.021c-0.228-0.156-0.286-0.467-0.13-0.695 c0.156-0.228,0.466-0.287,0.695-0.13L16,13.326l8.958-6.129c0.229-0.156,0.54-0.097,0.695,0.13 c0.156,0.228,0.098,0.539-0.13,0.695l-9.24,6.322C16.197,14.403,16.099,14.432,16,14.432z" fill="#000000"/>
            <path d="M28.5,27h-25C2.122,27,1,25.878,1,24.5v-17C1,7.224,1.224,7,1.5,7S2,7.224,2,7.5v17 C2,25.327,2.673,26,3.5,26h25c0.827,0,1.5-0.673,1.5-1.5v-17C30,6.673,29.327,6,28.5,6C28.224,6,28,5.776,28,5.5S28.224,5,28.5,5 C29.878,5,31,6.122,31,7.5v17C31,25.878,29.878,27,28.5,27z" fill="#000000"/>
            <path d="M16,19c-0.099,0-0.198-0.029-0.284-0.088L2.066,9.498C1.398,9.038,1,8.278,1,7.467 C1,6.107,2.107,5,3.467,5h25.065C29.893,5,31,6.107,31,7.467c0,0.811-0.398,1.57-1.066,2.031l-13.65,9.414 C16.198,18.971,16.099,19,16,19z M3.467,6C2.658,6,2,6.658,2,7.467C2,7.95,2.237,8.401,2.634,8.675L16,17.893l13.366-9.218 C29.763,8.401,30,7.95,30,7.467C30,6.658,29.342,6,28.533,6H3.467z" fill="#000000"/>
        </svg>
    </a>

    <!-- WhatsApp Icon -->
    <a class="social-icon-link" href="https://wa.me/6285711206369" id="whatsapp-link">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" fill="#000000"/>
        </svg>
    </a>
</div>

        <!-- Maps Section Start -->
        <div class="map-container">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.890643366543!2d106.7790809!3d-6.3001268!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e2e9369a41%3A0xcd14bc0286747fbb!2sZZF%20Industri%20Indonesia.%20PT!5e0!3m2!1sid!2sid!4v1731385274141!5m2!1sid!2sid"
        frameborder="0" allowfullscreen>
    </iframe>
</div>

<!-- Maps Section End -->
  </div>
</div>
</body>
<script>
  function sendToWhatsApp() {
    var name = document.getElementById('ijowk-3').value;
    var email = document.getElementById('ipmgh-3').value;
    var message = document.getElementById('i5vyy-3').value;
    
    var whatsappURL = "https://wa.me/62895383271397?text=";
    var text = "Name: " + encodeURIComponent(name) + "%0A" +
               "Email: " + encodeURIComponent(email) + "%0A" +
               "Message: " + encodeURIComponent(message);
    
    window.open(whatsappURL + text, "_blank");
  }
</script>
</html>
