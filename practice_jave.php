<head>
</head>
<body>
    <script>
        function check(){
            //取得表單數值，但質為object HTMLInputElement 
            scorebox = document.scoreT.score;
            //使用 .value 將要的數值取出
            score = scorebox.value;
            //document.writeln(score);
            if(score > 80)
                document.writeln("excellent");
            else if(score > 60)
                document.writeln("good");
            else   
                document.writeln("need working");
        }

    </script>

    <form name="scoreT">
        <input type="text"   name="score" value="" >
        <input type="submit" value="提交成績" onClick="check()">
    </form>
</body>