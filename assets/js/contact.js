
function test(){
    var message2 = 'LOL';
    var message = document.getElementById("subscriptionemail").value
    url = "message" + "Laughed"
    console.log(url)
    var number = "0545977791"
    url = "https://apps.mnotify.net/smsapi?key=" + "aniXLCfDJ2S0F1joBHuM0FcmH&to=" + number +"&msg=" + message +"&sender_id=TnsGhana"
    window.open(url)
}


function wholemessage(){
  var contactmessage = document.getElementById("contactmessage").value
  var contactemail = document.getElementById("contactemail").value
  var contactsubject = document.getElementById("contactsubject").value
  var contactname = document.getElementById("contactname").value

  var message = "New Message from " + contactname + " " + contactemail + " " + contactsubject + " " + contactmessage
  url = "message" + "Laughed"
  console.log(url)
  var number = "0545977791"
  url = "https://apps.mnotify.net/smsapi?key=" + "aniXLCfDJ2S0F1joBHuM0FcmH&to=" + number +"&msg=" + message +"&sender_id=TnsGhana"
  window.open(url)
}
