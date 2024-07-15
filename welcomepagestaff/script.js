var home = document.getElementById("Home2");
var contact = document.getElementById("contactus2");
var profile = document.getElementById("profile2")
var chat = document.getElementById("message2")
var annoucement = document.getElementById("annoucement2")
var due = document.getElementById("due-date2")
var save = document.getElementById("saved2")

function open_home(){
    contact.style.display="none";
    home.style.display="block";    
    profile.style.display="none";    
    chat.style.display="none";    
    save.style.display="none";    
    annoucement.style.display="none";    
    due.style.display="none"; 

}
function open_contact(){
    contact.style.display="block";
    home.style.display="none";    
    profile.style.display="none";    
    chat.style.display="none";    
    save.style.display="none";    
    annoucement.style.display="none";    
    due.style.display="none";    
}
function open_profile(){
    contact.style.display="none";
    home.style.display="none";    
    profile.style.display="block";    
    chat.style.display="none";    
    save.style.display="none";    
    annoucement.style.display="none";    
    due.style.display="none";    
}
function open_message(){
    contact.style.display="none";
    home.style.display="none";    
    profile.style.display="none";    
    chat.style.display="block";    
    save.style.display="none";    
    annoucement.style.display="none";    
    due.style.display="none";    
}
function open_annoucement(){
    contact.style.display="none";
    home.style.display="none";    
    profile.style.display="none";    
    chat.style.display="none";    
    save.style.display="none";    
    annoucement.style.display="block";    
    due.style.display="none";    
}
function open_due(){
    contact.style.display="none";
    home.style.display="none";    
    profile.style.display="none";    
    chat.style.display="none";    
    save.style.display="none";    
    annoucement.style.display="none";    
    due.style.display="block";    
}
function open_saved(){
    contact.style.display="none";
    home.style.display="none";    
    profile.style.display="none";    
    chat.style.display="none";    
    save.style.display="block";    
    annoucement.style.display="none";    
    due.style.display="none";    
}