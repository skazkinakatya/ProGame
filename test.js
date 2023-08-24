let radios=document.querySelectorAll('input[type="radio"]');
let btn = document.querySelector('#button');
let values=[];
btn.addEventListener('click', function() {
	for (let radio of radios) {
		if (radio.checked) {
			let value=radio.value;
            values.push(value);
		}
	}
    
});
for (const val of values) {
    if(val[0]=="красный" && val[1]=="Никогда не разговариваю" &&  val[2]=="Собака" && val[3]=="Редко" && val[4]=="Сбалансированная тактика" && val[5]=="Безэмоциональность" && val[6]=="Ничего не ждёт" && val[7]=="Штурмовая винтовка" && val[8]=="Огонь"){
        console.log("Фьюз")
    }
    else{
        console.log('ghg')
    }
}