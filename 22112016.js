/*var a = 1,
    summa, i = 1;
var n = prompt('Введите число'),
    summa2 = '';
n = parseInt(n);

while (i <= n) {
    summa = i.toString(10);
    summa2 = summa2 + summa + ',_';
//    console.log(summa2);
    i++;
}

var form_str = summa2.length;
del_text = summa2.substring(0, (form_str - 2));

document.write('[' + del_text + ']');
*///console.log('s' + summa)


/*
n=prompt('Размер обоймы?')
n=parseInt(n);
arr=[];
x='';

while (x==''){
x=prompt('Нажми ок!')

if(arr.lenght==0){
//перезарядка
	for (i-0; i<n; i++){
	arr.push('патрон');
}
console.log('Перезаряжено. В обойме'+arr.length+'патронов');
continue;
}
//выстрел
	if (arr.length!=0){
	arr.pop();
console.log('Выстрел'+arr.length+'патронов');
continue;
}
}

*/




var x=prompt('Введите кол-во городов');
x=+x; //аналог parseInt
arr=[];
for (i=0; i<x;i++){
arr.push(prompt('Название города'));
}





arr=[];
t=1;
while (t!=''){
t=prompt('Введите название города')
if (t=='') break;
arr.push(t);
}