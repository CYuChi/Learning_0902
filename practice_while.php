<script>
    var total = 0 , i = 0 ;
    while(i<=1000){
        if(i%7!=0)
            total = total +i;
        i++;
    }
    document.writeln("1000以內非7的倍數之和 = " + total + "<br>");

    var total2 = 0;
    while(i>0){
        if(i%3==0 || i%11 == 0){
            total2 = total2 +i;
        }
        i--;
    }
    document.writeln("1000以內3or11的倍數之和 = " + total2 + "<br>");
</script>