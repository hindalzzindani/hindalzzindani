

var symbols = ['💻', '</>', '{}', '✦', '🖥️', '😍', '{✦}', '<>']; // مجموعة من الإيموجي
var colors = [
    'rgb(0,190,255)', // relaxing blue
    'rgb(255,255,255)', // white
    'rgb(0,160,255)', // another relaxing blue
    'orange', // favorite fruit ;P
    'rgb(240,245,250)', // bluish grey
    'rgb(230,60,0)' // sauce red
];
var cont = document.querySelector("#home");

function random(min, max, round) {
    var p = min + Math.random() * (max - min);
    return (round ? Math.round(p) : p);
}

function comet(event) {
    // التأكد من أن الحدث يتلقى كائن الحدث بشكل صحيح
    var x = event.pageX; // x-coordinates,
    var y = event.pageY; // y-coordinates of the cursor

    // عدد الفقاعات التي سيتم إنشاؤها
    var rnd = random(5, 9, true);

    for (var i = 0; i < rnd; i++) {
        var pp = document.createElement("span"); // استخدام span بدل div
        pp.className = 'particle';

        // اختيار رمز إيموجي عشوائي
        var symbolIndex = random(0, symbols.length - 1, true); // تصحيح الوصول إلى الإيموجي
        pp.textContent = symbols[symbolIndex]; // وضع الإيموجي كنص

        // الحجم
        var d = random(40, 40); // حجم الخط للإيموجي
        pp.style.fontSize = d + "px";

        // تحديد إحداثيات الفقاعة
        pp.style.left = (x + random(-15, 15) - (d / 4)) + "px";
        pp.style.top = (y + random(-15, 15) - (d / 2)) + "px";

        // الألوان العشوائية
        var colorIndex = random(0, colors.length - 1, true);
        pp.style.color = colors[colorIndex]; // لون الإيموجي

        // تحريك الإيموجي بنفس التأثيرات
        var shiftX = random(-200, 200);
        var shiftY = random(-200, 200);

        var delay = (random(30, 40) / 1000) + 's'; // تأخير قبل بدء الحركة

        pp.style.setProperty('--i', delay); // التأخير
        pp.style.setProperty('--shiftX', shiftX + 'px'); // تغيير x
        pp.style.setProperty('--shiftY', shiftY + 'px'); // تغيير y

        // منع الفقاعات من تلقي أحداث النقر
        pp.style.pointerEvents = 'none';

        pp.addEventListener('animationend', function () {
            this.remove(); // إزالة الفقاعة بعد انتهاء الأنيميشن
        });

        pp.addEventListener('webkitAnimationEnd', function () {
            this.remove(); // نفس الشيء على Chrome
        });

        cont.appendChild(pp);
    }
}
document.addEventListener('mousemove', function(event) {
    comet(event); // تمرير كائن الحدث بشكل صريح إلى الدالة
});
