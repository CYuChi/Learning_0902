<script>
    //EX01  show array
    var tryit = ["chen" , "yu" , "chi"];
    for(i=0 ; i <3 ;i++)
        document.writeln(tryit[i]);
    document.writeln("<br>");
    //EX02 count array number 
    var total = 0 ;
    var acount = [ 10 , 20 , 30 , 40 ,50 ];
    for(i=0 ; i< acount.length ; i++)   
        total = total + acount[i];
    document.writeln("陣列內總合 = " + total + "<br>");

    //EX03 input number and -1 stop then average
    var score = new Array();
    var count = 0;
    do{
        var times =  parseFloat(prompt("請輸入成績(-1 時結束) : "));
        //console.log(times);
        if(times != -1 && times >= 0 && times != "NaN")
            score[count] =  times;
        count++;    
    }while(times != -1 );
    
    document.writeln("依次輸入成績為 => ");
    score.forEach(time => document.writeln(time));
    document.writeln("<br>");

    var tt = 0;
    var avg = 0;
    for(i=0;i<score.length;i++)
        tt = tt + score[i] ; 
    //console.log(tt);
    avg = tt / score.length;
    document.writeln("平均值為 : " + avg + " 分 <br>");


</script>