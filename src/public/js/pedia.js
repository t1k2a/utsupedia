var pedia = /** @class */ (function () {
    function pedia() {
    }
    pedia.prototype.clickContact = function () {
        var _a;
        (_a = document.getElementById("contact")) === null || _a === void 0 ? void 0 : _a.addEventListener('click', function () { return alert("クリックされたぜ"); });
    };
    return pedia;
}());
var click_contact = new pedia();
click_contact.clickContact();
