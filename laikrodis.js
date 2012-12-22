$(function(){
    window.setInterval(function(){
        var d = new Date();
        $('p').html(x(d.getHours()) + ':' + x(d.getMinutes()) + ':' + x(d.getSeconds()));
    }, 100);

    function x(t){
        t < 10 ? t = '0' + t.toString() : t;
        return t;
    }
});