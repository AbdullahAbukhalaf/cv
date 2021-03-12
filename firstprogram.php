<!DOCTYPE html>
<html>
<style>

    img
    {
      display: block;
      margin-right: auto;
      margin-left: auto;
      border-radius: 50%;
    }

    .header1
    {
      text-align: center;
    }
    .header2
    {
      text-align: center;
    }

    hr
    {
      border-style: wave;
      border-width: 5px;
    }
    p
    {text-align: left;font-size: 20px;}
    ol{font-size: 20px;}
    tr:hover{background: gray}
    input[type=text], select {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    box-sizing: border-box;
    }

    input[type=submit] {
	    width: 100%;
	    background-color: #4CAF50;
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
    }
    input[type=submit]:hover {
	    background: blue;
    }
    div {
	    border-radius: 5px;
	    background-color: #f2f2f2;
	    padding: 20px;
    }

</style>
<img src="https://scontent.famm2-3.fna.fbcdn.net/v/t1.0-0/c0.41.600.600a/p600x600/69712432_2471195119767021_5895362588270657536_o.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_eui2=AeGMtZIqTzs9l-eQDbvDSnafnlUahZPXsEueVRqFk9ewS2bqVIcHj0dwTzbnh9VcPcy0uSlBs4vYOQADvz_qm4t_&_nc_ohc=tkDjq5-5U40AX9K2FD9&_nc_ht=scontent.famm2-3.fna&tp=27&oh=f73dbc14c6176cd7a627fca36ab62d77&oe=606E7E86" alt="My photo." width="300"height="300">
<h1 class="header1">Abdullah AbuKhalaf</h1>
<h2 class="header2">I am an android and web developer.I&#128150;Coding</h2>
<hr >
<body>

<p>Courses:</p>
<ol>
    <li>The Complete 2021 Web Development Bootcamp</li>
    <li>The Complete 2021 Flutter Development Bootcamp with Dart</li>
</ol>
<h3>Skills</h3>
<table>
    <tr>
        <td>HTML</td>
        <td>&#9734;&#9734;&#9734;&#9734;&#9734;</td>
    </tr>
    <tr>
        <td>CSS</td>
        <td>&#9734;&#9734;&#9734;&#9734;</td>
    </tr>
    <tr>
        <td>Android</td>
        <td>&#9734;&#9734;&#9734;</td>
    </tr>
    <tr>
        <td>Java</td>
        <td>&#9734;&#9734;</td>
    </tr>
</table>
<hr><div>
    <form action="NewPage.php" method="post">
        Name:<br> <input type="text" name="name" placeholder="YourName"><br>
        Email:<br> <input type="text" name="email" placeholder="YourEmail"><br>
        Country<br><select id="country" name="country">
            <option value="USA" >USA</option>
            <option value="canada">Canada</option>
            <option value="Australia">Australia</option>
        </select><br>
        <input type="submit">
    </form>
</div>
</body>
</html>