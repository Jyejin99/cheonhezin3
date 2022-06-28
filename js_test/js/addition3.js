function test(){
    number = 20;
    number = number+10;
}
var number = 10;   
test();

document.write("최종 숫자는 "+number+"입니다.");

//로컬변수(=지역변수): 반드시 앞에 키워드를 붙여야함(var 등) 함수가 끝나게 되면 메모리에서 없어짐
//전역변수: 키워드 붙여도 되고 안 붙여도 됨