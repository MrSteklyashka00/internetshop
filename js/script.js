console.log('2'+2 - '2');
let a=5;
console.log(10-a);
let s=prompt('Как вас зовут?');
console.log('Привет,'+s);
const b=10;
a=20;
// b=200 менять контанту нельзя
a++; //увеличиваем значение переменой а на 1  21   
a--; //уменьшает значение переменой а на 1   20
a=a+5;//увеличеваем переменную на 5   25
a+=5; //то же самое  30
a*=3;//тоже самое что и а= а*3 - увеличение переменной в 3 раза  90
a/=2;//45
let c= a%2;//остаток от деления а(45) на 2
console.log('a = '+ a);
console.log(c);
let m = [10,20,30,45,78,100];//создали масив из 6чисел
console.log(m);//выводим весь масив
console.log(m[1]);//выводим второй элемент массива (нумерация с нуля)
m[2]=35//поменяли значение 3го элемента массива
console.log(m);
m[2]++;
console.log(m);

let x= -5;
if (x >= 0){
    console.log(Math.sqrt(x));
}
else {
    console.log("Нельзя взять корень от отрицательного числа");
}

for(let i=1; i <=10; i++){
    console.log(i);
}

for(let i=0; i<m.length; i++){
    console.log("m["+ i + "]="+ m[i] );//0: 10- сейчас. Сделать m[0]=10
}

let i=10;//ДЗ сделать что бы цикал работал на оборот от 10 до 0
while (i>=0){
    console.log(i*i);
    i--;
}

i=0;
while(2*2==4){ //бесклнечный цикл (условие всегда истинно)
    console.log(i*i);
    i+=2;
    if(i > 5){ //если 1равно 5...
        break;// выходим из цикла принудительно
    }
}

 c=0.1;
 let d = 0.2;
 let e=c+d;
 console.log(e);
 if(e==0.3){
    console.log('ОК');
 }
    else{
        print("не равно");
    }

    function print2(){
        console.log("Кнопка нажата");
    }
 
        function print(text){
        console.log(text);
    }

function sum(a,b){
    return a+b;
}

let sm=sum(5,2)+ sum(10,3) - sum(1,1);
print(sm);

//n! =1*2*3....*n
//s! = 1*2*3*4*5

function fact(n){//функция которая вычисляет факториал числа
    let res=1;
    for(let x=1; x<=n; x++){
        res *=x //res = res * x
    }
    return res;
}

print(fact(100));

//DOM-дерево

//находим элемаент с id product_name и сохраняем его в перемунную element
let element = document.getElementById('product_name');
element.innerHTML=" другой телевизор";

let count=0;
function createNewcard(){
    let main = document.getElementById('main');
        let card = document.getElementById('card');
        let newCard= card.cloneNode(true);//клонируем объект (карточку товара)
        newCard.id='card_'+count++;//card_15
        main.append(newCard);
}



let product={ 
    'name':"Монитор &laquo;ZALMAN&raquo;",
    'desc': "Lorem, ipsum dolor sit amet consectetur adipisicing elit. In, repudiandae debitis!",
    'price':'3000',
    'path':"samsung_F8500.webp",
    'id':0,

}
print(product);



function createCard(name,desc,price,img,id){
        let main = document.getElementById('main');
        let card = document.getElementById('card');
        let newCard= card.cloneNode(true);
        newCard.style.display='block';
        newCard.childNodes[1].style.background="url(./img/"+ img+") center /cover  no-repeat";
        newCard.childNodes[3].innerHTML=name;
        newCard.childNodes[5].innerHTML=desc;
        newCard.childNodes[7].innerHTML='<b>Цена: <b>' + price +' р.';

       main.append(newCard);
}

createCard(product.name, product.desc, product.price, product.path, product.id);
createCard('монитор &laquo;rock&raquo;','Какое то описание', 5000 ,'samsung_F8500.webp',0);

for(let i=1; i<=10; i++)
    createCard('монитор &laquo;msi&raquo;№'+ i,'Какое то описание', 15000 ,'samsung_F8500.webp',0);