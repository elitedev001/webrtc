var jQEngager, ms = Date.now(), currVersion = ms, notify_handler, scripts = document.getElementsByTagName('script'), index = scripts.length - 1;
currScript = scripts[index];
var lsRepUrl = currScript.getAttribute('data-source_path'), initVideoLoader = function () {
    var a = function () {
        var d = new comController;
        d.init(), notify_handler = new notifyHandler, notify_handler.init()
    }, b = function () {
        loadScript('js/bundle_copy.js', a)
    };
    (function () {
        $.ajax({
            url: lsRepUrl + 'config/config.ini?v=' + currVersion,
            type: 'GET',
            dataType: 'json',
            beforeSend: function (d) {
                d && d.overrideMimeType && d.overrideMimeType('application/j-son;charset=UTF-8')
            },
            success: function (d) {
                svConfigs = d, b()
            }
        })
    })()
};
function loadScript(a, b) {
    var c = document.createElement('script');
    c.type = 'text/javascript', c.readyState ? c.onreadystatechange = function () {
        ('loaded' == c.readyState || 'complete' == c.readyState) && (c.onreadystatechange = null, b && b())
    } : c.onload = function () {
        b && b()
    }, c.src = lsRepUrl + a + '?v=' + currVersion, document.getElementsByTagName('head')[0].appendChild(c)
}
var ms = Date.now();
'undefined' == typeof jQuery || 11 > parseInt(jQuery.fn.jquery.split('.')[1]) ? loadScript('https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js', function () {
    jQEngager = jQuery.noConflict(!0), jQEngager.get(lsRepUrl + 'pages/version.txt?v=' + ms, function (a) {
        currVersion = a, jQEngager(document).ready(new initVideoLoader)
    })
}) : (jQEngager = jQuery, jQEngager.get(lsRepUrl + 'pages/version.txt?v=' + ms, function (a) {
    currVersion = a, jQEngager(document).ready(new initVideoLoader)
}));