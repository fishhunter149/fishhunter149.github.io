<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Поздравляем! Ваш заказ принят!</title>
      <style>*{margin:0;padding:0}
      html{height:100%;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
      body{font-family:'Roboto',sans-serif;line-height:1.2;height:100%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
      a,a:visited{color:inherit}
      .b-main{box-sizing:border-box;display:block;float:right;width:50%;height:100%;overflow-y:auto;text-align:center}
      .b-main:after{content:"";display:inline-block;vertical-align:middle;height:100%}
      .b-main .wrap{display:inline-block;vertical-align:middle;text-align:left;font-size:16px;width:850px;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
      [dir=rtl] .b-main .wrap {text-align: right;}
      .b-main .header{font-size:36px;font-weight:700;color:#333;margin-bottom:.8em}
      .b-main .header .block{display:block}
      .b-main p{margin-bottom:1em}
      .b-main .frame{margin:auto;border-radius:8px;box-shadow:0 0 48px 0 rgba(0,0,0,0.1);padding:65px 65px 40px}
      .b-main .plea{font-size:18px;color:#5b609a;font-weight:700}
      .b-main .info{padding:10px 0;border-top:1px solid #dedede;border-bottom:1px solid #dedede}
      .b-main table{font-size:16px;margin-bottom:1em;text-align:left}
      .b-main td{padding:6px 0;font-weight:700;color:#333}
      .b-main td:first-child{width:95px;color:#999;font-weight:400}
      .b-main .check{font-size:24px;color:#333;font-weight:300}
      .b-main .wrong{font-size:12px;color:#5b609a}
      .b-main .more{margin-top:3em;font-size:14px;color:#555}
      .b-main .copyright{font-size:12px;color:#999;margin-top:40px}
      .b-form{display:block;width:50%;background: linear-gradient(180deg, rgba(179,129,156,1) 0%, rgba(165,125,198,1) 56%, rgba(89,96,151,1) 100%) center center no-repeat;height:100%;text-align:center;float:right}
      .b-form:after{display:inline-block;height:100%;content:"";vertical-align:middle}
      .b-form .frame{vertical-align:middle;display:inline-block;max-width:420px;border-radius:8px;background-color:rgba(0,0,0,0.6);padding:16px;max-height:400px;transition:max-height .5s linear}
      .b-form .frame.expanded{max-height:500px}
      .b-form .header{font-size:36px;font-weight:700;text-align:center;color:#fff;margin-bottom:.2em}
      .b-form .text{color:#e7c4e2;line-height:1.333;margin-bottom:1.2em;padding:0 35px;font-size:18px}
      .b-form .input{width:100%;height:62px;font-size:18px;border:1px solid #eead14;border-radius:8px;outline:0;margin-bottom:16px;text-align:center}
      .b-form .input:focus{box-shadow:0 0 5px 5px rgba(238,173,20,0.2)}
      .b-form .button{background:#f6bf2b;background:linear-gradient(0deg,#eba60b,#ffd547);border:none;width:100%;color:#fff;font-weight:900;font-size:18px;border-radius:8px;line-height:64px;outline:none;cursor:pointer;}
      .b-form .button:hover{background:linear-gradient(#eba60b,#ffd547)}
      .b-form .button.disabled{pointer-events:none}
      .b-form .mailerror{color:#ff828a;margin-bottom:16px}
      .b-form .mailsuccess{color:#fff;font-size:26px;font-weight:700}
      .b-copyright{display:none}
      .b-copyright p{margin-bottom:1em}
      #bineks_form{display:none}
      .hidden{display:none}
      .title {
         display: none;
         font-size: 36px;
         font-weight: 700;
         color: #333;
         margin: .8em 0;
         text-align: center;
      }

      .title small {
         display: block;
         font-size: 36px;
      }
      object{position:absolute;bottom:0;left:0;overflow:hidden}
      @media(max-width:1799px) {
         .b-main .wrap{width:640px}
      }
      @media (max-width: 1439px) {
         .b-main .wrap{width:460px}
         .b-main .check{font-size:18px}
      }
      @media(max-width:991px) {
         .title {display: block;}
         .header {display: none;}
         .b-main .frame{padding:0;box-shadow:none;border-radius:0}
         .b-main{width:100%;height:auto;overflow:visible;float:none}
         .b-main .wrap{width:510px;padding:65px 0 40px;display:block;margin:0 auto}
         .b-main:after{display:none}
         .b-main .copyright{display:none}
         .b-form{width:100%;height:auto;padding:50px 0;float:none}
         .b-form:after{display:none}
         .b-copyright{display:block;position:relative;z-index:1;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;padding:30px 0;font-size:12px;color:#999;width:510px;text-align:left;margin:auto}
      }
      @media(max-width:600px) {
         .title, .title small {font-size: 30px;}
         .b-main .wrap{max-width: 320px;padding:20px 10px 40px;text-align:center;}
         .b-form{padding:0}
         .b-form .frame{margin-top:0;border-radius:0;padding: 16px 8px;}
         .b-copyright{text-align:center;padding:30px 10px;width:300px}
         .b-form .button {max-width: 280px;}
      }
      </style>
   </head>
   <body>
      <h1 class="title">Поздравляем!<small>Ваш заказ принят!</small></h1>
      <div class="b-form">
      </div>
      <div class="b-main">
         <div class="wrap">
            <div class="frame">
               <h1 class="header">Поздравляем!</h1>
               <h2 class="header">Ваш заказ принят!</h2>
               <p class="operator">В&nbsp;ближайшее время с&nbsp;вами свяжется оператор для подтверждения заказа.</p>
               <p class="plea">Просьба, держите включенным Ваш контактный телефон!</p>
            </div>
            <div class="copyright">
               <p>Осуществив заказ на&nbsp;нашем сайте какого-либо товара, Вы&nbsp;соглашаетесь получить смс-уведомление о&nbsp;доставке купленного Вами товара в&nbsp;соответствующее почтовое отделение, согласно указанному Вами индексу.</p>
            </div>
         </div>
      </div>
      <div class="b-copyright">
         <p>Осуществив заказ на&nbsp;нашем сайте какого-либо товара, Вы&nbsp;соглашаетесь получить смс-уведомление о&nbsp;доставке купленного Вами товара в&nbsp;соответствующее почтовое отделение, согласно указанному Вами индексу.</p>
      </div>

<?php if (!empty($_GET['fbpx'])): ?>
  <!-- Facebook Pixel Code -->
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '<?php echo htmlspecialchars($_GET['fbpx']); ?>');
      fbq('track', 'Lead');
  </script>

  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo htmlspecialchars($_GET['fbpx']); ?>&ev=Lead&noscript=1"/></noscript>
  <!-- End Facebook Pixel Code -->
<?php endif; ?>

   </body>
</html>
