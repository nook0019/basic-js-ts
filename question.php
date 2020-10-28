<html>
<head>
    <title>Front-end Questions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="questions-1">
        <h3>1.)Explain the what's similar & difference between cookie / localStorage / sessionStorage.</h3>
            <p>Similar
                <p>- cookie กับ localStorage ข้อมูลจะหายไปก็ต่อเมื่อเรา clear data ทิ้ง</p>
                <p>- sessionStorage กับ localStorage หรือ กำหนดระยะเวลาล้าง ถึงจะหายไป</p>
            </p>
            <p>Different
                <p> - cookie จัดเก็บได้สูงสุดที่ 4KB / แต่ LocalStorage/SessionStorage เก็บได้สูงสุด 5MB</p>
                <p> - ส่วน sessionStorage เมื่อปิดเว็บข้อมูลก็จะหายไป</p>

            </p>
    </div>  
    <div class="questions-2">
        <h3>2.)Today React have hooks. Do we still need a class component? If your answer is yes then which case that we still need to use class component.</h3>
        <p>ไม่ต้อง ใช้แทนกันได้</p>
    </div>  
    <div class="questions-3">
        <h3>3.)Breifly describe how Virtual DOM works.</h3>
        <p>- การสร้าง Tree-Object โดยการเก็บไว้ในMemoryแทน ทำให้ไม่ต้องไปเรียก RealDom จริงๆ มา ซึ่งการทำแบบนี้ทำให้เว็บของเราเร็วขึ้นด้วย</p>
            
    </div>
    <div class="questions-4">
        <h3>4.)Consider this React's components tree</h3>
        <h4>Apps > ComponentA > ComponentB > ComponentC > ComponentD > ComponentE</h3>
        <h3>If we have a state at Apps component, and ComponentE component want to access that state value. How do you implements this?</h3>
        <p>- ในกรณีที่แยกกัน ก็ต้อง export component ให้เป็น Public ก่อน ถึงจะสามารถนำเอาไปใช้ใน Component อื่นได้้ </p>
           
    <div class="questions-5">
        <h3>5.)What different between using relative / absolute / fixed to position the element.</h3>
        <p>- Relative จะทำงานคล้าย Block คือเป็นการวางกรอบไว้ให้ตัวข้างใน แต่ว่า Absolute กับ Fixed จะคล้ายๆ กันตรงที่ว่า ถ้าไม่มีตัวพ่อมาครอบไว้ มันก็จะสามารถวางที่ไหนก็็ได้ของหน้้าเว็บ แต่ Fixed จะถูกตรงไว้กับหน้้า client เลย scroll เม้าท์ขึ้นลงมันก็้จะตามไปด้วย</p>
    </div>  
    <div class="questions-6">
        <h3>6.)Explain the different between using callback / Promise / async await. When to use and when not to.</h3>
        <p>- call back คือฟังก์ชันที่จะทำหลังทำงานเสร็จแล้วน้ั้นเอง ส่วน Promise เป็นการป้้องกันไม่ให้เกิด callback hell สามารถเขียนฟังก์ชัน Then ต่อได้เลย  ส่วน async await เหมือนเป็นการรอให้ Promise ทำงานเสร็จก่อน ถึงจะทำงานต่อ</p>
    </div>  
</body>
</html>