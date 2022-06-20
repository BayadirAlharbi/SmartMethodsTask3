<!--Robot -->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--embedded css-->
<style>
  body{
    background-image: url("robot.jpg");

  }
  button{
  border-radius:10px;
  width:20%;
  height:50px; 
  font-size:28px; 
  margin-right:40px;
  background-color: black;
  color: white;
}
</style>
<!--html-->
</head>
<body>
  <header style="    border: none;padding: 14px 28px; font-size: 20px; color:black;" >Robot </header>

<!--buttons---->
<p>
  <form action="arminterface.php" >
<button  id="mo">Robot motors</button>
</form>
</p>
<p>
<form action="robotbase.php">
<button type="submit" formaction="robotbase.php" id="ba">Robot Base</button>
</form>
</p>



<!--chatbot-->
<script>
  window.watsonAssistantChatOptions = {
      integrationID: "a8a29edb-3d35-4f3d-951b-36c30921f5b0", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "cb77c5da-e2ae-4cd8-8ae8-470c1644a69e", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
</body>
</html>