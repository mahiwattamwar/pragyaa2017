

var category = document.getElementById("events_category");
var position = document.getElementById("position");
var eventName = document.getElementById("event_name");
var rules = document.getElementById("rules");
var desc = document.getElementById("desc");
var gamePlay = document.getElementById("play");
var specs = document.getElementById("specs");
var cordiOne = document.getElementById("coordi_one");
var mobiOne = document.getElementById("mobile_one");
var cordiTwo = document.getElementById("coordi_two");
var mobiTwo = document.getElementById("mobile_two");
var imgLink = document.getElementById("link");



function submitToDatabase(){
	
	var mcategory = category.value;
	var mposition = position.value;
	var meventName = eventName.value;
	var mrules = rules.value;
	var mdesc = desc.value;
	var mgamePlay = gamePlay.value;
	var mspecs = specs.value;
	var mcordiOne = cordiOne.value;
	var mmobiOne = mobiOne.value;
	var mcordiTwo = cordiTwo.value;
	var mmobiTwo = mobiTwo.value;
	var mimgLink = imgLink.value;

	var firebaseMain = firebase.database().ref().child("event_details");


	firebaseMain.child(mcategory).child(mposition).child("event_name").set(meventName);
	firebaseMain.child(mcategory).child(mposition).child("rules").set(mrules);
	firebaseMain.child(mcategory).child(mposition).child("desc").set(mdesc);
	firebaseMain.child(mcategory).child(mposition).child("play").set(mgamePlay);
	firebaseMain.child(mcategory).child(mposition).child("specs").set(mspecs);
	firebaseMain.child(mcategory).child(mposition).child("coordi_one").set(mcordiOne);
	firebaseMain.child(mcategory).child(mposition).child("coordi_two").set(mcordiTwo);
	firebaseMain.child(mcategory).child(mposition).child("mobile_one").set(mmobiOne);
	firebaseMain.child(mcategory).child(mposition).child("mobile_two").set(mmobiTwo);
	firebaseMain.child(mcategory).child(mposition).child("link").set(mimgLink);

category.value = "";
position.value = "";
eventName.value = "";
rules.value = "";
desc.value = "";
gamePlay.value = "";
specs.value = "";
cordiOne.value = "";
mobiOne.value = "";
cordiTwo.value = "";
mobiTwo.value = "";
imgLink.value = "";



}
