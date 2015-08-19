<!DOCTYPE html>
<html>
<head>
    <title>Advance</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/normal÷ize.css"> -->
    <link rel="stylesheet" type="text/css" href="/assets/style.css">
</head>
<body>


    <div class="main-container">


        <form action="/surveys/getInfo" method="POST">
        <table>
            <!-- name -->
            <tr>
                <td><label for="name">Name: </label></td>

                <td>
                    <div class="form-container">
                        <input type="text" name="name" id="name">
                    </div>
                </td>

            </tr>
            
            <!-- location -->
            <tr>
                <td><label for="location">Dojo Location: </label></td>
                <td>
                    <div class="form-container">
                        <div class="styled-select">
                            <select name="location">
                                <option>Seattle</option>
                                <option>Silicon Valley</option>
                                <option>Los Angeles</option>
                            </select>
                        </div>
                    </div>
                </td>
                
            </tr>

            
            <!-- languages -->
            <tr>
                <td><label for="languages"> Favorite Language</label></td>
                <td>                    
                    <div class="form-container">
                        <div class="styled-select">
                            <select name="languages">
                                <option>Javascript</option>
                                <option>PHP</option>
                                <option>Python</option>
                            </select>
                        </div>
                    </div>
                </td>
            </tr>
            
            <tr>
            <!-- comments -->
                <td colspan="2">                    
                    <label  for="comment">Comment (optional)</label>            
                    <textarea name="comment"></textarea>
                
                    <input type="submit" value="send">
                </td>
            </tr>
            

        </table>    
                                            
                        
                            
                    
            <!-- submit -->
        </form>
    </div>
        

</body>
</html>