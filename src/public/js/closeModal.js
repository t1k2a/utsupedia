document.querySelector(".modal-close").addEventListener('click', function () {
    modal.style.display = 'none';
});

document.querySelector("#modal").addEventListener('click', function () {
    modal.style.display = 'none';
});

// I'm going to create js file
var pedia = /** @class */ (function () {
    function pedia() {
    }
    pedia.prototype.clickContact = function () {
        var _a;
        (_a = document.getElementById("contact2")) === null || _a === void 0 ? void 0 : _a.addEventListener('click', function () { return modal ? modal.style.display = 'block' : null; });
    };
    return pedia;
}());
var click_contact = new pedia();
var modal = document.getElementById('modal');
click_contact.clickContact();
