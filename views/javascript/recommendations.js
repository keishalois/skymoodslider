window.onload = function(){
    
showNoContent();
 
let happyVal = document.getElementById("happyslider");    
let tiredVal = document.getElementById("tiredslider");    
let calmVal = document.getElementById("calmslider"); 
let scaredVal = document.getElementById("scaredslider");

//the event listeners below look for changes in mood slider and bring up recommendations based on mood(s)
happyVal.addEventListener("change" , function() {
    happyValue = this.value;
    xhttp.open("GET", '?controller=programme&action=view&happyVal=' + happyValue + '&tiredVal=' + tiredVal.value + '&calmVal=' + calmVal.value + '&scaredVal=' + scaredVal.value, true);
    xhttp.send();
    console.log(happyValue);}                        
        );
tiredVal.addEventListener("change" , function() {
    tiredValue = this.value;
    xhttp.open("GET", '?controller=programme&action=view&tiredVal=' + tiredValue + '&happyVal=' + happyVal.value + '&calmVal=' + calmVal.value + '&scaredVal=' + scaredVal.value, true);
    xhttp.send();
    console.log(tiredValue);}                        
        );
calmVal.addEventListener("change" , function() {
    calmValue = this.value;
    xhttp.open("GET", '?controller=programme&action=view&calmVal=' + calmValue + '&tiredVal=' + tiredVal.value + '&happyVal=' + happyVal.value + '&scaredVal=' + scaredVal.value, true);
    xhttp.send();
    console.log(calmValue);}                        
        );
scaredVal.addEventListener("change" , function() {
    scaredValue = this.value;
    xhttp.open("GET", '?controller=programme&action=view&scaredVal=' + scaredValue + '&tiredVal=' + tiredVal.value + '&calmVal=' + calmVal.value + '&happyVal=' + happyVal.value, true);
    xhttp.send();
    console.log(scaredValue);
    });
};

//this function loads on page load before moods are selected and displays no content cards
function showNoContent() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("recommendations").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", '?controller=pages&action=homepage', true);
    xhttp.send();  
}
