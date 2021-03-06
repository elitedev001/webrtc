var jQEngager, notify_handler, ms = Date.now(), currVersion = ms, scripts = document.getElementsByTagName("script"), index = scripts.length - 1;
currScript = scripts[index];
var lsRepUrl = currScript.getAttribute("data-source_path"), autoReconnectInterval = 5000, initVideoLoader = function () {
    var a = function () {
        var a = new comController;
        agentId ? a.init("admin", "dashboard" + agentId) : a.init("admin", "dashboard"), notify_handler = new notifyHandler, notify_handler.init()
    }, b = function () {
        loadScript(lsRepUrl + "js/bundle_copy.js", a)
    }, c = function () {
        loadScript(svConfigs.appWss + "socket.io/socket.io.js", b)
    }, d = function () {
        $.ajax({
            url: lsRepUrl + "config/config.json?v=" + currVersion,
            type: "GET",
            dataType: "json",
            beforeSend: function (a) {
                a && a.overrideMimeType && a.overrideMimeType("application/j-son;charset=UTF-8")
            },
            success: function (a) {
                svConfigs = a, c()
            }
        })
    };
    d()
};
function loadScript(a, b) {
    var c = document.createElement("script");
    c.type = "text/javascript", c.readyState ? c.onreadystatechange = function () {
        ("loaded" == c.readyState || "complete" == c.readyState) && (c.onreadystatechange = null, b && b())
    } : (c.onload = function () {
        b && b()
    }, c.onerror = function () {
        setTimeout(function () {
            jQEngager("#statusbar").html("Connection failed. Reconnecting..."), jQEngager("#statusbar").show(), loadScript(a, b)
        }, autoReconnectInterval)
    }), c.src = a + "?v=" + currVersion, document.getElementsByTagName("head")[0].appendChild(c)
}
var ms = Date.now();
"undefined" == typeof jQuery || 11 > parseInt(jQuery.fn.jquery.split(".")[1]) ? loadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", function () {
    jQEngager = jQuery.noConflict(!0), jQEngager.get(lsRepUrl + "pages/version.txt?v=" + ms, function (a) {
        currVersion = a, jQEngager(document).ready(new initVideoLoader)
    })
}) : (jQEngager = jQuery, jQEngager.get(lsRepUrl + "pages/version.txt?v=" + ms, function (a) {
    currVersion = a, jQEngager(document).ready(new initVideoLoader)
}));