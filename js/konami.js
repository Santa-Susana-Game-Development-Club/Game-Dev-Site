var Konami=function(n){var t={addEvent:function(n,t,i,r){n.addEventListener?n.addEventListener(t,i,!1):n.attachEvent&&(n["e"+t+i]=i,n[t+i]=function(){n["e"+t+i](window.event,r)},n.attachEvent("on"+t,n[t+i]))},input:"",pattern:"38384040373937396665",load:function(n){this.addEvent(document,"keydown",function(i,r){return r&&(t=r),t.input+=i?i.keyCode:event.keyCode,t.input.length>t.pattern.length&&(t.input=t.input.substr(t.input.length-t.pattern.length)),t.input==t.pattern?(t.code(n),t.input="",i.preventDefault(),!1):void 0},this);this.iphone.load(n)},code:function(n){window.location=n},iphone:{start_x:0,start_y:0,stop_x:0,stop_y:0,tap:!1,capture:!1,orig_keys:"",keys:["UP","UP","DOWN","DOWN","LEFT","RIGHT","LEFT","RIGHT","TAP","TAP"],code:function(n){t.code(n)},load:function(n){this.orig_keys=this.keys;t.addEvent(document,"touchmove",function(n){if(n.touches.length==1&&t.iphone.capture==!0){var i=n.touches[0];t.iphone.stop_x=i.pageX;t.iphone.stop_y=i.pageY;t.iphone.tap=!1;t.iphone.capture=!1;t.iphone.check_direction()}});t.addEvent(document,"touchend",function(){t.iphone.tap==!0&&t.iphone.check_direction(n)},!1);t.addEvent(document,"touchstart",function(n){t.iphone.start_x=n.changedTouches[0].pageX;t.iphone.start_y=n.changedTouches[0].pageY;t.iphone.tap=!0;t.iphone.capture=!0})},check_direction:function(n){x_magnitude=Math.abs(this.start_x-this.stop_x);y_magnitude=Math.abs(this.start_y-this.stop_y);x=this.start_x-this.stop_x<0?"RIGHT":"LEFT";y=this.start_y-this.stop_y<0?"DOWN":"UP";result=x_magnitude>y_magnitude?x:y;result=this.tap==!0?"TAP":result;result==this.keys[0]&&(this.keys=this.keys.slice(1,this.keys.length));this.keys.length==0&&(this.keys=this.orig_keys,this.code(n))}}};return typeof n=="string"&&t.load(n),typeof n=="function"&&(t.code=n,t.load()),t};

var easter_egg = new Konami();

easter_egg.code = function () {
    document.body.style.transition = "background-color .25s";
    setInterval('color();', 250);
}

easter_egg.load();

function color() {
  var h = Math.floor(Math.random() * 360);
  var s = 100;
  var l = 75;
  document.body.style.backgroundColor = "hsl(" + h + "," + s + "%," + l + "%)";
}
