const toggleBtn = document.getElementById('menu');
const nav = document.getElementById('nav');
const navList = document.querySelectorAll('.nav_list > li > a');

// التحكم في الفئة active على الروابط عند النقر
navList.forEach(element => {
    element.addEventListener('click', (e) => {
        e.preventDefault(); // منع أي سلوك افتراضي إذا كنت تريد فقط التحكم في الإنتقال بسلاسة
        const targetId = e.target.getAttribute('href'); // الحصول على العنصر الهدف من href
        document.querySelector(targetId).scrollIntoView({ behavior: 'smooth' }); // الانتقال السلس
        nav.classList.remove('active'); // إغلاق القائمة بعد الضغط على الرابط
    });
});

// التبديل بين إظهار وإخفاء القائمة عند النقر على أيقونة البرجر
toggleBtn.addEventListener('click', () => {
    nav.classList.toggle('active');
});
