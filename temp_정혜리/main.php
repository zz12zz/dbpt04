<!DOCTYPE html>
<html>

<head>
    <meta charser-"uft-8">
    <title> 따릉이 정보 </title>
</head>

<body>
    <center><h1> 따릉이 </h1></center>
    <br><br><br>
    <h3>따릉이 월별 복잡도</h3>
    <form action="complex_month.php" method="POST">
      <select name="month">
        <option value="base">현재 월</option>
        <option value="Jan">1월</option>
        <option value="Feb">2월</option>
        <option value="Mar">3월</option>
        <option value="Apr">4월</option>
        <option value="May">5월</option>
        <option value="Jun">6월</option>
        <option value="Jul">7월</option>
        <option value="Aug">8월</option>
        <option value="Sep">9월</option>
        <option value="Oct">10월</option>
        <option value="Nov">11월</option>
        <option value="Dec">12월</option>
      </select>
      <select name="gu">
        <option value="노원구">노원구</option>
        <option value="강남구">강남구</option>
        <option value="강동구">강동구</option>
        <option value="강북구">강북구</option>
        <option value="강서구">강서구</option>
        <option value="관악구">관악구</option>
        <option value="광진구">광진구</option>
        <option value="금천구">금천구</option>
        <option value="도봉구">도봉구</option>
        <option value="동대문구">동대문구</option>
        <option value="동작구">동작구</option>
        <option value="마포구">마포구</option>
        <option value="서대문구">서대문구</option>
        <option value="서초구">서초구</option>
        <option value="성동구">성동구</option>
        <option value="성북구">성북구</option>
        <option value="송파구">송파구</option>
        <option value="양천구">양천구</option>
        <option value="영등포구">영등포구</option>
        <option value="용산구">용산구</option>
        <option value="은평구">은평구</option>
        <option value="종로구">종로구</option>
        <option value="중구">중구</option>
        <option value="중랑구">중랑구</option>
      </select>
      <input type="submit" value="조회">
    </form>
    <form action="age_use.php" method="POST">
          <h3>연령별 많이 이용하는 대여소 </h3>
        <select name ="age">
          <option value = 'AGE_001'>10대</option>
          <option value = 'AGE_002'>20대</option>
          <option value = 'AGE_003'>30대</option>
          <option value = 'AGE_004'>40대</option>
          <option value = 'AGE_005'>50대</option>
          <option value = 'AGE_006'>60대</option>
          <option value = 'AGE_007'>70대</option>
        </select>
        <input type="submit" value="조회">
    </form>
    
</body>

</html>
