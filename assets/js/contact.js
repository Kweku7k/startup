
function test(){
    var message2 = 'LOL';
    var message = document.getElementById("subscriptionemail").value
    url = "message" + "Laughed"
    console.log(url)
    var number = "0242708862,0545977791"
    url = "https://apps.mnotify.net/smsapi?key=" + "XJZrndKjI8ETrsUjwXuvB6qBH&to=" + number +"&msg=" + message +"&sender_id=DefoProps"
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
  url = "https://apps.mnotify.net/smsapi?key=" + "XJZrndKjI8ETrsUjwXuvB6qBH&to=" + number +"&msg=" + message +"&sender_id=TestSystem"
  window.open(url)
}
