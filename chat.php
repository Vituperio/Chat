<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8' />
    <!-- Style -->
    <link rel="stylesheet" href="css/chat.css" type="text/css"/>
  </head>
  <body>
    <div class="chat_wrapper">
      <div class="message_box" id="message_box"></div>
      <div class="panel">
          <!-- <input type="text" name="name" id="name" placeholder="Your Name" maxlength="10" style="width:20%"  /> -->
          <input type="text" name="message" id="message" placeholder="Message" maxlength="80" style="width:60%" />
          <button id="send-btn">Send</button>
      </div>
    </div>
  
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="js/chat.js"></script>
  </body>
</html>