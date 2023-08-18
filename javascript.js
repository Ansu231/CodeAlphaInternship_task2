function openPopup(popupId) {
    var popup = document.getElementById(popupId);
    popup.classList.add('active');
}

function closePopup(popupId) {
    var popup = document.getElementById(popupId);
    popup.classList.remove('active');
}
