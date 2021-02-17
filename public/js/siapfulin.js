$(".numonly").on("keypress keyup blur",function (event) {
    $(this).val($(this).val().replace(/[^\d,]/g, ""));
        if ((event.which < 48 || event.which > 57 )) {
        event.preventDefault();
    }
});

$("div.toolbar").hide();

var myRefreshTimeout;

function startAutorefresh(refreshPeriod) {
    myRefreshTimeout = setTimeout("window.location.reload();", refreshPeriod);
}

function stopAutorefresh() {
    clearTimeout(myRefreshTimeout);
    window.location.hash = 'stop'
}
function showM(url) {
    jQuery('.modal-content').empty();
    jQuery('.modal-content').load(url);
    jQuery('#myModal').modal({
        backdrop: 'static', show: true
    });
    stopAutorefresh();
}
