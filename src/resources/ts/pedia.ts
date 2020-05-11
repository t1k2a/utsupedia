class pedia {

    clickContact() {
        document.getElementById("contact")?.addEventListener('click', () => alert("クリックされたぜ"));
    }

}

var click_contact = new pedia();
click_contact.clickContact();
