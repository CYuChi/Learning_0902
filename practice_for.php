<script>
    var total_1=0;
    var total_2=0;
    for(i=1;i<10000;i++){
        if(i<10000){
            total_1 = total_1 + i;
            
        }
        else
            break;
    }
    document.write("10000 以內數總和 = " +total_1 + "<br>");
    for(i=1;i<1000;i++){
        if(i%7==0){
            total_2 = total_2 + i;
        }
    }
    document.writeln("1000 以內 7 倍數總和 = " + total_2 + "<br>");
</script>